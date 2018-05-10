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
        $data = json_decode(file_get_contents(public_path('seeds/data.json')));
        foreach ($data as $item){
            \App\Data::create(['id'=>$item->id, 'section_id'=>$item->section_id, 'key'=>$item->key,'karat_message' => $item->karatMessage]);
        }
    }
}
