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

    Route::get('/','HomepageController@index');
    Route::get('/listing','ListingpageController@index');
    Route::get('/category/{id}','ListingpageController@listing');
    Route::get('/author/{id}','ListingpageController@listing');
    Route::get('/details','DetailspageController@index');
    Route::group(['prefix'=>'back','middleware'=>'auth'],function(){
       Route::get('/', 'Admin\DashboardController@index');
	//Admin Permission Router

	Route::get('/permission',['uses'=>'Admin\PermissionController@index','as'=>'permission-list','middleware'=>'permission:Permission List|All']);
	Route::get('/permission/create','Admin\PermissionController@create');
	Route::post('/permission/store','Admin\PermissionController@store');
	Route::get('/permission/edit/{id}',['uses'=>'Admin\PermissionController@edit','as'=>'permission-edit']);
	Route::put('/permission/edit/{id}',['uses'=>'Admin\PermissionController@update','as'=>'permission-update']);
	Route::delete('/permission/delete/{id}',['uses'=>'Admin\PermissionController@destroy','as'=>'permission-delete']);
	//End Permission Router

	//Admin Role Router
	Route::get('/role','Admin\RoleController@index');
	Route::get('/role/create','Admin\RoleController@create');
	Route::post('/role/store','Admin\RoleController@store');
	Route::get('/role/edit/{id}',['uses'=>'Admin\RoleController@edit','as'=>'role-edit']);
	Route::put('/role/edit/{id}',['uses'=>'Admin\RoleController@update','as'=>'role-update']);
	Route::delete('/role/delete/{id}',['uses'=>'Admin\RoleController@destroy','as'=>'role-delete']);
    //End Roll Router

    //Admin Author Router 

	Route::get('/author','Admin\AuthorController@index');
	Route::get('/author/create','Admin\AuthorController@create');
	Route::post('/author/store','Admin\AuthorController@store');
	Route::get('/author/edit/{id}',['uses'=>'Admin\AuthorController@edit','as'=>'author-edit']);
	Route::put('/author/edit/{id}',['uses'=>'Admin\AuthorController@update','as'=>'author-update']);
	Route::delete('/author/delete/{id}',['uses'=>'Admin\AuthorController@destroy','as'=>'author-delete']);
	//End Author Router

	//Admin Category Router

	Route::get('/categories',['uses'=>'Admin\CategoryController@index','as'=>'category-list','middleware'=>'permission:Category List|All']);
	Route::get('/categories/create',['uses'=>'Admin\CategoryController@create','as'=>'category-create','middleware'=>'permission:Category Create|All']);
	Route::post('/categories/store',['uses'=>'Admin\CategoryController@store','as'=>'category-store','middleware'=>'permission:Category Store|All']);
	Route::put('/categories/status/{id}',['uses'=>'Admin\CategoryController@status','as'=>'category-status','middleware'=>'permission:Category Store|All']);
	Route::get('/categories/edit/{id}',['uses'=>'Admin\CategoryController@edit','as'=>'category-edit','middleware'=>'permission:Category edit|All']);
	Route::put('/categories/update/{id}',['uses'=>'Admin\CategoryController@update','as'=>'category-update','middleware'=>'permission:Category update|All']);
	Route::delete('/categories/delete/{id}',['uses'=>'Admin\CategoryController@destroy','as'=>'category-delete','middleware'=>'permission:Category delete|All']);

	//End Category Router

	//Admin Post Router

	Route::get('/posts',['uses'=>'Admin\PostController@index','as'=>'post-list','middleware'=>'permission:Post List|All']);
	Route::get('/posts/create',['uses'=>'Admin\PostController@create','as'=>'post-create','middleware'=>'permission:Post List|All']);
	Route::post('/posts/store',['uses'=>'Admin\PostController@store','as'=>'post-store','middleware'=>'permission:Post List|All']);
	Route::put('/posts/status/{id}',['uses'=>'Admin\PostController@status','as'=>'post-status','middleware'=>'permission:Post List|All']);
	Route::put('/posts/hot/news/{id}',['uses'=>'Admin\PostController@hot_news','as'=>'post-hot news','middleware'=>'permission:Post List|All']);
	Route::get('/posts/edit/{id}',['uses'=>'Admin\PostController@edit','as'=>'post-edit','middleware'=>'permission:Post List|All']);
	Route::put('/posts/update/{id}',['uses'=>'Admin\PostController@update','as'=>'post-update','middleware'=>'permission:Post Update|All']);
	Route::delete('/posts/delete/{id}',['uses'=>'Admin\PostController@destroy','as'=>'post-delete','middleware'=>'permission:Post Delete|All']);

	//End Post Router

	//Admin Comment Router

	Route::get('/comment/{id}',['uses'=>'Admin\CommentController@index','as'=>'comment-list','middleware'=>'permission:Post List|All']);
	Route::get('/comment/reply/{id}',['uses'=>'Admin\CommentController@reply','as'=>'comment-view','middleware'=>'permission:Post List|All']);
	Route::post('/comment/reply',['uses'=>'Admin\CommentController@store','as'=>'comment-reply','middleware'=>'permission:Post List|All']);
	Route::put('/comment/status/{id}',['uses'=>'Admin\CommentController@status','as'=>'comment-status','middleware'=>'permission:Post List|All']);
	//End Comment Router

	//Admin Setting Router
	Route::get('/settings',['uses'=>'Admin\SettingController@index','as'=>'setting','middleware'=>'permission:Post List|All']);
	Route::put('/settings/update',['uses'=>'Admin\SettingController@update','as'=>'setting','middleware'=>'permission:Post List|All']);

	

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
