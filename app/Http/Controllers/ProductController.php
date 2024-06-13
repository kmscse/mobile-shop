<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AvailableProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::with('product')->get();
        return view('index', compact('products', 'categories'));
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
        $products = Product::all();
        $colors = Color::all();
        return view('admin.qcs_form', compact('products', 'colors'));
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

    public function addQcs(Request $request)
    {
        $available_product = new AvailableProduct;
        $available_product->product_id = $request->product_id;
        $available_product->quantity = $request->quantity;
        $available_product->color_id = $request->color_id;
        $available_product->storage = $request->storage;
        $available_product->user_id = auth()->user()->id;
        $available_product->save();
        return back();
    }

    public function showProductDetail(string $id)
    {
        $available_products = AvailableProduct::where('product_id', $id)->get();
        $product = Product::find($id);
        $categories = Category::with('product')->get();
        return view('detail', compact('categories', 'available_products', 'product'));
    }

    public function detailColor(Request $request)
    {
        return $available_storages = AvailableProduct::where('product_id', $request->product_id)->where('color_id',$request->color_id)->get();
    }

    public function detailStorage(Request $request)
    {
        return $available_storages = AvailableProduct::where('product_id', $request->product_id)->where('color_id',$request->color_id)->where('storage', $request->storage)->first();
    }

    public function addToCart(Request $request, $id)
    {
        $available_product = AvailableProduct::where('product_id', $id)->where('color_id',$request->color_id)->where('storage', $request->storage)->first();
        $cart[$available_product->id] = [
            "quantity" => $request->quantity,
            "buy_price" => $request->buy_price
        ];
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function test()
    {
        return auth()->user()->id;
    }
}
