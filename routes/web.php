<?php

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

Route::get('/', 'FrontController@index');

//all jobs and filtering
Route::get('/vacatures', 'FrontController@get_vacatures')->name('vacatures');
Route::get('/vacatures-two', 'FrontController@get_vacaturestwo')->name('vacatures-two');
Route::get('/vacatures-none', 'FrontController@get_vacaturesnone')->name('vacatures-none');
//one job
Route::get('/job/{id}', 'FrontController@get_job')->name('job');


//login
Auth::routes();

//return views for admin dashboard
Route::get('/home-admin', 'HomeController@index')->name('home-admin');
Route::get('/home-jobs', 'HomeController@jobs')->name('home-jobs');


//return all cities and categories
Route::get('/home-cities', 'HomeController@cities')->name('home-cities');
Route::get('/home-categories', 'HomeController@categories')->name('home-categories');
Route::get('/get-all-cities', 'CityController@index')->name('get-all-cities');


//return blade with form for creating new one
Route::get('/home-create-city', 'HomeController@create_city')->name('home-create-city');
Route::get('/home-create-category', 'HomeController@create_category')->name('home-create-category');

//erp system
Route::get('/erp', 'HomeController@erp')->name('erp');
Route::get('/toevoegen', 'HomeController@toevoegen')->name('toevoegen');



//middlware protection
Route::group(['middleware' => ['admin']], function () {

    //create
    Route::post('/create-city', 'CityController@create')->name('create-city');
    Route::post('/create-category', 'CategoryController@create')->name('create-category');
    Route::post('/create-job', 'JobController@create')->name('create-job');
    Route::post('/create-people', 'PeopleController@create')->name('create-people');

    
    //edit
    Route::get('/edit-city/{id}', 'CityController@edit')->name('edit-city');
    Route::post('/update-city/{id}', 'CityController@update')->name('update-city');

    Route::get('/edit-category/{id}', 'CategoryController@edit')->name('edit-category');
    Route::post('/update-category/{id}', 'CategoryController@update')->name('update-category');


    Route::get('/edit-job/{id}', 'JobController@edit')->name('edit-job');
    Route::post('/update-job/{id}', 'JobController@update')->name('update-job');
    //delete
    Route::get('/delete-category/{id}', 'CategoryController@destroy')->name('delete-category');
    Route::get('/delete-job/{id}', 'JobController@destroy')->name('delete-job');
    Route::get('/delete-city/{id}', 'CityController@destroy')->name('delete-city');
    Route::get('/delete-people/{id}', 'PeopleController@destroy')->name('delete-people');
});



//send email
Route::post('/send-email', 'EmailController@send')->name('send-email');
Route::get('/apply-job/{id}', 'FrontController@apply_job')->name('apply-job');

//contact
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::post('/contact/email', 'EmailController@contact')->name('contact-email');

//over ons
Route::get('/over-ons', function () {
    return view('pages.over-ons');
});


Route::get('/nieuwsoverzicht', 'FrontController@nieuwsoverzicht')->name('nieuwsoverzicht');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/personeel', 'FrontController@personeel')->name('personeel');