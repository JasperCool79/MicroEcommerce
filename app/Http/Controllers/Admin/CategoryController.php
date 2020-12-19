<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories', $categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories', $categories));
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
            'name' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'banner_img' => 'required|image:jpeg,png,jpg|max:2048',
            'sub_banner_img' => 'required|image:jpeg,png,jpg|max:2048',
        ]);

        $banner_img = $request->file('banner_img');
        $sub_banner_img = $request->file('sub_banner_img');
        $banner_img_new_name = time() . '_' . $banner_img->getClientOriginalName();
        $sub_banner_img_new_name = time() . '_' . $sub_banner_img->getClientOriginalName();
        $banner_img->move('uploads/category/banner_img', $banner_img_new_name);
        $sub_banner_img->move('uploads/category/sub_banner_img', $sub_banner_img_new_name);

        Category::create([
            'name' => $request->get('name'),
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'banner_img' => $banner_img_new_name,
            'sub_banner_img' => $sub_banner_img_new_name,
        ]);

        return redirect()->back()->with('success', 'A New Category is Created');
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
        $category = Category::find($id);
        return view('admin.category.edit', compact('category', $category));
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
            'name' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $category = Category::find($id);

        if ($request->hasFile('banner_img')) {
            $image_path = 'uploads/category/banner_img/' . $category->banner_img;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $banner_img = $request->file('banner_img');
            $banner_img_new_name = time() . '_' . $banner_img->getClientOriginalName();
            $banner_img->move('uploads/category/banner_img', $banner_img_new_name);
            $category->banner_img = $banner_img_new_name;
            $category->save();
        }

        if ($request->hasFile('sub_banner_img')) {
            $image_path =  'uploads/category/sub_banner_img/' . $category->sub_banner_img;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $sub_banner_img = $request->file('sub_banner_img');
            $sub_banner_img_new_name = time() . '_' . $sub_banner_img->getClientOriginalName();
            $sub_banner_img->move('uploads/category/sub_banner_img', $sub_banner_img_new_name);
            $category->sub_banner_img = $sub_banner_img_new_name;
            $category->save();
        }

        $category->name = $request->get('name');
        $category->title = $request->get('title');
        $category->subtitle = $request->get('subtitle');
        $category->save();

        return redirect()->route('category.index')->with('success', 'The Category is Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $image_path1 = 'uploads/category/banner_img/' . $category->banner_img;
        if (File::exists($image_path1)) {
            File::delete($image_path1);
        }
        $image_path =  'uploads/category/sub_banner_img/' . $category->sub_banner_img;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        foreach($category->products as $product_id){
            $product = Product::find($product_id->id);
            $imgs = unserialize($product->product_img);
            foreach ($imgs as $imgp) {
                $image_path = 'uploads/product/' . $imgp;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $product->delete();
        }

        $category->delete();

        return redirect()->back()->with('success', 'The Category is Deleted');

    }
}
