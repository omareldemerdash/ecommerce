<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.products.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
        $Image = $request->file('image');
        $ProductImage = time() . '_' . $Image->getClientOriginalName();
        $Image->move('img', $ProductImage);

        Product::create([
            'cate_id' => $request->cate_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'small_description' => $request->small_description,
            'description' => $request->description,
            'original_price' => $request->original_price,
            'selling_price' => $request->selling_price,
            'image' => $ProductImage,
            'qty' => $request->qty,
            'tax' => $request->tax,
            'status' => $request->status == true ? '1' : '0',
            'trending' => $request->trending == true ? '1' : '0',
            'meta_tittle' => $request->meta_tittle,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,

        ]);
        return redirect(route('products.index'))->with('status', 'product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $id)
    {
        //
        $product = product::findOrFail($id);
        if ($request->hasFile('image')) {
            $path = asset('img/') . $product->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $Image = $request->file('image');
            $ProductImage = time() . '_' . $Image->getClientOriginalName();
            $Image->move('img', $ProductImage);
            $product->image = $ProductImage;
        }
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->tax = $request->input('tax');
        $product->qty = $request->input('qty');
        $product->status = $request->input('status') == True ? "1" : "0";
        $product->trending = $request->input('trending') == True ? "1" : "0";
        $product->meta_tittle = $request->input('meta_tittle');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->update();
        return redirect(route('products.index'))->with('status', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
