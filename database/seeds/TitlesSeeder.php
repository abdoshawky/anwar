<?php

use Illuminate\Database\Seeder;

class TitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\App\Normal\Title::count() == 0){
            $titles = json_decode(file_get_contents(public_path('seeds/titles.json')));
            foreach ($titles as $title){
                \App\Normal\Title::create(['id'=>$title->id, 'category_id'=>$title->category_id, 'name' => $title->name]);
            }
        }

        if(\App\UpNormal\Title::count() == 0){
            $titles = json_decode(file_get_contents(public_path('seeds/titlesUpnormal.json')));
            foreach ($titles as $title){
                \App\UpNormal\Title::create(['id'=>$title->id, 'category_id'=>$title->category_id, 'name' => $title->name]);
            }
        }
        
    }
}
