<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function show(){
        $categories = \App\Category::all();
        $data = json_encode($categories);
        $path = public_path('json/categoriesUpnormal.json');
        $file = fopen($path, "w");
        fwrite($file, $data);

        $categories = Category::orderBy('id','desc')->paginate(10);
        return view('categories', compact('categories'));
    }

    public function save(Request $request){
        if($request->has('name')){
            Category::create(['name'=>$request->get('name')]);
            session()->put('success','Data stored successfully');
        }
        return redirect()->back();
    }

    public function update(Request $request, $id){
        if($request->has('name')){
            Category::find($id)->update(['name'=>$request->get('name')]);
            session()->put('success','Data updated successfully');
        }
        return redirect()->back();
    }

    public function delete(Request $request, $id){
        $category = Category::find($id);
        if(!empty($category)){
            $category->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }

}
