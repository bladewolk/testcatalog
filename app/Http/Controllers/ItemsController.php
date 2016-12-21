<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ItemsCreate;
use App\Items;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
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
//        if (Input::file()) {
//            $filename = $request->file('image')->store('public');
//            $path = substr($filename, 7);
//
//        } else $path = '0383a250e987fe737edbf2518f208bc7.jpeg';


        $category_id = Subcategory::find($request->subcategory_id)->category()->get()->first()->id;
        $item = new Items($request->all());
        $item->category_id = $category_id;
        if (empty($request->image)) {
            $item->image = "http://www.novelupdates.com/img/noimagefound.jpg";
        }
//        $item->image = $path;
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
        dd(Input::all());
        $item = Items::find($id);
        $item->fill($request->all());

//        if (Input::file()) {
//            $filename = $request->file('image')->store('public');
//            $path = substr($filename, 7);
//            $item->image = $path;
//        }

        $item->update();
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
