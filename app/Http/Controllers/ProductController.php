<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index(){
        $data= Product::all();
       return view('product',['products'=>$data]);
    }
    function details($id){
        $data= Product::find($id);
        return view('details',['product'=> $data]);
    }
    function search(Request $req){
         // $req->input();
         $data= Product::where('Name','like', '%'.$req->input('query').'%')->get();
         return view('search',['result'=>$data]);
    }
    function AddtoCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->productid;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }

    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    public function cartlist(){
        $userId=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
       // ->join('cart','products.product_id','=','product_id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
       // ->distinct('cart.user_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }
    public function delItem($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function orderNow(){
        $userId=Session::get('user')['id'];
         $total=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.Price');
        return view('ordernow',['total'=>$total]);
    }
    public function OrderPlace(Request $req){
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_methid=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
         $req->input();
         return redirect('/');
    }
    static function myorders(){
        $userId=Session::get('user')['id'];
        return Order::where('user_id',$userId)->count();
    }
    public function myorderlist(){
        $userId=Session::get('user')['id'];
        $products=DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('orderslist',['orders'=>$products]);
    }

}
