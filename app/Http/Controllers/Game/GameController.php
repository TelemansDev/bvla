<?php

declare(strict_types=1);

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Subcategory;
use App\Models\Word;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;

class GameController extends Controller
{
    public function index(MainCategory $mainCategory, Subcategory $subcategory) {
        $words = Word::whereHas('subcategory', function(Builder $query) use ($mainCategory) {
            $query->where('main_category_id', $mainCategory->id);
        })
            ->where('subcategory_id', $subcategory->id)
            ->inRandomOrder()
            ->get();

        if (count($words) === 0) {
            return redirect()->route('home.list');
        }

        return View('game.main', [
            'mainCategoryName' => $mainCategory->name,
            'subcategoryName' => $subcategory->name,
            'words' => $words
        ]);
    }
}
