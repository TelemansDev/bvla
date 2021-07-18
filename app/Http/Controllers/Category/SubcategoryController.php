<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Subcategory;
use App\Models\Word;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;

class SubcategoryController extends Controller 
{
    public function showWords(MainCategory $mainCategory, Subcategory $subcategory): View {
        // $words = Word::whereHas('subcategory', function(Builder $query) use($categoryId) {
        //         $query->where('main_category_id', $categoryId);
        //     })
        //     ->where('subcategory_id', $subcategoryId)
        //     ->get();

        // return View('category.subcategory', [
        //     'words' => $words
        // ]);

        $words = Word::whereHas('subcategory', function(Builder $query) use ($mainCategory) {
                $query->where('main_category_id', $mainCategory->id);
            })
            ->where('subcategory_id', $subcategory->id)
            ->get();

        return View('category.subcategory', [
            'mainCategoryName' => $mainCategory->name,
            'subcategoryName' => $subcategory->name,
            'words' => $words
        ]);
    }
}