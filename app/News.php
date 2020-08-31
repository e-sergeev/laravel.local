<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Categories;

class News extends Model
{
    private static $news = [
            1 => [
                    'id' => 1,
                    'title' => 'Заголовок новости 1',
                    'text' => 'Короткие (до 1 000 знаков) приветственные тексты на главную страницу могут позволить себе далеко не все сайты. Например, почти все крупные интернет-магазины, сайты компаний, серьезные сервисы и прочие подобные ресурсы обходятся без громоздких «простыней» текста. Пара слов о компании, небольшое приветствие и все.',
                    'category' => 1,
                 ],
            2 => [
                    'id' => 2,
                    'title' => 'Заголовок новости 2',
                    'text' => 'Каждый подход, как это и водится, имеет свои плюсы и минусы. Где-то можно выиграть в оптимизации, но потерять в живых читателях. Где-то можно приобрести живых читателей, но придется жертвовать SEO-показателями и, возможно, по этой причине отставать от конкурентов.',
                    'category' => 2
            ],
            3 => [
                'id' => 3,
                'title' => 'Заголовок новости 3',
                'text' => 'Каждый подход, как это и водится, имеет свои плюсы и минусы. Где-то можно выиграть в оптимизации, но потерять в живых читателях. Где-то можно приобрести живых читателей, но придется жертвовать SEO-показателями и, возможно, по этой причине отставать от конкурентов.',
                'category' => 2
            ],
            4 => [
                'id' => 4,
                'title' => 'Заголовок новости 4',
                'text' => 'Каждый подход, как это и водится, имеет свои плюсы и минусы. Где-то можно выиграть в оптимизации, но потерять в живых читателях. Где-то можно приобрести живых читателей, но придется жертвовать SEO-показателями и, возможно, по этой причине отставать от конкурентов.',
                'category' => 2
             ]
    ];

    public static function getNews() {
        return static::$news;
    }

    public static function getNewsWithCategorySlug() {
        $newsCategory = null;
        foreach (static::$news as $item) {
            $item['category'] = Categories::getCategoryNameById($item['category']);
            $newsCategory[] = $item;
        }

        return $newsCategory;
    }

    public static function getNewsId($id) {
        return static::$news[$id];
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
}
