<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Config;
use App\Order;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $products = Product::all();

        return view('list',[
            'products' => $products
            ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product',[
            'product'   => $product
            ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('edit',[
            'product'   => $product
            ]);
    }

    public function update(Request $req,$id)
    {
        $product = Product::find($id);

        $product->name = $req->name;
        $product->size = $req->size;
        $product->price = $req->price;

        if($req->file('image') != null){
            // delete old file
            Storage::delete('public/materials/'.$product->image);

            // updata new file
            $product->image = time(). '.png';
            $req->file('image')->storeAs('public/materials',$product->image);
        }

        $product->save();

        return redirect('/home/product/'.$product->id);
    }

    public function delete($id)
    {
        $product = Product::find($id);

        // delete the image file
        Storage::delete('public/materials/'.$product->image);

        $product->delete();
        return redirect('home/list');
    }

    public function config()
    {
        $accVendor = Config::where('name','acc_vendor')->first()->value;
        $accNo = Config::where('name','acc_no')->first()->value;
        $accName = Config::where('name','acc_name')->first()->value;

        return view('config',[
            'accVendor' => $accVendor,
            'accNo'     => $accNo,
            'accName'   => $accName
            ]);
    }

    public function add()
    {
        return view('add');
    }

    public function insert(Request $req)
    {
        $product = new Product();
        $product->name = $req->name;
        $product->size = $req->size;
        $product->price = $req->price;
        $product->desc = $req->desc;
        $product->image = time(). '.png';

        $req->file('image')->storeAs('public/materials',$product->image);

        $product->save();
        return redirect('/home/list');
    }

    public function configUpdate(Request $req)
    {
        $accVendor = Config::find(1);
        $accVendor->value = $req->accVendor;
        $accVendor->save();

        $accNo = Config::find(2);
        $accNo->value = $req->accNo;
        $accNo->save();

        $accName = Config::find(3);
        $accName->value = $req->accName;
        $accName->save();

        return redirect('/home/config');
    }   

    public function report()
    {
        $orders = Order::all();
        
        $carbon = new Carbon();

        $ordersNotConfirm = Order::where('confirm',0)->get();

        $ordersConfirm = Order::where('confirm',1)->get();

        $bigAmount = collect($orders)->sum('amount');
        $bigTotal = collect($orders)->sum('total');

        return view('report',[
            'ordersNotConfirm' => $ordersNotConfirm,
            'ordersConfirm' => $ordersConfirm,
            'carbon' => $carbon,
            ]);
    }

    public function showReport($id)
    {
        $order = Order::find($id);
        return view('showReport',[
            'order' => $order,
            ]);
    }

    public function confirm($id)
    {
        $order = Order::find($id);

        $order->confirm = 1;

        $order->save();

        return redirect('/home/report');
    }

    public function report17()
    {
        $orders = Order::all();

        // get the stack
        $report = collect();

        foreach($orders as $order){
            $dt = Carbon::parse($order->created_at);

            if(($dt->year == "2017") && ($order->confirm == "1" )){
                $report->push($order);
            }
        }

        $bigAmount = $report->sum('amount');
        $bigTotal = $report->sum('total');

        return view('yearsReport',[
            'title' => 'Report 2017',
            'orders' => $report,
            'bigAmount' => $bigAmount,
            'bigTotal' => $bigTotal,
            ]);
    }

    public function report16()
    {
        $orders = Order::all();

        // get the stack
        $report = collect();

        foreach($orders as $order){
            $dt = Carbon::parse($order->created_at);

            if(($dt->year == "2016") && ($order->confirm == "1" )){
                $report->push($order);
            }
        }

        $bigAmount = $report->sum('amount');
        $bigTotal = $report->sum('total');

        return view('yearsReport',[
            'title' => 'Report 2016',
            'orders' => $report,
            'bigAmount' => $bigAmount,
            'bigTotal' => $bigTotal,
            ]);
    }


}
