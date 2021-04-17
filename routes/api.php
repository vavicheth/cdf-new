<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Asset Categories
    Route::apiResource('asset-categories', 'AssetCategoryApiController');

    // Asset Locations
    Route::apiResource('asset-locations', 'AssetLocationApiController');

    // Asset Statuses
    Route::apiResource('asset-statuses', 'AssetStatusApiController');

    // Assets
    Route::post('assets/media', 'AssetApiController@storeMedia')->name('assets.storeMedia');
    Route::apiResource('assets', 'AssetApiController');

    // Assets Histories
    Route::apiResource('assets-histories', 'AssetsHistoryApiController', ['except' => ['store', 'show', 'update', 'destroy']]);

    // Expense Categories
    Route::apiResource('expense-categories', 'ExpenseCategoryApiController');

    // Income Categories
    Route::apiResource('income-categories', 'IncomeCategoryApiController');

    // Expenses
    Route::apiResource('expenses', 'ExpenseApiController');

    // Incomes
    Route::apiResource('incomes', 'IncomeApiController');

    // Departments
    Route::apiResource('departments', 'DepartmentApiController');

    // Titles
    Route::apiResource('titles', 'TitleApiController');

    // Positions
    Route::apiResource('positions', 'PositionsApiController');

    // Categories
    Route::apiResource('categories', 'CategoriesApiController');

    // Organisations
    Route::apiResource('organisations', 'OrganisationApiController');

    // Document Types
    Route::apiResource('document-types', 'DocumentTypeApiController');

    // Documents
    Route::post('documents/media', 'DocumentApiController@storeMedia')->name('documents.storeMedia');
    Route::apiResource('documents', 'DocumentApiController');

    // Comments
    Route::post('comments/media', 'CommentApiController@storeMedia')->name('comments.storeMedia');
    Route::apiResource('comments', 'CommentApiController');

    // User Infos
    Route::post('user-infos/media', 'UserInfoApiController@storeMedia')->name('user-infos.storeMedia');
    Route::apiResource('user-infos', 'UserInfoApiController');

    // App Seetings
    Route::post('app-seetings/media', 'AppSeetingApiController@storeMedia')->name('app-seetings.storeMedia');
    Route::apiResource('app-seetings', 'AppSeetingApiController');

    // Staff
    Route::post('staff/media', 'StaffApiController@storeMedia')->name('staff.storeMedia');
    Route::apiResource('staff', 'StaffApiController');
});
