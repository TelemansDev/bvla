<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;

class SubcategoryController extends Controller {
    public function showWords(int $categoryId, int $subcategoryId) {
        dd($subcategoryId);
    }
}