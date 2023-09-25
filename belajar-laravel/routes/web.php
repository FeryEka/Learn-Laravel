<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'active' => 'about',
        'name' => 'Fery Eka Mahendra',
        'email' => 'ferrh.mahendra@gmail.com',
        'image' => 'profile.jpg'
    ]);
});


Route::get('/blog',[PostController::class, 'index']);


// halaman single post
Route::get('posts/{post:slug}',[PostController::class, 'show']);

route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

route::get('/login', [LoginController::class, 'index']);
route::get('/register', [RegisterController::class, 'index']);
route::post('/register', [RegisterController::class, 'store']);

// route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post By Author :  $author->name",
//         'active' => 'blog',
//         'posts' => $author->posts->load('category', 'author')
//     ]);

// });
