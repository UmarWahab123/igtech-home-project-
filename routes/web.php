<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');

Route::post('/login', 'Auth\LoginController@login');

Route::redirect('/home', '/profile');

Route::get('unautorized', function () {

    return view('errors.403');

});

Route::get('/404', function () {

    return abort(404);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Auth\LoginController@logout');
    //User
    Route::get('/profile', 'UserController@profile');

    Route::post('/savepaymentlink', 'Test\PaymentController@savepaymentlink');

    Route::get('/projects', 'ProjectsController@projects');
    Route::get('/project/{id?}', 'ProjectsController@project');
    Route::post('/saveproject', 'ProjectsController@saveproject');
    Route::get('/deleteproject/{id}', 'ProjectsController@deleteproject');
    Route::get('/projectsdetails/{id}', 'ProjectsController@detail');
    Route::post('/paymentmodal', 'PaymentsController@paymentmodal');
    Route::post('/savepayment', 'PaymentsController@savepayment');
    Route::get('/deletepayment/{id}', 'PaymentsController@deletepayment');
});
