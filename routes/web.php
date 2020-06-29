<?php

use Sumantablog\Admin\LockScreen\Http\Controllers\LockScreenController;

Route::get('auth/lock', LockScreenController::class.'@lock')->name('laravel-superadmin-lock');
Route::post('auth/unlock', LockScreenController::class.'@unlock')->name('laravel-superadmin-unlock');