<?php

Route::get('hello', function () {
    echo "hello before the specific hello";
});
Route::get('welcome/{name?}', 'Dovemad\Welcome\Http\WelcomeController@welcome');
