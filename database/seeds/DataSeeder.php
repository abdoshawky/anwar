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
        $data = json_decode(file_get_contents(public_path('/json/data.json')));
        foreach ($data as $item){
            \App\Data::create(['section_id'=>$item->section_id, 'key'=>$item->key,'karat_message' => $item->karatMessage]);
        }
    }
}
