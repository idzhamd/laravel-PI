<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Config;

class ShopController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(4);
    	return view('shop',[
    		'products'	=> $products
    		]);
    }

    public function show($id)
    {
    	$product = Product::find($id);
    	return view('detail',[
    		'product'	=> $product
    		]);
    }

    public function buy(Request $req)
    {
        $this->validate($req,[
            'id'            => 'required|numeric',
            'amount'        => 'required|numeric',
            'name'          => 'required',
            'phoneNumber'   => 'required|numeric',
            'email'         => 'required',
            'address'       => 'required',
            ]);

        $order = new Order();
        $product = Product::find($req->id);

        $order->product_id = $req->id;
        $order->amount = $req->amount;
        $order->name = $req->name;
        $order->phoneNumber = $req->phoneNumber;
        $order->email = $req->email;
        $order->address = $req->address;
        $order->total = $order->amount * $product->price;
        $order->save();

        return redirect("order/$order->id");
    }

    public function print($id)
    {
        $order = Order::find($id);
        $product = Product::find($order->id);

        return view('thanks',[
            'order' => $order,
            'product' => $product,
            'accVendor'=> Config::where('name','acc_vendor')->first()->value,
            'accNo'=> Config::where('name','acc_no')->first()->value,
            'accName'=> Config::where('name','acc_name')->first()->value,
            ]);
    }
}
