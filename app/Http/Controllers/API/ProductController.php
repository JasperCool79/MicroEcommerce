<?php

namespace App\Http\Controllers\API;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index(){
        $data = ProductResource::collection(Product::all());
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
    public function latest(){
        $data = ProductResource::collection(Product::orderBy('created_at','desc')->get());
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
    public function best_selling(){
        $data = ProductResource::collection(Product::where('best_selling',1)->get());
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
    public function popular(){
        $data = ProductResource::collection(Product::where('popular',1)->get());
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
}
