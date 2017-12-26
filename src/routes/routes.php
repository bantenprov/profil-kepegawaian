<?php

Route::group(['prefix' => 'profil-kepegawaian'], function() {
    Route::get('demo', 'Bantenprov\ProfilKepegawaian\Http\Controllers\ProfilKepegawaianController@demo');
});
