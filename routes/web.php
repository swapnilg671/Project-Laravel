<?php

use Illuminate\Support\Facades\Route;

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
	return view('welcome');
});
//routing and Routing name
//PIZZA home index
// Route::get('/pizza', function () {
// 	return view('pizza');
// })->name('pizzahome . index');

// another method

Route::view('/pizza', 'pizza');

//BLOG home index
Route::get('/blog', function () {
	return view('blog_home.index');
});

//Contact Index
Route::get('/contact', function () {
	return view('blog_home.contact');
})->name('contact . index');

//....................................................................//
//naive way of params
/*
Route::get('/blog/1', function () {
return 'Blog1 ';
});
Route::get('/blog/2', function () {
return 'Blog2';
});
 */

//Route params
//blog
Route::get('/blog/{id}', function ($id) {
	return 'blog ' . $id;
})->name('blog.show');

//recent blog
Route::get('/recent-post/{days_ago?}', function ($daysAgo = 10) {
	return 'post from' . $daysAgo . 'daysAgo';
})->name('post.recent');

//...............................................................................//

//using regular expression
//posts

$posts = [
    1 => [
      'title' => 'Intro to Laravel',
      'content' => 'This is a short intro to Laravel',
      'is_new' => true,
      'has_comments' => true
    ],
    2 => [
      'title' => 'Intro to PHP',
      'content' => 'This is a short intro to PHP',
      'is_new' => false
    ],
    3 => [
      'title' => 'Intro to Golang',
      'content' => 'This is a short intro to Golang',
      'is_new' => false
    ]
  ];

Route::get('/posts', function () use ($posts) {
    //   // dd(request()->all());
    //   dd((int)request()->query('page', 1));
    // compact($posts) === ['posts' => $posts])
      return view('posts.index', ['posts' => $posts]);
    });

Route::get('/posts/{id}', function ($id) use ($posts) {
	//return 'posts ' . $id;
	abort_if(!isset($posts[$id]), 404);
	return view('posts.show', ['post' => $posts[$id]]);
})->where([
	'id' => '[0-9]+',
])->name('posts.show');


// Route::view('/show', 'posts.show');
