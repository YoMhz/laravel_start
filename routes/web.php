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
    $articles = [
        [
            'title' => "Mon premier article",
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit first. Quidem ipsam labore doloremque cum qui voluptatibus non aspernatur omnis, blanditiis delectus magnam placeat nihil facilis, quia laboriosam accusantium odio explicabo itaque. Rerum quibusdam adipisci temporibus dolor ad quod nemo repudiandae facere animi, dolorum reiciendis optio veniam!'
        ],
        [
            'title' => "Mon deuxième article",
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsam labore doloremque cum qui voluptatibus non aspernatur omnis, blanditiis delectus magnam placeat nihil facilis, quia laboriosam accusantium odio explicabo itaque. Rerum quibusdam adipisci temporibus dolor ad quod nemo repudiandae facere animi, dolorum reiciendis optio veniam!'
        ],
        [
            'title' => "Mon troisième article",
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsam labore doloremque cum qui voluptatibus non aspernatur omnis, blanditiis delectus magnam placeat nihil facilis, quia laboriosam accusantium odio explicabo itaque. Rerum quibusdam adipisci temporibus dolor ad quod nemo repudiandae facere animi, dolorum reiciendis optio veniam!'
        ]
    ];
    return view('home', [
        'articles' => $articles
    ]);
});

Route::get('hello-world', function () {
    return view('hello-world');
});
