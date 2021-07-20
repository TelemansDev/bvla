<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Home\HomeController@index')
    ->name('home.list');

Route::get('/{mainCategory}', 'Category\MainCategoryController@showSubcategories')
    ->name('category.mainCategory.show');

Route::get('/{mainCategory}/{subcategory}', 'Category\SubcategoryController@showWords')
    ->name('category.subcategory.show');

Route::get('/{mainCategory}/{subcategory}/game', 'Game\GameController@index')
    ->name('game.list');