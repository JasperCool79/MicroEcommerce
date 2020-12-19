<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function make_order(Request $request)
    {
        $this->Validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required|min:10'
        ]);
        $order_id = mt_rand(strtotime(now()),strtotime(now()));
        $cart_items =serialize(Cart::content());

        Order::create([
            'order_id'=>$order_id,
            'user_name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'cart_items'=>$cart_items,
            'user_id'=>$request->get('user_id'),
            'total_cost'=>$request->get('total_cost'),
        ]);

        Cart::destroy();

        return redirect()->route('complete.order',['order_id'=>$order_id]);

    }

    public function complete_order($order_id)
    {
        return view('shoppingcart.complete_order',compact('order_id',$order_id));
    }

    public function track_order()
    {
        return view('shoppingcart.track');
    }

    public function track_order_show(Request $request)
    {
        $this->validate($request,['order_id'=>'required']);
        $order = Order::where('order_id','=',$request->get('order_id'))->first();



        if($order){
            return view('shoppingcart.details',compact('order',$order));
        }else{
            return redirect()->route('track.order')->with('info','Your Order Number is not Found Or Enter your number Exactly');
        }


    }


}
