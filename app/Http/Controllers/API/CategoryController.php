<?php

namespace App\Http\Controllers\API;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index(){
        
        $data = CategoryResource::collection(Category::all());
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
    }
}
