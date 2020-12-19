<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\OptionName;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use kotchuprik\short_id\ShortId;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.product.index', compact('categories', $categories, 'products', $products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $option_names = OptionName::all();
        $categories = Category::all();
        if (count($categories) == 0) {
            return redirect()->back()->with('info', 'You Should Create Category Before Creating Products');
        } else {
            return view('admin.product.create', compact('categories', $categories, 'option_names', $option_names));
        }

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
            'category_id' => 'required',
            'name' => 'required',
            'title' => 'required',
            'price' => 'required',
            'product_img' => 'required',
        ]);
        $option_names = OptionName::all();
        $options = array();
        if ($request->get('option_names')) {
            foreach ($request->get('option_names') as $option_name) {
                $myoptname = $request->get('option_value_' . $option_name);
                $options[$option_name] = $myoptname;
            }
        }


        $product_img = $request->file('product_img');
        $product_img_name = array();
        foreach ($product_img as $img) {
            $product_img_new_name = uniqid() . '_' . $img->getClientOriginalName();
            array_push($product_img_name, $product_img_new_name);
            $img->move( 'uploads/product/', $product_img_new_name);
        }

        $shortId = new ShortId();
        Product::create([
            'category_id' => $request->get('category_id'),
            'product_id' => $shortId->encode(mt_rand(100000, 999999)),
            'name' => $request->get('name'),
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'order_type' => $request->get('order_type'),
            'product_type' => $request->get('product_type'),
            'description' => $request->get('description'),
            'product_img' => serialize($product_img_name),
            'options' => serialize($options),

        ]);

        return redirect()->back()->with('success', 'New Product is Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::paginate(5);
        return view('admin.product.all', compact('products', $products));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option_names = OptionName::all();
        $product = Product::find($id);
        $categories = Category::all();
        if (count($option_names) > 0) {
            return view('admin.product.edit', compact('product', $product, 'categories', $categories, 'option_names', $option_names));
        } else {
            return view('admin.product.edit', compact('product', $product, 'categories', $categories));
        }
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
            'category_id' => 'required',
            'name' => 'required',
            'title' => 'required',
            'price' => 'required',
        ]);

        $option_names = OptionName::all();
        $options = array();
        if ($request->get('option_names')) {
            foreach ($request->get('option_names') as $option_name) {
                $myoptname = $request->get('option_value_' . $option_name);
                $options[$option_name] = $myoptname;
            }
        }

        $product = Product::find($id);
        $product_img_name = array();

        if ($request->hasFile('product_img')) {
            $imgs = unserialize($product->product_img);
            foreach ($imgs as $imgp) {
                $image_path =  'uploads/product/' . $imgp;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $product_img = $request->file('product_img');
            foreach ($product_img as $img) {
                $product_img_new_name = uniqid() . '_' . $img->getClientOriginalName();
                array_push($product_img_name, $product_img_new_name);
                $img->move('uploads/product/', $product_img_new_name);
            }
            $product->product_img = serialize($product_img_name);
            $product->save();
        }

        $product->category_id = $request->get('category_id');
        $product->name = $request->get('name');
        $product->title = $request->get('title');
        $product->price = $request->get('price');
        $product->order_type = $request->get('order_type');
        $product->product_type = $request->get('product_type');
        $product->description = $request->get('description');
        $product->options = serialize($options);
        $product->save();

        return redirect()->back()->with('success', 'The Product is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $imgs = unserialize($product->product_img);
        foreach ($imgs as $imgp) {
            $image_path =  'uploads/product/' . $imgp;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $product->delete();
        return redirect()->back()->with('success', 'Delete Product Success');

    }


    public function best_selling_add($id)
    {
        $product = Product::find($id);
        $product->best_selling = 1;
        $product->save();
        return redirect()->back()->with('success', 'The Product is Add To Best Selling Product List');

    }

    public function best_selling_remove($id)
    {
        $product = Product::find($id);
        $product->best_selling = 0;
        $product->save();
        return redirect()->back()->with('success', 'The Product is Remove From Best Selling Product List');
    }

    public function popular_add($id)
    {
        $product = Product::find($id);
        $product->popular = 1;
        $product->save();
        return redirect()->back()->with('success', 'The Product is Add To Popular Product List');

    }

    public function popular_remove($id)
    {
        $product = Product::find($id);
        $product->popular = 0;
        $product->save();
        return redirect()->back()->with('success', 'The Product is Remove From Popular Product List');
    }


}
