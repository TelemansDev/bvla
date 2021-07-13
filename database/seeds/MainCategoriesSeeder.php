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
                ['name' => 'Podstawy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Jedzenie', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sport', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Szkoła', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Transport', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Zwierzęta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]
        );       
    }
}
