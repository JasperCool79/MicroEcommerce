<?php

namespace App\Http\Controllers;

use App\Category;
use App\Message;
use App\Product;
use App\Review;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function welcome()
    {
        $categories = Category::all();
        $new_products = Product::orderBy('created_at','desc')->paginate(4);
        $best_sellings = Product::where('best_selling',1)->paginate(4);
        $populars = Product::where('popular',1)->paginate(4);
        $reviews = Review::all();
        return view('welcome',compact('categories',$categories,'new_products',$new_products,'best_sellings',$best_sellings,'populars',$populars,'reviews',$reviews));
    }


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $products = Product::where('name','like','%'.$request->get('search').'%')->paginate(4);
        return view('search_product',compact('products',$products,'search',$search));
    }

    public function search_code()
    {
        return view('search_product_code');

    }

    public function search_code_result(Request $request)
    {
        $this->validate($request,[
            'product_id'=>'required'
        ]);

        $productcode = $request->get('product_id');
        $product = Product::where('product_id','=',$productcode)->first();
        return view('search_product_code_result',compact('product',$product,'productcode',$productcode));
    }



    public function send(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        Message::create([

            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'message'=>$request->get('message')
        ]);

        return redirect()->back()->with('success','Your Message is Send Successfully ');

    }


    public function return_policy()
    {
        return view('return_policy');
    }

    public function faq()
    {
        return view('faq');
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
