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

Route::get('/', 'PagesController@home');

Route::get('/messages/{message}', 'MessagesController@show');

Auth::routes();
Route::get('/auth/facebook', 'SocialAuthController@facebook');
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');
Route::post('/auth/facebook/register', 'SocialAuthController@register');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' =>'auth'], function (){
    Route::post('/messages/create', 'MessagesController@create');

    Route::get('/conversations/{conversation}', 'UserControllers@showConversation');

    Route::post('/{username}/dms', 'UserControllers@sendPrivateMessage');

    Route::post('/{username}/follow', 'UserControllers@follow');
    Route::post('/{username}/unfollow', 'UserControllers@unfollow');
});
Route::get('/{username}/follows', 'UserControllers@follows');
Route::get('/{username}/followers', 'UserControllers@followers');
Route::get('/{username}', 'UserControllers@show');
