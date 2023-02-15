<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
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
//        $cat = Category::paginate(2);
//        dd($cat->render()->toHtml());
        $title = 'category';
        return view('admin.product.category.list');
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
        return redirect(route('admin.product.categories.add'))->with('success','success');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function image(Request $request) {
        dd($request);
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.product.category.show', compact('category'));
//        dd($category);
    }

    public function update(UpdateRequest $request)
    {
//        dd($request->all());
        $category = Category::where('slug', $request->slug)->first();
        $category->update($request->all());
        return redirect(route('admin.product.categories.list', ['slug' => $request->slug]))->with('success', $category->name.' update is successfully');
    }
}
