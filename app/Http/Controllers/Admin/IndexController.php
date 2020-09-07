<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use App\News;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index () {
        return view('admin.index');
    }

    public function control () {
        return view('admin.control');
    }

    public function create (Request $request) {
        if($request->isMethod('post')) {
            News::add($request->except('_token'));
            return redirect()->route('News');
        }
        return view('admin.create')->with(['categories' => Categories::getCategories()]);
    }

}
