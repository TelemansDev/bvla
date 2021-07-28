<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubcategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('subcategories')->insert(
            [
                ['name' => 'Dni tygodnia', 'slug' => 'dni-tygodnia', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kolory', 'slug' => 'kolory', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Liczebniki', 'slug' => 'liczebniki', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nazwy miesięcy', 'slug' => 'nazwy-miesiecy', 'main_category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Owoce', 'slug' => 'owoce', 'main_category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Warzywa', 'slug' => 'warzywa', 'main_category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mięso', 'slug' => 'mieso', 'main_category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Dyscypilny', 'slug' => 'dyscypliny', 'main_category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Piłka nożna', 'slug' => 'pilka-nozna', 'main_category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sport motorowy', 'slug' => 'sport-motorowy', 'main_category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Przedmioty szkolne', 'slug' => 'przedmioty-szkolne', 'main_category_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Pomieszczenia', 'slug' => 'pomieszczenia', 'main_category_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Osoby', 'slug' => 'osoby', 'main_category_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Środki transportu', 'slug' => 'srodki-transportu', 'main_category_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Lotnisko', 'slug' => 'lotnisko', 'main_category_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Domowe', 'slug' => 'domowe', 'main_category_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ptaki', 'slug' => 'ptaki', 'main_category_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ryby', 'slug' => 'ryby', 'main_category_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]
        );
    }
}
