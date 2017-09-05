<?php

Route::redirect('/', '/item', 301);
Route::resource('item', 'ItemController',['except' => ['create']]);
