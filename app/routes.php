<?php

Route::get('buy', function()
{
    return View::make('buy');
});

Route::post('buy', function()
{
    dd(Input::all());
});


