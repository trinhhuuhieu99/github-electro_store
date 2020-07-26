<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;



class CartController extends Controller
{
    public function add($type, Request $req)
    {
        $product = Product::where('id', $type)->first();

        if($req->qty){
            $qty=$req->qty;
        }else{
            $qty=1;
        }

        if ($product->promotion_price > 0) {
            $price = $product->promotion_price;
        } else {
            $price= $product->unit_price;
        }
        

        $cart =[ 'id'=>$type, 'name'=>$product->name,'qty'=>$qty , 'price'=>$price, 'options' => array('image' => $product->image) ];

        Cart::add($cart);
        dd(Cart::content());
        $req->session()->flash('status', 'Thêm sản phẩm thành công');
        return redirect()->back();
    }
}
