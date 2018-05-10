<?php

namespace App\Http\Controllers;

use App\Cases;
use App\Category;
use App\Data;
use App\Section;
use App\Title;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test(){

        // read the content of vws folder
        $vws = scandir(public_path('vws'));
        $data = Data::where('key','LIKE','%vws%')->pluck('karat_message');
        $filteredData = [];
        foreach ($data as $item){
            $item = str_replace(['‘','’'],'',$item);
            $item = str_replace(['(right)','(Right)','(Right engine, Gearbox)','(possible)'],'',$item);
            $item = str_replace(['  '],' ',$item);
            $filteredData[] = $item;
        }
        return $filteredData;
    }


    public function showCategories(){
        $categories = \App\Category::all();
        $data = json_encode($categories);
        $path = public_path('json/categoriesUpnormal.json');
        $file = fopen($path, "w");
        fwrite($file, $data);

        $categories = Category::orderBy('id','desc')->get();
        return view('categories', compact('categories'));
    }

    public function saveCategories(Request $request){
        if($request->has('name')){
            Category::create(['name'=>$request->get('name')]);
            session()->put('success','Data stored successfully');
        }
        return redirect()->back();
    }

    public function deleteCategories(Request $request, $id){
        $category = Category::find($id);
        if(!empty($category)){
            $category->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }


    public function showTitles(){
        $categories = Category::all();
        $titles = Title::select('id','name','category_id')->get();
        $data = json_encode($titles);
        $path = public_path("json/titles.json");
        $file = fopen($path, "w");
        fwrite($file, $data);

        $titles = Title::with('category')->orderBy('id','desc')->get();
        return view('titles', compact('titles','categories'));
    }

    public function saveTitles(Request $request){
        if($request->has('name') && $request->has('category_id')){
            Title::create(['name'=>$request->get('name'),'category_id'=>$request->get('category_id')]);
            session()->put('category_id',$request->get('category_id'));
            session()->put('success','Data stored successfully');
        }
        return redirect()->back();
    }

    public function deleteTitles(Request $request, $id){
        $title = Title::find($id);
        if(!empty($title)){
            $title->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }


    public function showSections(){
        $section = Section::select('id','name','title_id')->get();
        $data = json_encode($section);
        $path = public_path("json/sections.json");
        $file = fopen($path, "w");
        fwrite($file, $data);
        $titles = Title::orderBy('id','desc')->get();
        $sections = Section::with('title.category')->orderBy('id','desc')->get();
        return view('sections', compact('sections','titles'));
    }

    public function saveSections(Request $request){
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

    public function deleteSections(Request $request, $id){
        $section = Section::find($id);
        if(!empty($section)){
            $section->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }


    public function showData(){
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

//

            $response[] = $test;
        };
        $data = json_encode($response);
        $path = public_path("json/data.json");
        $file = fopen($path, "w");
        fwrite($file, $data);
        $sections = Section::orderBy('id','desc')->paginate(10);
        $data = Data::with('section.title.category')->orderBy('id','desc')->get();
        return view('data', compact('sections','data'));
    }

    public function saveData(Request $request){
        if($request->has('key') && $request->has('karat_message') && $request->has('section_id')){
            Data::create(['key'=>$request->get('key'),'karat_message'=>$request->get('karat_message'), 'section_id'=>$request->get('section_id')]);
            session()->put('section_id',$request->get('section_id'));
            session()->put('success','Data stored successfully');
        }
        return redirect()->back();
    }

    public function deleteData(Request $request, $id){
        $data = Data::find($id);
        if(!empty($data)){
            $data->delete();
            session()->put('success','Data deleted successfully');
        }
        return redirect()->back();
    }

}
