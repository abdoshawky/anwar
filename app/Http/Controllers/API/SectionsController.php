<?php

namespace App\Http\Controllers\API;

use App\Section;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{
    public function shiftSections(Request $request){
        $input = $request->all();
        $rules = [
            'section_id'    => 'required',
            'steps'         => 'required'
        ];
        $validation = Validator::make($input, $rules);
        if($validation->fails()){
            $error = [
                'message'   => $validation->errors()->first()
            ];
            return response()->json($error, 400);
        }

        $sectionsToBeShifted = Section::where('id','>=',$input['section_id'])->orderBy('id','desc')->get();
        foreach ($sectionsToBeShifted as $section){
            $newId = $section->id + $input['steps'];
            $section->update(['id'=>$newId]);
        }
    }
}
