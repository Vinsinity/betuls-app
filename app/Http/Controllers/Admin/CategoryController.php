<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function list() {
        $title = 'category';
        $categories = Category::all();
        return view('admin.product.category.list', compact('title','categories'));
    }

    /**
     * @return Application|Factory|View
     */
    public function add() {
        $title = 'add category';
        return view('admin.product.category.add', compact('title'));
    }

    /**
     * @param StoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function addPost(StoreRequest $request) {
        $validated = $request->validated();
        Category::create($validated);
        return redirect(route('admin.products.categories.add'))->with('success','success');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function image(Request $request) {
        dd($request);
    }
}
