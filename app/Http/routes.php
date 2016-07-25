<?php

use Illuminate\Http\Request;
use App\Http\Requests;

Route::get('/', [
	'uses' => 'TodoController@todo',
	'as' => 'todo'
]);

Route::post('/', [
	'uses' => 'TodoController@postTodo',
	'as' => 'postTodo'
]);

Route::post('/delete', [
	'uses' => 'TodoController@postDelete',
	'as' => 'postDelete'
]);

Route::get('/pastelink', [
	'uses' => 'LinkController@pastelink',
	'as' => 'pastelink'
]);

Route::post('/pastelink', [
	'uses' => 'LinkController@postLink',
	'as' => 'postLink'
]);

Route::post('/delete_link', [
	'uses' => 'LinkController@postDelete',
	'as' => 'postDelete_link'
]);