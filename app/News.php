<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Categories;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    private static $news;

    public static function getNews() {
        $content = Storage::get('news/content.json');
        return json_decode($content, true);
    }

    public static function getNewsWithCategorySlug() {
        $newsCategory = null;
        foreach (static::getNews() as $item) {
            $item['category'] = Categories::getCategoryNameById($item['category']);
            $newsCategory[] = $item;
        }

        return $newsCategory;
    }

    public static function getNewsId($id) {
        $newsArray = static::getNews();
        return $newsArray[$id];
    }

    public static function getNewsByCategory($slug) {

        $category = Categories::getCategoryBySlug($slug);

        $news = null;

        foreach(static::$news as $item) {
           
            if($item['category'] == $category['id']) {
                $news[] = $item;
            }
            
        }

        return $news;
    }

    public static function add ($newItem) {
        $array = News::getNews();

        if(!empty($array)) {
            $id = count($array);
            $id++;
        } else $id = 1;

        $newItem = ['id' => $id] + $newItem;
        $array[$id] = $newItem;
        $string = json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        Storage::put('news/content.json', $string);
    }
}
