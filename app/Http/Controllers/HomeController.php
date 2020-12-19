<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $new_products = Product::orderBy('created_at','desc')->paginate(4);
        $best_sellings = Product::where('best_selling',1)->paginate(4);
        $populars = Product::where('popular',1)->paginate(4);
        $reviews = Review::all();
        return view('welcome',compact('categories',$categories,'new_products',$new_products,'best_sellings',$best_sellings,'populars',$populars,'reviews',$reviews));
    }


}
