<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactInfoController extends Controller
{
    public function index(Request $request){
        
        
        $data = [];
        env('FBPAGE') ? $data['facebook_link'] = env('FBPAGE') : $data['facebook_link'] = null;
        env('MESSENGER') ? $data['messenger_link'] = env('MESSENGER') : $data['messenger_link'] =null;
        env('OWNER_EMAIL') ? $data['email'] = env('OWNER_EMAIL') : $data['email'] = null;
        env('OWNER_PHONE') ? $data['phone'] = env('OWNER_PHONE') : $data['phone'] = null;
        env('OWNER_FB_NAME') ? $data['facebook_name'] = env('OWNER_FB_NAME') : $data['facebook_name'] = null;
        env('OWNER_MESSENGER_NAME') ? $data['messenger_name'] = env('OWNER_MESSENGER_NAME') : $data['messenger_name'] = null;
        env('OWNER_MESSENGER_ID') ? $data['messenger_id'] = env('OWNER_MESSENGER_ID') : $data['messenger_id'] = null;
        env('OWNER_ADDRESS') ? $data['address'] = env('OWNER_ADDRESS') : $data['address'] = null;
        return $data;
        if(count($data)>0){
            return response()->json(['code'=>200,'data'=>$data,'messenge'=>'Success']);
        }else{
            return response()->json(['code'=>401,'data'=>null,'messenge'=>'Nothing Found Data']);
        }
        
        
    }
}
