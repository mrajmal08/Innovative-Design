<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Design;
use App\Models\User;

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

        $designCount = Design::count();
        $designerCount = User::where('role_id', 2)->count();
        $visitorCount = User::where('role_id', 3)->count();
        $categoryCount = Category::count();

        return view('home', compact('designCount', 'designerCount', 'visitorCount', 'categoryCount'));
    }
}
