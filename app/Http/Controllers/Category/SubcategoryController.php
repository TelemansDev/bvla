<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Subcategory;
use App\Models\Word;
use Illuminate\View\View;

class SubcategoryController extends Controller
{
    public function showWords(MainCategory $mainCategory, Subcategory $subcategory) {
        $words = Word::findMainCategoryAndSubcategory($mainCategory, $subcategory)->get();

        if (count($words) === 0) {
            return redirect()->route('home.list');
        }

        return View('category.subcategory', [
            'mainCategoryName' => $mainCategory->name,
            'subcategoryName' => $subcategory->name,
            'words' => $words
        ]);
    }
}
