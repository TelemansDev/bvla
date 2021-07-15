<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\View\View;

class HomeController extends Controller 
{
    public function index(): View {
        $categories = MainCategory::with('subcategories')->get();

        return view('home.main', [
            'categories' => $categories
        ]);
    }
}