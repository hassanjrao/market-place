<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=auth()->user();
        if ($user->hasRole('admin')) {
            return '/admin';
        } elseif ($user->hasRole('user')) {
            return redirect()->route("news-feeds.index");
        } else {
            // logout if user has no role
            auth()->logout();

            return '/login';
        }
    }
}
