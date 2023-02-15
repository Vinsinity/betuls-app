<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Http\Requests\Admin\Auth\RegisterRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

class LoginController extends Controller
{
    protected string $redirectTo = 'admin/dashboard';
    /**
     * @return Application|Factory|View
     */
    public function loginForm() {
        return view('admin.auth.login');
    }

    /**
     * @param LoginRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function login(LoginRequest $request) {
        $validated = $request->only('email','password');
        if (Auth::guard('admin')->attempt($validated)) {
            if (Session::has('url.intended')) {
                return Redirect::intended();
            }else{
                return redirect(route('admin.dashboard.index'))->withSuccess('You have signed-in');
            }
        }

        return redirect(route('admin.auth.login'))->withErrors(trans('auth.failed'));
    }

    public function logout() {
        auth()->guard('admin')->logout();
        return redirect(route('admin.auth.login'));
    }
}
