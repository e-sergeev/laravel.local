<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index () {
        return view('news.news')->with('news', News::getNews());
    }

    public function show ($cat, $id) {
        return view('news.newsOne')->with('news', News::getNewsId($id));
    }

    public function showCategories() {
        return view('news.categories')->with('news', News::getNews());
    }

    public function showCategory($cat) {
        return view('news.category')->with(['news' => News::getNewsCat($cat), 'category' => $cat]);
    }
}
