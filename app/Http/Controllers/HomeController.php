<?php

namespace App\Http\Controllers;

use App\Category;
use Hamcrest\SampleSelfDescriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'categories' => Category::with('subcategories')->get(),
        ]);
    }

    public function admin()
    {
        return view('admin.index');
    }
}
