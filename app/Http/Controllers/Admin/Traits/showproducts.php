<?php
namespace App\Http\Controllers\Admin\Traits;

use App\Models\Product;

trait showproducts{
    public function showproducts($id){
        $products= Product::findOrFail($id)->products;
        return view('admin.products.all' , compact('products'));
       }
}
?>