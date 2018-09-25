<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Title;
use App\Section;

class SectionsController extends Controller
{
    public function show(){
        $section = Section::select('id','name','title_id')->get();
        $data = json_encode($section);
        $path = public_path("json/sections.json");
        $file = fopen($path, "w");
        fwrite($file, $data);
        $titles = Title::orderBy('id','desc')->get();
        $sections = Section::with('title.category')->orderBy('id','desc')->paginate(10);
        return view('sections', compact('sections','titles'));
    }

    public function save(Request $request){
        if($request->has('name') && $request->has('title_id')){
            $sectionData = [
                'name'      =>  $request->get('name'),
                'title_id'  =>  $request->get('title_id')
            ];
            if($request->has('id')){
                $sectionData['id'] = $request->get('id');
            }

            Section::create($sectionData);
            session()->put('title_id',$request->get('title_id'));
            session()->put('success','Data stored successfully');
        }
        return redirect()->back();
    }

    public function delete(Request $request, $id){
        $section = Section::find($id);
        if(!empty($section)){
            $section->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }
}
