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

Route::group([], function(){
    Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::match(['get', 'post'], '/order/{alias}', ['uses'=>'OrderController@execute', 'as'=>'order']);
    Route::match(['get', 'post'], '/contact', ['uses'=>'ContactController@execute', 'as'=>'contact']);
    Route::auth();
});
//sandy.com/admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    //sandy.com/admin
    Route::get('/', function(){
        if(view()->exists('admin.index')){
            $data = [
                'title' => 'Панель Администратора',
            ];
            return view('admin.index', $data);
        }
    });

    //sandy.com/admin/pages
    Route::group(['prefix'=>'pages'], function(){
        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
        //sandy.com/admin/pages/add
        Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'PagesAdd']);
        //sandy.com/admin/pages/edit/2
        Route::match(['get', 'post', 'delete'], '/edit{page}', ['uses'=>'PagesEditController@execute', 'as'=>'PagesEdit']);
    });

});