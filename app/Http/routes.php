<?php



Route::get('/', 'Controller@LatestNews');



Route::get('login', function (){
    return view('auth.login');
}, array('as'=>'login'));


Route::get('auth/',array( 'uses' => 'Controller@Auth'));

Route::post('admin/save',array('as' => 'save', 'uses' => 'HomeController@upload') );
Route::get('register', function (){
    return view('home');
}, array('as'=>'reg'));






Route::get('admin/',array('as' => 'admin', 'uses' => 'Controller@allNews') );
Route::post('admin/save',array('as' => 'save', 'uses' => 'Controller@upload') );



