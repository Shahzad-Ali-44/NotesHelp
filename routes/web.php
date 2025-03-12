<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;



Route::get('/', function () {
    return view('index');
});



Route::post('/contactform', function () {
    return view('contact');
});

Route::get('/contactform', function () {
    return view('contact');
});

Route::get('/loginSignup', function () {
    return view('loginSignup');
});

Route::get('/admin', function () {
    return view('adminLogin');
});

Route::get('/forgetpassword', function () {
    return view('forgetpassword');
});

Route::get('/viewUsers',[users::class,'viewUsers']);

Route::get('/viewNotes',[users::class,'viewNotes']);

Route::get('/removeUser/{id}/{name}',[users::class,'removeUser']);

Route::get('/removenote/{id}',[users::class,'removenote']);

Route::get('logoutAdmin',[users::class,'logoutAdmin']);


Route::get('/welcome',[users::class,'check']);

Route::get('/editNotes',[users::class,'editNotes']);


Route::get('/deleteNotes/{id}',[users::class,'deleteNotes']);

Route::get('/profile',[users::class,'checkProfile']);

Route::get('/uploadNotes',[users::class,'checkNotes']);

Route::get('/logout',[users::class,'logout']);

Route::post('/signup',[users::class,'register']);

Route::post('/editUsername',[users::class,'editUsername']);

Route::post('/editemail',[users::class,'editemail']);

Route::post('/editPassword',[users::class,'editPassword']);

Route::post('/upload',[users::class,'upload']);

Route::post('/auth',[users::class,'login']);

Route::post('/changepassword',[users::class,'changepassword']);

Route::post('/newpassword',[users::class,'newpassword']);


Route::post('/adminLogin',[users::class,'adminLogin']);
