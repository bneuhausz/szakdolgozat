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

Route::get('/', [function () {
    return view('frontend.index');
}]);

Route::post('/language', [
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'Lang\LanguageController@index',
    'as' => 'language'
]);

Auth::routes();

Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth.admin'
], function(){
    Route::get('/', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);

    Route::get('/users', [
        'uses' => 'AdminController@getUsers',
        'as' => 'admin.users'
    ]);

    Route::get('/admin/user/{userId}', [
        'uses' => 'AdminController@getUser',
        'as' => 'admin.user'
    ]);

    Route::post('/users/search', [
        'uses' => 'AdminController@postUserSearchResults',
        'as' => 'admin.user.search'
    ]);

    Route::get('/exercises', [
        'uses' => 'AdminController@getExercises',
        'as' => 'admin.exercises'
    ]);

    Route::get('/exercise/add', [
        'uses' => 'AdminController@getAddExercise',
        'as' => 'admin.exercise.add'
    ]);

    Route::post('/exercise/add', [
        'uses' => 'AdminController@postAddExercise',
        'as' => 'admin.exercise.add'
    ]);

    Route::post('/exercise/search', [
        'uses' => 'AdminController@postExerciseSearchResults',
        'as' => 'admin.exercise.search'
    ]);

    Route::get('/exercise/delete/{id}', [
        'uses' => 'AdminController@getDeleteExercise',
        'as' => 'admin.exercise.delete'
    ]);

    Route::get('/exercise/edit/{id}', [
        'uses' => 'AdminController@getEditExercise',
        'as' => 'admin.exercise.edit'
    ]);

    Route::post('/exercise/update', [
        'uses' => 'AdminController@postUpdateExercise',
        'as' => 'admin.exercise.update'
    ]);
});
