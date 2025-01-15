<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::get('/sql', function(){
    DB::connection()->getDatabaseName();
    echo "OK: " . DB::getDatabaseName();
});