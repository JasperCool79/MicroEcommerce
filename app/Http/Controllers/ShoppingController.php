<?php

namespace App\Http\Controllers;

use App\Product;
use App\Proof;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $product = Product::find($request->get('product_id'));
        $options = array();
        if ($product->options != null){
            foreach (unserialize($product->options) as $key=>$value){
                $options[$key] = $request->get($key);
            }
        }
        $cartItem = Cart::add([
            'id' => $request->get('product_id'),
            'qty' => $request->get('qty'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'weight' => 1,
            'options' => $options,
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->back()->with('success','The Product is Added To Cart');

    }

    public function cart()
    {
        return view('shoppingcart.product_cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function increase($id, $qty)
    {

        Cart::update($id, $qty + 1);

        return redirect()->back();
    }

    public function decrease($id, $qty)
    {
        if ($qty > 1) {
            Cart::update($id, $qty - 1);
        }
        return redirect()->back();
    }



    public function send()
    {
        return view('shoppingcart.send_proof');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'order_id'=>'required',
           'name'=>'required',
           'phone'=>'required',
            'img'=>'required|image',
        ]);

        $img = $request->file('img');
        $img_new_name = uniqid()."_".$img->getClientOriginalName();
        $img->move('uploads/proof/',$img_new_name);

        Proof::create([
           'order_id'=>$request->get('order_id'),
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'message'=>$request->get('message'),
            'img'=>$img_new_name,

        ]);

        return redirect()->back()->with('success','Your Payment Proof is Successfully Send');


    }

}
