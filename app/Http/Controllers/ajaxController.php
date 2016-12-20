<?php

namespace App\Http\Controllers;

use App\Category;
use App\Items;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ajaxController extends Controller
{
    public function deleteCategory(Request $request, Category $category)
    {
        $category::find($request->id)->delete();
    }

    public function loadSubcategory(Request $request)
    {
        return view('admin.items.loadSubcategory', [
            'subcategories' => Subcategory::where('category_id', $request->id)->get()
        ]);
    }

    public function deleteItem(Request $request)
    {
        Items::find($request->id)->delete();
    }
}
