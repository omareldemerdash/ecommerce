<?php
// namespace App\Http\Controllers\Frontend\Traits;

// use App\Models\Product;
// use App\Models\category;


// trait showProducts{
//     public function showProducts($slug){
//         if(category::where('slug' , $slug)->exists()){
//             $category =category::where('slug' ,$slug)->first();
//             $products =Product::where('cate_id' , $category->id)->where('status','0')->get();
//             return view('', compact('category' , 'products'));
//         }else{
//             redirect('frontend.showProducts')->with('alert',"slug doesn't exist");
//         }
//         // $products= category::findOrFail($id)->products;
//      } 
// }
?>