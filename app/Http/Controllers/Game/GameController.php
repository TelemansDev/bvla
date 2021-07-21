<?php

declare(strict_types=1);

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Subcategory;
use App\Models\Word;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
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

    public function check(MainCategory $mainCategory, Subcategory $subcategory, Request $request): View {
        $words = Word::where('subcategory_id', $subcategory->id)->get();
        $requestWords = $request->all();
        $correctWords = [];
        $comparisonWords = [];
        $userCorrectWordsCount = 0;

        foreach ($words as $word) {
            $correctWords[$word->name_pl] = $word->name_en;
        }

        foreach ($requestWords as $requestWord) {
            $requestKey = str_replace('_', ' ', key($requestWords));

            if (key_exists($requestKey, $correctWords)) {
                $comparisonWords[] = [
                    'name_pl' => $requestKey,
                    'answer_user' => $requestWord,
                    'answer_correct' => $correctWords[$requestKey]
                ];

                if ($requestWord === $correctWords[$requestKey])
                    $userCorrectWordsCount++;
            }

            next($requestWords);
        }

        return View('game.result', [
            'mainCategoryName' => $mainCategory->name,
            'subcategoryName' => $subcategory->name,
            'comparisonWords' => $comparisonWords,
            'correctWordsCount' => count($correctWords),
            'userCorrectWordsCount' => $userCorrectWordsCount
        ]);
    }
}
