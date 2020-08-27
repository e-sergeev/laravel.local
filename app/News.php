<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    private static $news = [
            [
                'id' => 1,
                'title' => 'Заголовок новости 1',
                'text' => 'Короткие (до 1 000 знаков) приветственные тексты на главную страницу могут позволить себе далеко не все сайты. Например, почти все крупные интернет-магазины, сайты компаний, серьезные сервисы и прочие подобные ресурсы обходятся без громоздких «простыней» текста. Пара слов о компании, небольшое приветствие и все.',
                'category' => 'спорт',
            ],
            [
                'id' => 2,
                'title' => 'Заголовок новости 2',
                'text' => 'Каждый подход, как это и водится, имеет свои плюсы и минусы. Где-то можно выиграть в оптимизации, но потерять в живых читателях. Где-то можно приобрести живых читателей, но придется жертвовать SEO-показателями и, возможно, по этой причине отставать от конкурентов.',
                'category' => 'бизнес'
            ]
    ];

    private static $notFound = [
            'id' => null,
            'title' => 'Новость не найдена',
            'text' => 'Запрашиваемый элемент не существует'
        ];


    public static function getNews() {
        return static::$news;
    }

    public static function getNewsId($id) {
        foreach (static::getNews() as $news) {
            if($news['id'] == $id) {
                return $news;
            }
        }
        return static::$notFound;
    }

    public static function getNewsCat($cat) {
        $newsByCategory = [];
        foreach (static::getNews() as $news) {
            if($news['category'] == $cat) {
                $newsByCategory[] = $news;
            }
        }
        return $newsByCategory;
    }
}
