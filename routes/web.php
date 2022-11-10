<?php

use Illuminate\Support\Facades;


Route::get('/',function(){

   return view('pages.home');
});

Route::get('/about-us',function(){

   return view('pages.about');
});

Route::get('/base',function(){

   return view('base');
});

