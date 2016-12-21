<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ItemsCreate;
use App\Items;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Intervention\Image\Facades\Image;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.items.index', [
            'items' => Items::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemsCreate $request)
    {
        if (Input::file()) {
            $path = $request->file('image')->store('images');
        } else $path = 'images/noimage.jpg';

        $category_id = Subcategory::find($request->subcategory_id)->category()->get()->first()->id;
        $item = new Items($request->all());
        $item->category_id = $category_id;
        $item->image = $path;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.items.show', [
            'item' => Items::with('category')
                ->with('subcategory')
                ->find($id)
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
        return view('admin.items.edit', [
            'item' => Items::with('category')
                ->with('subcategory')
                ->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Items::find($id);
        dd(Input::all());
        if (Input::file()) {
            $image = Input::file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/images/' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
        } else $filename = 'noimage.jpg';

        Items::find($id)->update($request->all());
        return redirect()->route('items.index');
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
