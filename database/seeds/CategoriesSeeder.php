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
        if(\App\UpNormal\Category::count() == 0){
            $categories = json_decode(file_get_contents(public_path('seeds/categoriesUpnormal.json')));
            foreach ($categories as $category){
                \App\UpNormal\Category::create(['id'=>$category->id,'name' => $category->name]);

            }
        }
        

        if(\App\Normal\Category::count() == 0){
            $categories = json_decode(file_get_contents(public_path('seeds/categories.json')));
            foreach ($categories as $category){
                \App\Normal\Category::create(['id'=>$category->id,'name' => $category->name]);

            }
        }

    }
}
