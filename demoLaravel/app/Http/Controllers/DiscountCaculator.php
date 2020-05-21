<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountCaculator extends Controller
{
    public function showProducts(){
        return view('discountCaculator');
    }

    public function nextProduct(Request $request){
        $product = $request->product;
        $price = $request->price;
        $discount = $request->discount;
        $amount = ($price / 100) * $discount;
        $discountPrice = $price - $amount;
        return view('showDiscount',compact('product','price','discount','amount','discountPrice'));
    }
}
