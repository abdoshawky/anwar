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
        // return view('welcome');
        return redirect('login');
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

}
