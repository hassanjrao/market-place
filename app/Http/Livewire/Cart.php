<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $products;

    // add validation rules
    protected $rules = [
        "products.*.quantity" => "required|numeric|min:1",
    ];

    public $checkoutCalculations=[
        "sub_total"=>0,
        "order_total"=>0,
    ];


    public function updated(){

        $this->validate();

        $this->products=$this->products->map(function($product){
            $product["total_price"]=floatval($product["quantity"]) * floatval($product["original_price"]);

            return $product;
        });

        $this->calculateCheckout();

    }


    public function calculateCheckout(){

        $this->checkoutCalculations["sub_total"] = $this->products->sum("total_price");
        $this->checkoutCalculations["order_total"] = $this->products->sum("total_price");

    }





    public function removeFromCart($product_id)
    {

        // remove the product_id from the session
        $cartItems = session()->get("cart.products");

        // remove product_id form cartItems array
        $cartItems = array_diff($cartItems, [$product_id]);
        // update session
        session()->put("cart.products", $cartItems);

        $this->products=$this->products->filter(function($product) use ($product_id){
            return $product["id"]!=$product_id;
        });

        $this->calculateCheckout();

    }


    public function getProducts(){


        $cartItems = session()->get("cart.products");

        if(!$cartItems){
            $this->products=[];
            return;
        }

        // remove duplicates
        $cartItems = array_unique($cartItems);

        // get products
        $products = Product::whereIn("id", $cartItems)->with("images")->get();

        $products=$products->map(function($product){

            return [
                "id"=>$product->id,
                "title"=>$product->title,
                "original_price"=>$product->price,
                "total_price"=>$product->price,
                "quantity"=>1,
                "main_image"=>$product->main_image_url,
            ];

        });

        $this->products = $products;

        $this->calculateCheckout();
    }

    public $clientSecret;

    public function getIntent(){
        $user = Auth::user();

        $intent = $user->createSetupIntent();

        $this->clientSecret = $intent->client_secret;

    }



    public function mount()
    {

        $this->products=collect();
        $this->getProducts();

        $this->getIntent();
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
