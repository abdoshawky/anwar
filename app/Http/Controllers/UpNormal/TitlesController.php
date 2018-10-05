<?php

namespace App\Http\Controllers\UpNormal;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\UpNormal\Category;
use App\UpNormal\Title;


class TitlesController extends Controller
{
    
    public function show(){
        $categories = Category::all();
        $titles = Title::select('id','name','category_id')->get();
        $data = json_encode($titles);
        $path = public_path("json/titlesUpnormal.json");
        $file = fopen($path, "w", 0777);
        fwrite($file, $data);

        $titles = Title::with('category')->orderBy('id','desc')->paginate(10);
        return view('upnormal.titles', compact('titles','categories'));
    }

    public function save(Request $request){
        if($request->has('name') && $request->has('category_id')){
            Title::create(['name'=>$request->get('name'),'category_id'=>$request->get('category_id')]);
            session()->put('category_id',$request->get('category_id'));
            session()->put('success','Data stored successfully');
        }
        return redirect()->back();
    }

    public function update(Request $request, $id){
        if($request->has('name') && $request->has('category_id')){
            Title::find($id)->update(['name'=>$request->get('name'),'category_id'=>$request->get('category_id')]);
            session()->put('success','Data updated successfully');
        }
        return redirect()->back();
    }

    public function delete(Request $request, $id){
        $title = Title::find($id);
        if(!empty($title)){
            $title->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }
}
