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
Route::get('/', 'PagesController@index');
Route::get('/', 'HomeController@index');


//Route::get('/index', 'PagesController@index');
Route::get('/menu', 'PagesController@menu');
Route::get('/menu', 'HomeController@menu');

Route::get('/about', 'PagesController@about');
Route::get('/about', 'HomeController@about');

Route::get('/gallery', 'PagesController@gallery');
Route::get('/gallery', 'HomeController@gallery');

Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@postContact');

Route::post('/reserve', 'PagesController@reserve');

Route::get('/korean_traditional_foods', 'PagesController@korean_traditional_foods');

Route::get('/liveevent', 'PagesController@liveevent');
Route::get('/liveevent', 'HomeController@liveevent');

Auth::routes();



Route::get('/admin', 'AdminController@admin');
Route::get('/addMenu', 'AddMenuController@addMenu');
Route::get('/addEvent', 'EventController@addEvent');
Route::get('/addStaff', 'StaffController@addStaff');
Route::get('/addGallery', 'galleryController@addGallery');
Route::get('/addTest', 'AdminController@addTest');
Route::get('/addSlide', 'AdminController@addSlide');

Route::get('/editMenu/{id}', 'AddMenuController@edit');
Route::get('/editEvent/{id}', 'EventController@edit');
Route::get('/editStaff/{id}', 'StaffController@edit');
Route::get('/editTest/{id}', 'AdminController@edit');
Route::get('/editSlide/{id}', 'AdminController@sedit');

Route::get('/showMenu/{id}', 'AddMenuController@show');
Route::get('/showEvent/{id}', 'EventController@show');
Route::get('/showStaff/{id}', 'StaffController@show');

Route::post('/storeMenu', 'AddMenuController@store');
Route::post('/storeEvent', 'EventController@store');
Route::post('/storeStaff', 'StaffController@store');
Route::post('/storeGallery', 'galleryController@store');
Route::post('/storeTest', 'AdminController@store');
Route::post('/storeSlide', 'AdminController@sstore');

Route::get('/listMenu', 'AddMenuController@listMenu');
Route::get('/listEvent', 'EventController@listEvent');
Route::get('/listStaff', 'StaffController@listStaff');
Route::get('/listGallery', 'galleryController@listGallery');
Route::get('/listTest', 'AdminController@listTest');
Route::get('/listSlide', 'AdminController@listSlide');

Route::get('/destroyMenu/{id}', 'AddMenuController@destroy');
Route::get('/destroyEvent/{id}', 'EventController@destroy');
Route::get('/destroyGallery/{id}', 'galleryController@destroy');
Route::get('/destroyStaff/{id}', 'StaffController@destroy');
Route::get('/destroyTest/{id}', 'AdminController@destroy');
Route::get('/destroySlide/{id}', 'AdminController@sdestroy');

Route::get('/updateMenu/{id}', 'AddMenuController@update');
Route::get('/updateEvent/{id}', 'EventController@update');
Route::get('/updateStaff/{id}', 'StaffController@update');
Route::get('/updateTest/{id}', 'AdminController@update');
Route::get('/updateSlide/{id}', 'AdminController@supdate');

Route::get('/home', 'AdminController@admin' );