<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){

        $users=User::count();

        $orders=Order::count();

        $products=Product::count();

        $categories=Category::count();

        return view("admin.dashboard.index",compact("users","orders","products","categories"));

    }
}
