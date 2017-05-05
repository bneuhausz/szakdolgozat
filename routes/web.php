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

Route::get('/', [
    'uses' => 'IndexController@getIndex',
    'as' => 'index'
]);

Route::post('/language', [
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'Lang\LanguageController@index',
    'as' => 'language'
]);

Route::get('/calorieneed', [
    'uses' => 'CalculatorController@getCalorieNeed',
    'as' => 'calorieNeedCalc'
]);

Route::post('/calorieneed', [
    'uses' => 'CalculatorController@postCalorieNeed',
    'as' => 'calculate.calorieneed'
]);

Route::get('/onerepmax', [
    'uses' => 'CalculatorController@get1rm',
    'as' => '1rmCalc'
]);

Route::get('/contact', [
    'uses' => 'ContactMessageController@getContactIndex',
    'as' => 'contact'
]);

Route::get('/donation', [
    'uses' => 'DonationController@getDonationIndex',
    'as' => 'donation'
]);

Route::post('/donation', [
    'uses' => 'DonationController@postDonation',
    'as' => 'donation'
]);

Route::post('/contact/sendmail', [
    'uses' => 'ContactMessageController@postSendMessage',
    'as' => 'contact.send'
]);

Route::get('/exercises', [
    'uses' => 'ExerciseController@getExercises',
    'as' => 'exercises'
]);

Route::get('/exercise/{exerciseID}', [
    'uses' => 'ExerciseController@getExercise',
    'as' => 'exercise'
]);

Route::get('/programPicker', [
    'uses' => 'ProgramController@getPrograms',
    'as' => 'programPicker'
]);

Route::get('/programs/search', [
    'uses' => 'ProgramController@postSearchPrograms',
    'as' => 'programs.search'
]);

Route::get('/program/{programID}', [
    'uses' => 'ProgramController@getProgram',
    'as' => 'program'
]);

Route::group([
    'middleware' => 'auth'
], function(){
    Route::get('/profile', [
        'uses' => 'UserController@getProfile',
        'as' => 'profile'
    ]);

    Route::get('/profile/edit', [
        'uses' => 'UserController@getEditProfile',
        'as' => 'profile.edit'
    ]);

    Route::post('/profile/edit', [
        'uses' => 'UserController@postUpdateProfile',
        'as' => 'profile.update'
    ]);

    Route::get('/picture/{filename}', [
        'uses' => 'UserController@GetUserImage',
        'as' => 'profile.image'
    ]);

    Route::get('/myExercises', [
        'uses' => 'CustomExerciseController@getCustomExercises',
        'as' => 'myExercises'
    ]);

    Route::post('/myExercises/add', [
        'uses' => 'CustomExerciseController@postAddCustomExercise',
        'as' => 'myExercises.add'
    ]);

    Route::get('emailChange/confirm/{confirmationToken}', [
        'uses' => 'UserController@getEmailChange',
        'as' => 'confirmEmailChange'
    ]);
});

Auth::routes();

Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth.admin'
], function(){
    Route::get('/', [
        'uses' => 'Admin\AdminController@getIndex',
        'as' => 'admin.index'
    ]);

    Route::get('/user/getAdmin/{id}', [
        'uses' => 'Admin\UserController@getGetAdmin',
        'as' => 'admin.getAdmin'
    ]);

    Route::get('/user/loseAdmin/{id}', [
        'uses' => 'Admin\UserController@getLoseAdmin',
        'as' => 'admin.loseAdmin'
    ]);

    Route::get('/users', [
        'uses' => 'Admin\UserController@getUsers',
        'as' => 'admin.users'
    ]);

    Route::get('/user/{userId}', [
        'uses' => 'Admin\UserController@getUser',
        'as' => 'admin.user'
    ]);

    Route::post('/users/search', [
        'uses' => 'Admin\UserController@postUserSearchResults',
        'as' => 'admin.user.search'
    ]);

    Route::get('/exercises', [
        'uses' => 'Admin\ExerciseController@getExercises',
        'as' => 'admin.exercises'
    ]);

    Route::get('/exercise/add', [
        'uses' => 'Admin\ExerciseController@getAddExercise',
        'as' => 'admin.exercise.add'
    ]);

    Route::post('/exercise/add', [
        'uses' => 'Admin\ExerciseController@postAddExercise',
        'as' => 'admin.exercise.add'
    ]);

    Route::post('/exercise/search', [
        'uses' => 'Admin\ExerciseController@postExerciseSearchResults',
        'as' => 'admin.exercise.search'
    ]);

    Route::get('/exercise/delete/{id}', [
        'uses' => 'Admin\ExerciseController@getDeleteExercise',
        'as' => 'admin.exercise.delete'
    ]);

    Route::get('/exercise/edit/{id}', [
        'uses' => 'Admin\ExerciseController@getEditExercise',
        'as' => 'admin.exercise.edit'
    ]);

    Route::post('/exercise/update', [
        'uses' => 'ExerciseController@postUpdateExercise',
        'as' => 'admin.exercise.update'
    ]);

    Route::get('/articles', [
        'uses' => 'Admin\ArticleController@getArticles',
        'as' => 'admin.articles'
    ]);

    Route::post('/articles/search', [
        'uses' => 'Admin\ArticleController@postArticleSearchResults',
        'as' => 'admin.article.search'
    ]);

    Route::get('/article/add', [
        'uses' => 'Admin\ArticleController@getAddArticle',
        'as' => 'admin.article.add'
    ]);

    Route::post('/article/add', [
        'uses' => 'Admin\ArticleController@postAddArticle',
        'as' => 'admin.article.add'
    ]);

    Route::get('/article/edit/{id}', [
        'uses' => 'Admin\ArticleController@getEditArticle',
        'as' => 'admin.article.edit'
    ]);

    Route::post('/article/update', [
        'uses' => 'Admin\ArticleController@postUpdateArticle',
        'as' => 'admin.article.update'
    ]);

    Route::get('/article/delete/{id}', [
        'uses' => 'Admin\ArticleController@getDeleteArticle',
        'as' => 'admin.article.delete'
    ]);

    Route::get('/article/{articleId}', [
        'uses' => 'Admin\ArticleController@getArticle',
        'as' => 'admin.article'
    ]);

    Route::get('/messages', [
        'uses' => 'Admin\ContactMessageController@getMessages',
        'as' => 'admin.messages'
    ]);

    Route::post('/messages/search', [
        'uses' => 'Admin\ContactMessageController@postMessageSearchResults',
        'as' => 'admin.message.search'
    ]);

    Route::get('/message/delete/{id}', [
        'uses' => 'Admin\ContactMessageController@getDeleteMessage',
        'as' => 'admin.message.delete'
    ]);

    Route::get('/message/{messageId}', [
        'uses' => 'Admin\ContactMessageController@getMessage',
        'as' => 'admin.message'
    ]);
});
