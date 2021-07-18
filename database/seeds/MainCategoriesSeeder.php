<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MainCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('main_categories')->insert(
            [
                ['name' => 'Podstawy', 'slug' => 'podstawy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Jedzenie', 'slug' => 'jedzenie', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sport', 'slug' => 'sport', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Szkoła', 'slug' => 'szkola', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Transport', 'slug' => 'transport', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Zwierzęta', 'slug' => 'zwierzeta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]
        );       
    }
}
