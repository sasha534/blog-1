<?php

use Illuminate\Http\Request;
use App\Subscriber;

    Route::get('/','SubscriberController@index');

    Route::post('/','SubscriberController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::delete('/{id}','HomeController@destroy');

Route::get('/{id}', 'HomeController@show');

Route::post('/{id}', 'HomeController@update')->name('users.update');
