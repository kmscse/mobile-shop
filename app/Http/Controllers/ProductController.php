<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function productForm()
    {
        $categories = Category::all();
        return view('admin.product_form', compact('categories'));
    }

    public function qcsForm()
    {
        return view('admin.qcs_form');
    }

    public function addProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        $product->discount_expire_date = $request->discount_expire_date;
        $product->description = $request->description;
        $product->user_id = auth()->user()->id;
        

        $product_photo_all_tmp_name = "";
        foreach($request->product_photos as $product_photo)
        {
            $product_photo_name = uniqid()."_".$product_photo->getClientOriginalName();
            $product_photo->storeAs('images', $product_photo_name);
            $product_photo_all_tmp_name.=$product_photo_name.",";
        }
        $product_photo_all_name = substr($product_photo_all_tmp_name, 0, -1);
        $product->product_photo = $product_photo_all_name;
        $product->save();
        return back();
    }

    public function test()
    {
        return auth()->user()->id;
    }
}
