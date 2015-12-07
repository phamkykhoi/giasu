<?php
Route::get('/', 'ChatController@index'); // 聊天室頁面
Route::post('send-message', 'ChatController@sendMessage'); // 發送訊息
Route::controllers([
	'auth'	=> 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);