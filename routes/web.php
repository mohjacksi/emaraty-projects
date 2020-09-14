<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();
Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Projects
    Route::delete('projects/destroy', 'ProjectsController@massDestroy')->name('projects.massDestroy');
    Route::post('projects/media', 'ProjectsController@storeMedia')->name('projects.storeMedia');
    Route::post('projects/ckmedia', 'ProjectsController@storeCKEditorImages')->name('projects.storeCKEditorImages');
    Route::resource('projects', 'ProjectsController');

    // Properties
    Route::delete('properties/destroy', 'PropertiesController@massDestroy')->name('properties.massDestroy');
    Route::post('properties/media', 'PropertiesController@storeMedia')->name('properties.storeMedia');
    Route::post('properties/ckmedia', 'PropertiesController@storeCKEditorImages')->name('properties.storeCKEditorImages');
    Route::resource('properties', 'PropertiesController');

    // Report Accidents
    Route::delete('report-accidents/destroy', 'ReportAccidentController@massDestroy')->name('report-accidents.massDestroy');
    Route::post('report-accidents/media', 'ReportAccidentController@storeMedia')->name('report-accidents.storeMedia');
    Route::post('report-accidents/ckmedia', 'ReportAccidentController@storeCKEditorImages')->name('report-accidents.storeCKEditorImages');
    Route::resource('report-accidents', 'ReportAccidentController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
