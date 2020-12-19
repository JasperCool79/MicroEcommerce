<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('profile.index',compact('user',$user));
    }

    public function update(Request $request)
    {
        $user = User::find($request->get('user_id'));
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required'
        ]);

        if($request->hasFile('avatar'))
        {
            if($user->avatar){
                $image_path = 'uploads/profile/' .$user->avatar;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $avatar = $request->file('avatar');
            $avatar_new_name = uniqid()."_".$avatar->getClientOriginalName();
            $avatar->move('uploads/profile',$avatar_new_name);
            $user->avatar = $avatar_new_name;
            $user->save();
        }
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();
         return redirect()->back()->with('success','User Profile is Updated');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|string|confirmed|min:6'
        ]);

        $user = Auth::user();

        if (Hash::check($request->password, $user->password) == false)
        {
            return redirect()->back()->with('info','Your Old Password is Incorrect');
        }
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success','Your Password is Updated Success');

    }

    public function my_orders()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        if ($orders) {
            return view('shoppingcart.myorders', compact('orders', $orders));
        } else {
            return view('shoppingcart.myorders');
        }
    }

    public function my_order_details($id)
    {
        $order = Order::where('order_id',$id)->firstOrFail();
        return view('shoppingcart.details',compact('order',$order));

    }



}
