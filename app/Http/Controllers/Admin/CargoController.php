<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function list()
    {
        $cargos = Cargo::all();
        $title = 'cargos';
        return view('admin.cargo.list',compact('title','cargos'));
    }
}
