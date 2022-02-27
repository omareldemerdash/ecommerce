<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreCategoryRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = category::all();
        return view('admin.categories.all', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
        $Image = $request->file('image');
        $CategoryImage = time() . '_' . $Image->getClientOriginalName();
        $Image->move('img', $CategoryImage);

        category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status == true ? '1' : '0',
            'popular' => $request->popular == true ? '1' : '0',
            'image' => $CategoryImage,
            'meta_tittle' => $request->meta_tittle,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,

        ]);
        return redirect(route('categories.index'))->with('status','category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cate_products =category::findOrFail($id)->products;
        return view('categories.show', compact('cate_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        //
        $category = category::findOrFail($id);
        if ($request->hasFile('image')) {
            $path = asset('img/') . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $Image = $request->file('image');
            $CategoryImage = time() . '_' . $Image->getClientOriginalName();
            $Image->move('img', $CategoryImage);
            $category->image = $CategoryImage;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')== True ? "1":"0";
        $category->popular = $request->input('popular')== True ? "1":"0";
        $category->meta_tittle = $request->input('meta_tittle');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->update();
        return redirect(route('categories.index'))->with('status','category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
}
