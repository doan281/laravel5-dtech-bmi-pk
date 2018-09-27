<?php

Route::group(['namespace' => 'DtechBmi\BMI\Controllers', 'prefix' => '/dtech-bmi/bmi'], function (){

    Route::get('/', 'BMIController@index')->name('bmi_path');

});