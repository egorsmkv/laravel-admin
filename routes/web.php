<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false, 'confirm' => false, 'reset' => false]);

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', function () {
    return redirect('/admin/dashboard');
});

Route::namespace('Admin')->prefix('/admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

});
