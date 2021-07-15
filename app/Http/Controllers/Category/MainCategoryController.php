<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Subcategory;
use Illuminate\View\View;

class MainCategoryController extends Controller 
{
    public function showSubcategories(int $categoryId): View {
        $categoryName = MainCategory::findOrFail($categoryId)->name;
        $subcategories = Subcategory::with('words')->where('main_category_id', $categoryId)->get();

        return View('category.mainCategory', [
            'categoryName' => $categoryName,
            'subcategories' => $subcategories
        ]);
    }
}