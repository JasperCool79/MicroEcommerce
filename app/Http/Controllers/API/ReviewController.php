<?php

namespace App\Http\Controllers\API;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;

class ReviewController extends Controller
{
    public function index(){
        $data = ReviewResource::collection(Review::all());
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
}
