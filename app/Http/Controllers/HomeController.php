<?php

namespace App\Http\Controllers;

use App\Category;
use App\Items;
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
            'items' => Items::orderBy('name', 'desc')->get()
        ]);
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function loadCategory(Request $request)
    {
        if ($request->filter == null) {
            $items = Items::where('category_id', $request->id)->get();
        } else {
            $items = Items::where('category_id', $request->id)
                ->orderBy($request->column, $request->filter)
                ->get();
        }
        return view('layouts.itemsload', [
            'items' => $items
        ]);
    }

    public function loadSubcategory(Request $request)
    {
        if (sizeof($request->subcategory)) {
            if ($request->filter == null) {
                $items = Items::whereIn('subcategory_id', $request->subcategory)->get();
            } else {
                $items = Items::whereIn('subcategory_id', $request->subcategory)
                    ->orderBy($request->column, $request->filter)
                    ->get();
            }
        } else {
            if ($request->filter == null) {
                $items = Items::where('category_id', $request->category)->get();
            } else {
                $items = Items::where('category_id', $request->category)
                    ->orderBy($request->column, $request->filter)
                    ->get();
            }

        }

        return view('layouts.itemsload', [
            'items' => $items
        ]);
    }

    public function ajaxFilter(Request $request)
    {
        if (sizeof($request->subcategory)) {
            $items = Items::whereIn('subcategory_id', $request->subcategory)
                ->orderBy($request->column, $request->filter)
                ->get();
        } elseif ($request->category) {
            $items = Items::where('category_id', $request->category)
                ->orderBy($request->column, $request->filter)
                ->get();
        } else {
            if (!empty($request->column)) {
                $items = Items::orderBy($request->column, $request->filter)->get();
            } else {
                $items = Items::all();
            }
        }
        return view('layouts.itemsload', [
            'items' => $items
        ]);
    }
}
