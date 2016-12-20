<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryCreate;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create', [
            'categorieschild' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryCreate|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreate $request)
    {
        dd(Input::all());
        $category = Category::create($request->all());
        $category->subcategories()
            ->saveMany(
                array_map(function ($subcategoryName) {
                    return new Subcategory(['name' => $subcategoryName]);
                }, Input::get('subcategory'))
            );

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.categories.show', [
            'category' => Category::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.categories.edit', [
            'category' => Category::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryCreate|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryCreate $request, $id)
    {
        Category::find($id)->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
