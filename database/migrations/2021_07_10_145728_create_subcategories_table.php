<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('subcategories', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name', 50);
        //     $table->integer('main_category_id')->index();
        //     $table->timestamps();
        // });

        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('slug', 50)->unique();
            $table->unsignedBigInteger('main_category_id');
            $table->timestamps();

            $table->foreign('main_category_id')->references('id')->on('main_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
