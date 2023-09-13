<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Fery Eka Mahendra",
        "email" => "ferrh.mahendra@gmail.com",
        "image" => "profile.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post){
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
