<?php

use Illuminate\Support\Facades\Route;
//use App\Models\Product;
use App\Models\Category;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    \Illuminate\Support\Facades\DB::listen(function ($query){
//        logger($query->sql, $query->bindings);
//    });

    return view('posts', [
        'posts'=> Post::with('category')->get()
    ]);
});

Route::get('posts/{post:slug}', function(Post $post){

    return view('post',[
        'post'=>$post
    ]);
});


//Route::get('/', function () {
//    return view('Products',[
//        'products'=> Product::all()
//    ]);
//});


//Route::get('/products/{product}', function($id){
//    return view('products',[
//        'product'=> Product::find($id)
//        ]);
//});

Route::get('/first', function () {
    return view('first');
});


Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts',[
        'posts'=> $category->posts
    ]);
});



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/first', [App\Http\Controllers\HomeController::class, 'index'])->name('first');
