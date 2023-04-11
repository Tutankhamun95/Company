<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User Routes
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/create', 'UserController@create')->middleware(['auth', 'verified'])->name('user.create');
Route::post('/user/store', 'UserController@store')->middleware(['auth', 'verified'])->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->middleware(['auth', 'verified'])->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->middleware(['auth', 'verified'])->name('user.update');

//Companies Routes
Route::get('/companies', 'CompaniesController@index')->name('companies');
Route::get('/posts/mycompanies', 'CompaniesController@userCompanies')->name('company.userCompanies');
Route::get('/company/create', 'CompaniesController@create')->middleware(['auth', 'verified'])->name('company.create');
Route::get('/company/edit/{id}', 'CompaniesController@edit')->middleware(['auth', 'verified'])->name('company.edit');
Route::post('/company/update/{id}', 'CompaniesController@update')->middleware(['auth', 'verified'])->name('company.update');
Route::post('/company/store', 'CompaniesController@store')->middleware(['auth', 'verified'])->name('company.store');


//Posts Routes
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/myposts', 'PostsController@userPosts')->name('post.userPosts');
Route::get('/post/create', 'PostsController@create')->middleware(['auth', 'verified'])->name('post.create');
Route::get('/post/edit/{id}', 'PostsController@edit')->middleware(['auth', 'verified'])->name('post.edit');
Route::post('/post/update/{id}', 'PostsController@update')->middleware(['auth', 'verified'])->name('post.update');
Route::post('/post/store', 'PostsController@store')->middleware(['auth', 'verified'])->name('post.store');

//Category Routes
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/category/create', 'CategoriesController@create')->middleware(['auth', 'verified'])->name('category.create');
Route::post('/category/store', 'CategoriesController@store')->middleware(['auth', 'verified'])->name('category.store');

//Tag Routes
Route::get('/tags', 'TagController@index')->name('tags');
Route::get('/tag/create', 'TagController@create')->middleware(['auth', 'verified'])->name('tag.create');
Route::post('/tag/store', 'TagController@store')->middleware(['auth', 'verified'])->name('tag.store');