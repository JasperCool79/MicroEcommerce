<?php

namespace App\Http\Controllers\API;

use App\Order;
use App\Proof;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function make_order(Request $request)
    {
        $order_id = mt_rand(strtotime(now()),strtotime(now()));

        Order::create([
            'order_id'=>$order_id,
            'user_name'=>$request->get('user_name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'cart_items'=>'',
            'total_cost'=>$request->get('total_cost'),
        ]);

        if($order_id){
            return response()->json(['code'=>200,'data'=>$order_id,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }

    }

    public function send_proof(Request $request){
        $v = Validator::make($request->all(),[
            'order_id'=>'required',
            'name'=>'required',
            'phone'=>'required',
             'img'=>'required',
         ]);
         if($v->fails()){
             return $v->errors();
         }
 
         $img = $request->file('img');
         $img_new_name = uniqid()."_".$img->getClientOriginalName();
         $img->move('uploads/proof/',$img_new_name);
 
         $res = Proof::create([
            'order_id'=>$request->get('order_id'),
             'name'=>$request->get('name'),
             'phone'=>$request->get('phone'),
             'address'=>$request->get('address'),
             'message'=>$request->get('message'),
             'img'=>$img_new_name,
 
         ]);
 
         if($res){
            return response()->json(['code'=>200,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'messenge'=>'Nothing Found Data']);
        }
    }
}
