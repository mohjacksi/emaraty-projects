<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Projects
    Route::post('projects/media', 'ProjectsApiController@storeMedia')->name('projects.storeMedia');
    Route::apiResource('projects', 'ProjectsApiController');

    // Properties
    Route::post('properties/media', 'PropertiesApiController@storeMedia')->name('properties.storeMedia');
    Route::apiResource('properties', 'PropertiesApiController');

    // Report Accidents
    Route::post('report-accidents/media', 'ReportAccidentApiController@storeMedia')->name('report-accidents.storeMedia');
    Route::apiResource('report-accidents', 'ReportAccidentApiController');
});
