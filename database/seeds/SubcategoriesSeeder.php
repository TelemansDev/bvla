<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubcategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('subcategories')->truncate();
        DB::table('subcategories')->insert(
            [
                ['name' => 'Dni tygodnia', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kolory', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Liczebniki', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nazwy miesięcy', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Owoce', 'main_category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Warzywa', 'main_category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mięso', 'main_category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Dyscypilny', 'main_category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Piłka nożna', 'main_category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sport motorowy', 'main_category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]
        );       
    }
}
