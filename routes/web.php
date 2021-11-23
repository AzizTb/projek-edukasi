<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('matlogi')->group(function () {

    //tampilan user
    Route::get('index', function () {
        return view('user.tampilan.index');
    })->name('index-user');

    Route::get('mtk', function () {
        return view('user.tampilan.mtk');
    })->name('mtk-user');

    Route::get('bio', function () {
        return view('user.tampilan.bio');
    })->name('bio-user');

    Route::get('about', function () {
        return view('user.tampilan.tentang');
    })->name('about-user');


    //tampilan login
    Route::get('sign', function () {
        return view('login.masuk');
    })->name('sign');

    Route::get('register', function () {
        return view('login.register');
    })->name('register');


    //tampilan admin
    Route::get('beranda', function () {
        return view('admin.tampilan.dashboard');
    })->name('index-admin');


    //user
    Route::get('listuser', function () {
        return view('admin.tampilan.AkunLogin.index');
    })->name('listuser');

    Route::get('edituser', function () {
        return view('admin.tampilan.AkunLogin.edit');
    })->name('edituser');


    //admin
    Route::get('listadmin', function () {
        return view('admin.tampilan.AkunAdmin.index');
    })->name('listadmin');

    Route::get('editadmin', function () {
        return view('admin.tampilan.AkunAdmin.edit');
    })->name('editadmin');

    Route::get('tambahadmin', function () {
        return view('admin.tampilan.AkunAdmin.create');
    })->name('tambahadmin');


    // materi
    Route::get('listmateri', function () {
        return view('admin.tampilan.Materi.index');
    });

    Route::get('buatmateri', function () {
        return view('admin.tampilan.Materi.create');
    });

    Route::get('editmateri', function () {
        return view('admin.tampilan.Materi.edit');
    });
});
