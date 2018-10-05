<?php

use Illuminate\Database\Seeder;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\App\Normal\Section::count() == 0){
            $sections = json_decode(file_get_contents(public_path('seeds/sections.json')));
            foreach ($sections as $section){
                \App\Normal\Section::create(['id'=>$section->id, 'title_id'=>$section->title_id, 'name' => $section->name]);
            }   
        }

        if(\App\UpNormal\Section::count() == 0){
            $sections = json_decode(file_get_contents(public_path('seeds/sectionsUpnormal.json')));
            foreach ($sections as $section){
                \App\UpNormal\Section::create(['id'=>$section->id, 'title_id'=>$section->title_id, 'name' => $section->name]);
            }   
        }
        
    }
}
