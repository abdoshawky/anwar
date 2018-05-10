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
        $titles = json_decode(file_get_contents(public_path('seeds/titles.json')));
        foreach ($titles as $title){
            \App\Title::create(['id'=>$title->id, 'category_id'=>$title->category_id, 'name' => $title->name]);
        }
    }
}
