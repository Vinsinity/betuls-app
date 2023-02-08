<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $products = Product::paginate(15);
        return view('public.category.index', compact('products'));
    }

    public function show(Request $request) {

        $category = Category::where('slug', $request->slug)->first();
        $products = Product::whereHas('categories', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })->get();
        $sideCategory = $category->children;
        return view('public.category.show', compact('products', 'sideCategory'));
    }
}
