<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;

class SubcategoryController extends Controller 
{
    public function showWords(int $categoryId, int $subcategoryId): View {
        $words = Word::whereHas('subcategory', function(Builder $query) use($categoryId) {
                $query->where('main_category_id', $categoryId);
            })
            ->where('subcategory_id', $subcategoryId)
            ->get();

        return View('category.subcategory', [
            'words' => $words
        ]);
    }
}