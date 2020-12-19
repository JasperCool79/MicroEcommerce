<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.blog.index', compact('posts', $posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::paginate(5);
        return view('admin.blog.index', compact('posts', $posts));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'banner_img' => 'required|image:jpeg,png,jpg|max:2048',
        ]);

        $banner_img = $request->file('banner_img');
        $banner_img_new_name = time() . '_' . $banner_img->getClientOriginalName();
        $banner_img->move('uploads/post/', $banner_img_new_name);

        Post::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'img' => $banner_img_new_name,
        ]);

        return redirect()->back()->with('success', 'A Blog Post is Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.blog.edit', compact('post', $post));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);

        if ($request->hasFile('banner_img')) {
            $image_path = 'uploads/post/' . $post->img;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $banner_img = $request->file('banner_img');
            $banner_img_new_name = time() . '_' . $banner_img->getClientOriginalName();
            $banner_img->move('uploads/post/', $banner_img_new_name);
            $post->img = $banner_img_new_name;
        }

        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->save();


        return redirect()->back()->with('success', 'The Blog Post is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $image_path1 = 'uploads/post/' . $post->img;
        if (File::exists($image_path1)) {
            File::delete($image_path1);
        }

        $post->delete();

        return redirect()->back()->with('success', 'The Post is Deleted');

    }
}
