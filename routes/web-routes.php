<?php

Route::view('/', 'home')->name('home');

Route::get('/bitcoin/random',        ['uses' => 'BitcoinPagesController@randomPage',  'as' => 'btcPages.random']);
Route::get('/bitcoin/invalid',       ['uses' => 'BitcoinPagesController@invalidPage', 'as' => 'btcPages.invalid']);
Route::get('/bitcoin/{pageNumber?}', ['uses' => 'BitcoinPagesController@index',       'as' => 'btcPages']);
