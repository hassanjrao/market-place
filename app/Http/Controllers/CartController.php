<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("front.carts.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "product_id" => "required|exists:products,id"
        ]);

        // add product to session
        $request->session()->push("cart.products", $request->product_id);


        return response()->json([
            "message" => "Product added to cart",
            "cart" => $request->session()->get("cart"),
        ]);
    }

    public function remove(Request $request)
    {
        $request->validate([
            "product_id" => "required|exists:products,id"
        ]);


        // remove the product_id from the session
        $cartItems=session()->get("cart.products");

        // remove product_id form cartItems array
        $cartItems=array_diff($cartItems,[$request->product_id]);


        // update session
        $request->session()->put("cart.products",$cartItems);


        return response()->json([
            "message" => "Product removed from cart",
            // "cart" => $request->session()->get("cart"),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
