<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rating;

class RatingController extends Controller
{
    //
    public function add(Request $request)
    {
        Rating::create([
            'product_rating' => $request->stars_rated,
            'prod_id' => $request->prod_id,
            'role_id' =>$request->role_id,
        ]);
        return redirect()->back();
    }
}
