<?php

Route::get('/bukus','inputController@index');
Route::get('/bukus/tambah','inputController@tambah');
Route::post('/bukus/action','inputController@action');
Route::get('/bukus/edit/{id}','inputController@edit');
Route::post('/bukus/update','inputController@update');
Route::get('/bukus/hapus/{id}','inputController@hapus');