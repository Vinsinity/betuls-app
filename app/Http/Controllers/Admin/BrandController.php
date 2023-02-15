<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Brand\ImageRequest;
use App\Http\Requests\Admin\Brand\StoreRequest;
use App\Models\Brand;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function list() {
        $brands = Brand::all();
        $title = 'brand';
        return view('admin.product.brand.list', compact('brands', 'title'));
    }

    /**
     * @return Application|Factory|View
     */
    public function add() {
        $title = 'brand add';
        return view('admin.product.brand.add', compact('title'));
    }

    /**
     * @param StoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function addPost(StoreRequest $request) {
        $validated = $request->validated();
//        dd($validated);
        Brand::create($validated);
        return redirect(route('admin.product.brands.add'))->with('success','success');
    }

    /**
     * @param ImageRequest $request
     * @return mixed
     */
    public function image(ImageRequest $request) {
        $file = $request->file('file');
        $filename = date('YmdHis').Str::random(12).'.'.$file->extension();
        $file->storeAs('public/image/brands', $filename);
        return $filename;
    }
}
