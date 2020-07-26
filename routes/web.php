<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get("/dashbord",function(){
    return redirect("/");
});

Route::livewire("/","homelive")->name('abc');
Route::livewire("/one","one");
Route::livewire("/homelive","homelive");
Route::livewire("/dashbord","dashbord");

Route::livewire("/social","social-icon");

 Route::livewire("/posts_table","posts");
 Route::livewire("/addpost","addpost-form");
 Route::livewire("/userdetailedit","edit-persona-data");

 Route::livewire("nav/{id}","nav");
 Route::livewire("/test","test");
 Route::livewire("/mail","mail");


