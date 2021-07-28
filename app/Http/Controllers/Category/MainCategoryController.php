<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Subcategory;
use Illuminate\View\View;

class MainCategoryController extends Controller
{
    public function showSubcategories(MainCategory $mainCategory): View {
        $mainCategoryName = $mainCategory->name;
        $mainCategorySlug = $mainCategory->slug;
        $subcategories = Subcategory::findMainCategory($mainCategory)->get();

        return view('category.mainCategory', [
            'mainCategoryName' => $mainCategoryName,
            'mainCategorySlug' => $mainCategorySlug,
            'subcategories' => $subcategories
        ]);
    }
}
