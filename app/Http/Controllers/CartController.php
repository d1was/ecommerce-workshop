<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'product_variation_id' => 'required'
        ]);

        $cart = App\Models\Cart::firstOrCreate([
            'session_id' => session()->getId()
        ]);

        $cart->photoVariations()->sync($request->photo_variation_id);
    }
}
