<?php

Route::get('/', [\App\Http\Controllers\Client\Home\IndexController::class, 'video']);
Route::get('v/{alias}', [\App\Http\Controllers\Client\Video\VideoController::class, 'video']);
Route::get('tags', [\App\Http\Controllers\Client\Tag\TagController::class, 'index']);
Route::get('tag/{tagName}', [\App\Http\Controllers\Client\Tag\TagController::class, 'tag']);
Route::get('suggest-video', [\App\Http\Controllers\Client\Forms\SuggestVideo::class, 'index']);
Route::post('suggest-video', [\App\Http\Controllers\Client\Forms\SuggestVideo::class, 'post']);
Route::post('search', [\App\Http\Controllers\Client\Search\SearchController::class, 'post']);
