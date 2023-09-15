<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Fery Eka Mahendra",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis sunt, debitis animi reprehenderit nam sed vel quisquam eveniet vitae sequi molestias quam mollitia iusto nobis amet dicta voluptas asperiores! Eius, placeat ipsam aliquam et dolorem minima maxime veritatis commodi consequatur ut iure cum amet numquam deserunt esse non? Nisi, suscipit tempore! Ea quos nam est ut voluptatibus, voluptas, facilis impedit eius quia, dignissimos officiis dolorum tenetur consequatur! Consequuntur porro ipsa, amet quaerat minima corrupti unde aliquam eligendi, quas, reiciendis quae!"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Fery Eka Mahendra",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat vitae distinctio inventore minus odio provident atque ex est ducimus consectetur accusamus unde alias, sapiente exercitationem aperiam in, magni sit voluptatum facilis, veniam consequatur reiciendis! Tempore repellat possimus explicabo consequatur perferendis cumque similique eveniet mollitia, modi perspiciatis dolores iure officia vero dicta aut facilis distinctio dolorum ullam ipsa accusamus consequuntur deserunt nobis assumenda in. Consequuntur nobis aspernatur beatae nemo. Aliquam praesentium porro vel omnis? Voluptatibus, totam. Aperiam nostrum tenetur, sint voluptate inventore pariatur perspiciatis animi minus ducimus. Nihil eius deleniti quisquam aliquid labore impedit asperiores, aliquam veniam quo nulla, inventore deserunt!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
