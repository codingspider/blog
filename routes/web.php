<?php
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/single/post/{id}', 'PostController@single_post');
Route::get('/post/by/categories/{id}', 'PostController@by_category_post');
Route::get('/post/by/tag/{id}', 'PostController@by_tag_post');
Route::get('/insert/ads', 'PostController@ads_form');
Route::post('/ads/place/submit', 'PostController@ads_submit');
Route::post('/ads/place/edit', 'PostController@ads_edit');
Route::post('/search/post', 'PostController@search');
Route::post('subscribe/to/our/newsletter', 'PostController@store');
