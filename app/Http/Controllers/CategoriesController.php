<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\News;

class CategoriesController extends Controller
{
    public static function index () {
        return view('news.categories')->with('categories', Categories::getCategories());
    }

    public static function show ($slug) {
        return view('news.category')->with([
            'news' => News::getNewsByCategory($slug), 
            'category' => Categories::getCategoryBySlug($slug),
            'slug' => $slug
            ]);
    }
}
