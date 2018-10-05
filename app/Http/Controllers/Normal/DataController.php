<?php

namespace App\Http\Controllers\Normal;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Normal\Category;
use App\Normal\Data;
use App\Normal\Section;
use App\Normal\Title;

class DataController extends Controller
{
    public function show(){
        $allData = Data::with('section.title.category')->get();
        $response = [];
        foreach ($allData as $item){

            $test = [
                'id'            => $item->id,
                'key'           => $item->key,
                'karatMessage'  => $item->karat_message,
                'section_id'    => $item->section_id,
                'title_id'      => $item->section->title->id,
                'category_id'   => $item->section->title->category->id
            ];

            $response[] = $test;
        };
        $data = json_encode($response);
        $path = public_path("json/data.json");
        $file = fopen($path, "w", 0777);
        fwrite($file, $data);
        $sections = Section::orderBy('id','desc')->get();
        $data = Data::with('section.title.category')->orderBy('id','desc')->paginate(10);
        return view('normal.data', compact('sections','data'));
    }

    public function save(Request $request){
        if($request->has('key') && $request->has('karat_message') && $request->has('section_id')){
            Data::create(['key'=>$request->get('key'),'karat_message'=>$request->get('karat_message'), 'section_id'=>$request->get('section_id')]);
            session()->put('section_id',$request->get('section_id'));
            session()->put('success','Data stored successfully');
        }
        return redirect()->back();
    }

    public function delete(Request $request, $id){
        $data = Data::find($id);
        if(!empty($data)){
            $data->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }
}
