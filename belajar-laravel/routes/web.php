<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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


Route::get('/blog',[PostController::class, 'index']);
Route::get('/blog/{category}', [PostController::class, 'getRandomImage'])->name('blog.random');


// halaman single post
Route::get('posts/{post:slug}',[PostController::class, 'show']);

route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post By Author :  $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);

});
