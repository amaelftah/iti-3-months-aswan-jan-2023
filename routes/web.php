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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

    $posts = [
        [
            'id' => 1,
            'title' => 'laravel',
            'description' => 'test',
            'posted_by' => 'Ahmed',
            'created_at' => '2022-10-01 01:00:00',
        ],
        [
            'id' => 2,
            'title' => 'java script',
            'description' => 'test 123',
            'posted_by' => 'Mohamed',
            'created_at' => '2022-09-10 02:00:00',
        ],
    ];

    return view('test', [
        'posts' => $posts,
    ]);
});
