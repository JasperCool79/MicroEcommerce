<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Message;
use App\OptionName;
use App\OptionValue;
use App\Order;
use App\Post;
use App\Product;
use App\Proof;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        $products = Product::all();
        $proofs = Proof::orderBy('created_at','desc')->paginate(7);
        $option_names = OptionName::all();
        $option_values = OptionValue::all();
        $complete_orders = Order::orderBy('created_at','desc')->where('status','=',1)->paginate(5);
        $new_orders = Order::orderBy('created_at','desc')->where('status','=',0)->paginate(5);
        $blogpost = Post::all();
        $messages = Message::all();
        $reviews = Review::all();
        return view('admin.index',compact('users',$users,
            'categories',$categories,'products',$products,
            'complete_orders',$complete_orders,'new_orders',$new_orders,
            'proofs',$proofs,
            'option_names',$option_names,'option_values',$option_values,
            'blogpost',$blogpost,'messages',$messages,'reviews',$reviews
            ));
    }

    public function documentation()
    {
        return view('admin.documentation');
    }


    public function complete($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return redirect()->back()->with('success','The Order is Successfully Make Complete ');
    }


    public function order_delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        $order->save();
        return redirect()->back()->with('success','The Order is Successfully Deleted');
    }

    public function proof_complete($id)
    {
        $proof = Proof::find($id);
        $proof->status = 1;
        $proof->save();
        return redirect()->back()->with('success','The Payment Proof is Successfully Make Complete');

    }

    public function proof_delete($id)
    {
        $proof = Proof::find($id);
        $image_path = 'uploads/proof/'.$proof->img;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $proof->delete();
        return redirect()->back()->with('info','The Payment Proof is Deleted');

    }


    public function receive_message()
    {
        $messages = Message::orderBy('created_at','desc')->paginate(10);
        return view('admin.message.index',compact('messages',$messages));
    }
    public function delete_message($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->back()->with('info','The Message is Deleted');
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
        //
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
