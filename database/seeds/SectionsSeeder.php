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
        $sections = json_decode(file_get_contents(public_path('/json/sections.json')));
        foreach ($sections as $section){
            if(\App\Section::where('name',$section->name)->count() == 0){
                \App\Section::create(['id'=>$section->id, 'title_id'=>$section->title_id, 'name' => $section->name]);
            }
        }
    }
}
