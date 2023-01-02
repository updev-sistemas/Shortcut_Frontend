<?php

Route::any('/{slug}', 'LinkController@redirectToLink');
Route::any('/', 'LinkController@redirectEmpty');
