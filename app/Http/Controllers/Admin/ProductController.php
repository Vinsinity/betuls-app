<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Brand\ImageRequest;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function list() {
        $title = 'product list';
        $products = Product::all();
        return view('admin.product.product.list', compact('title', 'products'));
    }

    /**
     * @return Application|Factory|View
     */
    public function add() {
        $title = 'product add';
        $categories = Category::whereNull('parent_id')->get();
        $brands = Brand::all();
        return view('admin.product.product.add', compact('title', 'categories', 'brands'));
    }

    /**
     * @param StoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function addPost(StoreRequest $request) {
        $product = $request->except('image', 'categories');
        $images = $request->get('image');
        $product = Product::create($product);

        $categories = explode(',', $request->get('categories'));

        $product->categories()->attach($categories);

        foreach ($images as $image) {
            $product_image['product_id'] = $product->id;
            $product_image['image'] = $image;
            ProductImage::create($product_image);
        }
        return redirect(route('admin.products.products.list'))->with('success', 'Success product add');
    }

    /**
     * @param ImageRequest $request
     * @return string
     */
    public function image(ImageRequest $request) {
        $file = $request->file('file');
        $filename = date('YmdHis').Str::random(12).'.'.$file->extension();
        $file->storeAs('public/image/products', $filename);
        return $filename;
    }

    public function show(Request $request) {
        $product = Product::where('slug', $request->slug)->first();
        $title = $product->name;
        $brands = Brand::all();
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.product.product.show', compact('title', 'product','brands','categories'));
    }

    public function update(UpdateRequest $request) {
        $product = Product::where('slug', $request->slug)->first();
        $validated = $request->validated();
        $product->update($validated);
        return redirect(route('admin.products.products.list'))->with('success', $product->name.' successful updated');
    }
}
