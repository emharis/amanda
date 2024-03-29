<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
//	return View::make('hello');
    return Redirect::to('login');
});
Route::controller('login', 'App\Controllers\LoginController');
Route::get('logout', 'App\Controllers\LoginController@getLogout');

Route::group(array('before' => 'auth'), function() {
    Route::controller('home', 'App\Controllers\HomeController');
    
        Route::group(array('prefix' => 'setpt'), function() {
            Route::controller('bdnhkm', 'App\Controllers\Setpt\BadanhukumController');
            Route::controller('pergtng', 'App\Controllers\Setpt\PerguruanController');
        });
    
//    Route::group(array('prefix' => 'master'), function() {
//        Route::controller('safetyanggotabadan', 'App\Controllers\Master\MsafetyanggotabadanController');
//        Route::controller('safetycedera', 'App\Controllers\Master\MsafetycederaController');
//        Route::controller('safetyhubungan', 'App\Controllers\Master\MsafetyhubunganController');
//        Route::controller('safetyjenispekerjaan', 'App\Controllers\Master\MsafetyjenispekerjaanController');
//        Route::controller('safetyjenisbahaya', 'App\Controllers\Master\MsafetyjenisbahayaController');
//        Route::controller('safetykeadaan', 'App\Controllers\Master\MsafetykeadaanController');
//        Route::controller('safetyklasifikasi', 'App\Controllers\Master\MsafetyklasifikasiController');
//        Route::controller('group', 'App\Controllers\Master\MgroupController');
//        Route::controller('vendor', 'App\Controllers\Master\MvendorController');
//        Route::controller('departemen', 'App\Controllers\Master\MdepartemenController');
//        Route::controller('pegawai', 'App\Controllers\Master\MemployeeController');
//        Route::controller('workreq', 'App\Controllers\Master\MworkreqController');
//        Route::controller('safetysumberp', 'App\Controllers\Master\MsafetysumberpController');
//    });
});





