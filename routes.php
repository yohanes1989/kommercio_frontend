<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web'], 'namespace' => 'Project\Project\Http\Controllers'], function () {
    Route::post('contact/process', [
        'as' => 'frontend.contact.process',
        'uses' => 'PageController@contactProcess'
    ]);

    Route::post('wholesale/process', [
        'as' => 'frontend.wholesale.process',
        'uses' => 'PageController@wholesaleProcess'
    ]);
});