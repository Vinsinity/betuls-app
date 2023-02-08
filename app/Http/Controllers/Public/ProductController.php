<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request) {
        $product = Product::where('slug', $request->slug)->first();
        return view('public.product.show', compact('product'));
    }
}
