<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();

       $category = category::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();
        return view('frontend.search', ['products' => $products ,$category], compact('products','category'));
    }
}
