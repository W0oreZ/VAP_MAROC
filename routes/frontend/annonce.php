<?php

/**
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::group(['namespace' => 'Annonces', 'as' => 'annonce.'], function () {
    /*
     * These routes require no user to be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        // index Route for annonces
        Route::get('/', 'AnnonceController@index')->name('index');
    });
});
