<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\App\Normal\Data::count() == 0){
            $data = json_decode(file_get_contents(public_path('seeds/data.json')));
            foreach ($data as $item){
                \App\Normal\Data::create(['section_id'=>$item->section_id, 'key'=>$item->key,'karat_message' => $item->karatMessage]);
            }
        }

        if(\App\UpNormal\Data::count() == 0){
            $data = json_decode(file_get_contents(public_path('seeds/dataUpnormal.json')));
            foreach ($data as $item){
                \App\UpNormal\Data::create(['section_id'=>$item->section_id, 'key'=>$item->key,'karat_message' => $item->karatMessage]);
            }
        }
        
    }
}
