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

Route::group(['domain' => env('WEB_DOMAIN')], function () {
    Route::get('/', 'coursesController@indexCourses');

    Route::get('about', function () {
        return view('about');
    });
    Route::get('showCourse', function () {
        return view('showCourse');
    });

    Route::get('why-choose-us', function () {
        return view('why-choose-us');
    });

    Route::get('gallery', function () {
        return view('gallery');
    });

    Route::get('careers', function () {
        return view('careers');
    });

    Route::get('contact', "ContactController@showContact");

    Route::post('contact', 'ContactController@submitContact');
    Route::post('careerSend', 'HomeController@submitCareer');

    Route::get('privacy-policy', function () {
        return view('privacy-policy');
    });
    Route::get('courses', 'coursesController@displayCourses');
    Route::get('gallery', 'GalleryController@displayGallery');
    Route::get('course/{id}/{slug}', 'coursesController@showCourse');
});

Route::group(['domain' => env('CMS_DOMAIN')], function () {


    Route::get('/', 'HomeController@index')->name('home');
    Auth::routes(['register' => false, 'reset' => true, 'verify' => true, 'logout' => false]);
    Route::group(['middleware' => ['auth:web']], function () {
        Route::resource('course', 'coursesController');
        Route::get('logout', 'HomeController@logout');

        //testimonial
        Route::get('testimonials', 'TestimonialsController@index');
        Route::post('storeTestimonials', 'TestimonialsController@store');
        Route::get('createTestimonials', 'TestimonialsController@create');
        Route::delete('deleteTestimonials/{id}', 'TestimonialsController@delete');

        //gallery
        Route::get('gallery', 'GalleryController@index');
        Route::post('storeGallery', 'GalleryController@store');
        Route::get('createGallery', 'GalleryController@create');
        Route::delete('deleteGallery/{id}', 'GalleryController@delete');

        //createStorage
        Route::get('createStorage', 'HomeController@validateStoragePath');

        Route::get('/change-password', 'ChangePasswordController@changePassword')->name('changePassword');
        Route::put('/change-password', 'ChangePasswordController@passwordChange');
    });
});
