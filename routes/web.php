<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin/login');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
