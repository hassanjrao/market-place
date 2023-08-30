<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $popularCategories=Category::with(["products"])
        ->withCount(["products"])
        ->orderBy("products_count","desc")
        ->take(4)
        ->get();

        $products=Product::with(["createdBy","category","images"])
        ->latest()
        ->take(10)
        ->get();

        return view("front.home",compact("popularCategories","products"));
    }
}
