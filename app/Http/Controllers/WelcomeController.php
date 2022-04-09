<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();

        return view('welcome')->with([
            'categories' => $categories
        ]);
    }
}
