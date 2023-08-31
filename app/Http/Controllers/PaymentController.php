<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            "products" => "required|array",
            "products.*.id" => "required|exists:products,id",
        ]);

        $totalPrice = 0;

        $cartProducts = collect($request->products);

        $productIds=$cartProducts->pluck("id");

        $products=Product::whereIn("id",$productIds)->get();



        foreach($products as $product){

            $cartProduct=$cartProducts->where("id",$product->id)->first();

            $product->quantity=$cartProduct["quantity"];

            $totalPrice+= $product->price * $cartProduct["quantity"];

        }


        $user = Auth::user();
        $paymentMethod = $request->input('payment_method');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        try {
            $user->charge($totalPrice * 100, $paymentMethod);
        } catch (\Exception $e) {
            Log::error("PaymentController@store",[
                "message"=>$e->getMessage(),
                "trace"=>$e->getTraceAsString(),
            ]);
            return back()->with('toast_error',['Error ' . $e->getMessage()]);
        }

        $order= Order::create([
            "user_id"=>Auth::id(),
            "total_price"=>$totalPrice,
        ]);

        foreach($products as $product){
            $order->orderItems()->create([
                "product_id"=>$product->id,
                "quantity"=>$product->quantity,
                "price"=>$product->price,
            ]);
        }

        // empty cart session
        session()->forget("cart.products");

        return redirect()->route("orders.user")->with('toast_success', 'Order created successfully!');
    }
}
