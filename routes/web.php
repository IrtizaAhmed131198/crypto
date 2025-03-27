<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', url('/login'));
Route::redirect('/admin', url('/admin/login'));

Route::namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('login', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.post');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('signup', 'AuthController@showRegisterForm')->name('signup');
    Route::post('signup', 'AuthController@register');
});

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('login', 'AuthController@showLoginForm')->name('admin.login');
    Route::post('login', 'AuthController@admin_login')->name('admin.login.post');
    Route::get('logout', 'AuthController@logout')->name('admin.logout');
});

// Protected Admin Routes
Route::namespace('App\Http\Controllers\Admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/home', 'HomeController@index')->name('admin.home.index');

        // Admin
        Route::get('/admins/{id}/edit', 'AdminController@edit')->name('admin.edit');
        Route::post('/admins/update/{id}', 'AdminController@update')->name('admin.update');
        Route::get('/getAdmin', 'AdminController@getAdmin')->name('admin.getAdmin');
        Route::get('/admins', 'AdminController@index')->name('admin.index');

        //Users
        Route::get('/getUsers', 'UserController@getUsers')->name('users.getUsers');
        Route::get('/users', 'UserController@index')->name('users.index');
        Route::get('/users/create', 'UserController@create')->name('users.create');
        Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
        Route::post('/users/store', 'UserController@store')->name('users.store');
        Route::post('/users/update', 'UserController@update')->name('users.update');
        Route::post('/users/destroy', 'UserController@destroy')->name('users.destroy');

        //profile
        Route::get('/profile/edit', 'UserController@profile')->name('profile.edit');
        Route::post('/profile/update', 'UserController@update_profile')->name('profile.update');

        //team
        Route::get('/team/qr', 'TeamController@qr')->name('team.qr');

        Route::get('/withdraw', 'TeamController@withdraw')->name('withdraw');
        Route::get('/deposit', 'TeamController@deposit')->name('deposit');

        //Partners
        Route::get('/getPartners', 'PartnersController@getPartners')->name('partners.getPartners');
        Route::get('/partners', 'PartnersController@index')->name('partners.index');
        Route::get('/partners/create', 'PartnersController@create')->name('partners.create');
        Route::get('/partners/edit/{id}', 'PartnersController@edit')->name('partners.edit');
        Route::post('/partners/store', 'PartnersController@store')->name('partners.store');
        Route::post('/partners/update', 'PartnersController@update')->name('partners.update');
        Route::post('/partners/destroy', 'PartnersController@destroy')->name('partners.destroy');

        //Categories
        Route::get('/getCategories', 'CategoriesController@getCategories')->name('categories.getCategories');
        Route::get('/categories', 'CategoriesController@index')->name('categories.index');
        Route::get('/categories/create', 'CategoriesController@create')->name('categories.create');
        Route::get('/categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
        Route::post('/categories/store', 'CategoriesController@store')->name('categories.store');
        Route::post('/categories/update', 'CategoriesController@update')->name('categories.update');
        Route::post('/categories/destroy', 'CategoriesController@destroy')->name('categories.destroy');

        //Blog
        Route::get('/getBlogs', 'BlogController@getBlogs')->name('blog.getBlogs');
        Route::get('/blog', 'BlogController@index')->name('blog.index');
        Route::get('/blog/create', 'BlogController@create')->name('blog.create');
        Route::get('/blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
        Route::post('/blog/store', 'BlogController@store')->name('blog.store');
        Route::post('/blog/update', 'BlogController@update')->name('blog.update');
        Route::post('/blog/destroy', 'BlogController@destroy')->name('blog.destroy');

        //Subscribe
        Route::get('/getSubscribe', 'SubscribeController@getSubscribe')->name('subscribe.getSubscribe');
        Route::get('/subscribe', 'SubscribeController@index')->name('subscribe.index');
        Route::post('/subscribe/destroy', 'SubscribeController@destroy')->name('subscribe.destroy');

        //Job
        Route::get('/getJobs', 'JobController@getJobs')->name('job.getJobs');
        Route::get('/job', 'JobController@index')->name('job.index');
        Route::get('/job/create', 'JobController@create')->name('job.create');
        Route::get('/job/edit/{id}', 'JobController@edit')->name('job.edit');
        Route::post('/job/store', 'JobController@store')->name('job.store');
        Route::post('/job/update', 'JobController@update')->name('job.update');
        Route::post('/job/destroy', 'JobController@destroy')->name('job.destroy');

        //JobApplication
        Route::get('/getJobsApplication', 'JobApplicationController@getJobsApplication')->name('jobapp.getJobsApplication');
        Route::get('/job-app', 'JobApplicationController@index')->name('jobapp.index');
        Route::get('/job-app/edit/{id}', 'JobApplicationController@edit')->name('jobapp.edit');
        Route::post('/job-app/update', 'JobApplicationController@update')->name('jobapp.update');
        Route::get('/job-app/refund/{id}', 'JobApplicationController@refund')->name('jobapp.refund');
        Route::post('/job-app/b2c-callback', 'JobApplicationController@mpesaB2CCallback')->name('mpesaB2CCallback');

        //settings
        Route::get('/settings', 'SettingsController@edit')->name('settings.edit');
        Route::post('/settings/update', 'SettingsController@update')->name('settings.update');

        //Page
        Route::resource('pages', 'PagesController');
    });
