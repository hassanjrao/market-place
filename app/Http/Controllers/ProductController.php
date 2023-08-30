<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with(["createdBy","category","images"])
        ->latest()
        ->paginate(20);

        // add images to products
        foreach($products as $product){
            $main_image=$product->images->filter(function($image){
                return $image->is_main==1;
            })->first();

            $product->main_image=$main_image ? $main_image->image : null;
        }


        $categories=Category::with(["products"])
        ->latest()
        ->get();

        return view("front.products.index",compact("products","categories"));
    }

    public function userProducts()
    {
        $products=Product::with(["createdBy","category","images"])
        ->where("created_by",auth()->user()->id)
        ->latest()
        ->paginate(20);

       return view("front.profile.products",compact("products"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=null;

        $categories=Category::latest()->get();

        return view("front.products.add_edit",compact("product","categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "image"=>"required|image",
            "category"=>"required|exists:categories,id",
            "title"=>"required",
            "price"=>"required|numeric",
        ]);

        $image=$request->file("image")->store("products");

        $product=Product::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "category_id"=>$request->category,
            "created_by"=>auth()->user()->id,
            "price"=>$request->price,
        ]);

        $product->images()->create([
            "image"=>$image,
            "is_main"=>1,
        ]);

        return redirect()->route("products.index")->with("success","Product added successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
