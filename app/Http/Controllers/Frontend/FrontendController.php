<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;
use Munna\ShoppingCart\Cart;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    // use showProducts;
    //
    public function index()
    {
        // 
        $categories = category::all();
        $trending_products = Product::where('trending', '1')->take(16)->get();
        $allproducts = Product::where('status', '0')->get();
        return view('frontend.index', compact('categories', 'trending_products', 'allproducts'));
    }


    public function viewcategory($slug)
    {
        if (category::where('slug', $slug)->exists()) {
            $category = category::where('slug', $slug)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('frontend.viewcategory', compact('category', 'products'));
        } else {
            redirect('/')->with('alert', "slug doesn't exist");
        }
    }
    public function viewproduct($cate_slug, $prod_slug)
    {
        if (category::where('slug', $cate_slug)->exists()) {
            if (Product::where('slug', $prod_slug)->exists()) {
                $products = product::where('slug', $prod_slug)->first();
                return view('frontend.viewproduct', compact('products'));
            } else {
                redirect('/')->with('alert', "the link was broken");
            }
        } else {
            redirect('/')->with('alert', "no such category found");
        }
    }
    public function addtocart($id)
    {
        $product = Product::findOrFail($id);
        $product_id  = $product->id; // Required
        $product_name = $product->name; // Required
        $product_qty = $product->qty; // Required
        $product_price = $product->selling_price; // Required


        $cart = new Cart();
        $cart->add($product_id, $product_name, $product_qty, $product_price);
        
        return view('frontend.viewproduct');
    }
}
