<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class Categories extends Model
{
    public static $categories = [
        1 => [
            'id' => 1,
            'name' => 'спорт',
            'slug' => 'sport'
        ],
        2 => [
            'id' => 2,
            'name' => 'политика',
            'slug' => 'politics'
        ],
    ];

    public static function getCategories () {
        return static::$categories;
    }

    public static function getCategoryNameById($id) {

        $newsItem = News::getNewsId($id);
        $id = $newsItem['category'];
        return static::$categories[$id]['name'];
    }

    public static function getCategorySlugById($id) {
        $newsItem = News::getNewsId($id);
        $id = $newsItem['category'];
        return static::$categories[$id]['slug'];
    }

    public static function getCategoryBySlug ($slug) {

        $category = null;

        foreach(static::$categories as $item) {
           
            if($item['slug'] == $slug) {
                $category = $item;
            }
            
        }

        return $category;
    }
}