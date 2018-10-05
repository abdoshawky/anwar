<?php

namespace App\Http\Controllers\UpNormal;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\UpNormal\Category;
use App\UpNormal\Data;
use App\UpNormal\Section;
use App\UpNormal\Title;

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
        $path = public_path("json/dataUpnormal.json");
        $file = fopen($path, "w", 0777);
        fwrite($file, $data);
        $sections = Section::orderBy('id','desc')->get();
        $data = Data::with('section.title.category')->orderBy('id','desc')->paginate(10);
        return view('upnormal.data', compact('sections','data'));
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
