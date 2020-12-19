<?php

namespace App\Http\Controllers\Admin;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::paginate(5);
        return view('admin.review.index',compact('reviews',$reviews));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviews = Review::paginate(5);
        return view('admin.review.index',compact('reviews',$reviews));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
           'photo'=>'required|image',
           'review_message'=>'required'
        ]);

        $photo = $request->file('photo');
        $photo_new_name = uniqid()."_".$photo->getClientOriginalName();
        $photo->move('uploads/review',$photo_new_name);

        Review::create([
           'name'=>$request->get('name'),
           'job'=>$request->get('job'),
           'company'=>$request->get('company'),
           'review_message'=>$request->get('review_message'),
           'photo'=>$photo_new_name,
        ]);

        return redirect()->back()->with('success','A New Review is Successfully Created');




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
        $review = Review::find($id);
        return view('admin.review.edit',compact('review',$review));
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
        $this->validate($request,[
            'name'=>'required',
            'review_message'=>'required'
        ]);

        $review = Review::find($id);

        if($request->hasFile('photo')){
            $image_path ='uploads/review/' . $review->photo;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $photo = $request->file('photo');
            $photo_new_name = uniqid()."_".$photo->getClientOriginalName();
            $photo->move('uploads/review',$photo_new_name);
            $review->photo = $photo_new_name;
            $review->save();

        }


        $review->name=$request->get('name');
        $review->job=$request->get('job');
        $review->company=$request->get('company');
        $review->review_message=$request->get('review_message');
        $review->save();


        return redirect()->route('review.index')->with('success','The Review is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $image_path =  'uploads/review/' . $review->photo;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $review->delete();
        return redirect()->back()->with('info','The Review is Deleted');
    }
}
