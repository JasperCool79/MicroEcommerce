<?php

namespace App\Http\Controllers\API;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\Product as ProductCollection;

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
    public function getProductCategory(Request $request){
        if(!$request->category_id){
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Category Id is Required']);
        }
        $data = ProductResource::collection(Product::where('category_id',$request->category_id)->get());;
        $catId = Category::find($request->category_id);
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'catId'=>$catId,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
    public function getProductById(Request $request){
        if(!$request->product_id){
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Product Id is Required']);
        }
        $data = ProductResource::collection(Product::where('id',$request->product_id)->get());
        if($data){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
}
