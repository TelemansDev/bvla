<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\View\View;

class HomeController extends Controller {
    public function index(): View {
        $categories = MainCategory::all();
        
        //$category = MainCategory::find(1);
        //dd($category->subcategories->count());

        return view('home.main', [
            'categories' => $categories
        ]);
    }
}