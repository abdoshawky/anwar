<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = json_decode(file_get_contents(public_path('seeds/categoriesUpnormal.json')));
        foreach ($categories as $category){
            \App\Category::create(['id'=>$category->id,'name' => $category->name]);

        }

    }
}
