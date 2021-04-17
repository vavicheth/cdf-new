<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', '2fa']], function () {
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

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Asset Categories
    Route::delete('asset-categories/destroy', 'AssetCategoryController@massDestroy')->name('asset-categories.massDestroy');
    Route::resource('asset-categories', 'AssetCategoryController');

    // Asset Locations
    Route::delete('asset-locations/destroy', 'AssetLocationController@massDestroy')->name('asset-locations.massDestroy');
    Route::resource('asset-locations', 'AssetLocationController');

    // Asset Statuses
    Route::delete('asset-statuses/destroy', 'AssetStatusController@massDestroy')->name('asset-statuses.massDestroy');
    Route::resource('asset-statuses', 'AssetStatusController');

    // Assets
    Route::delete('assets/destroy', 'AssetController@massDestroy')->name('assets.massDestroy');
    Route::post('assets/media', 'AssetController@storeMedia')->name('assets.storeMedia');
    Route::post('assets/ckmedia', 'AssetController@storeCKEditorImages')->name('assets.storeCKEditorImages');
    Route::resource('assets', 'AssetController');

    // Assets Histories
    Route::resource('assets-histories', 'AssetsHistoryController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Expense Categories
    Route::delete('expense-categories/destroy', 'ExpenseCategoryController@massDestroy')->name('expense-categories.massDestroy');
    Route::resource('expense-categories', 'ExpenseCategoryController');

    // Income Categories
    Route::delete('income-categories/destroy', 'IncomeCategoryController@massDestroy')->name('income-categories.massDestroy');
    Route::resource('income-categories', 'IncomeCategoryController');

    // Expenses
    Route::delete('expenses/destroy', 'ExpenseController@massDestroy')->name('expenses.massDestroy');
    Route::resource('expenses', 'ExpenseController');

    // Incomes
    Route::delete('incomes/destroy', 'IncomeController@massDestroy')->name('incomes.massDestroy');
    Route::resource('incomes', 'IncomeController');

    // Expense Reports
    Route::delete('expense-reports/destroy', 'ExpenseReportController@massDestroy')->name('expense-reports.massDestroy');
    Route::resource('expense-reports', 'ExpenseReportController');

    // Departments
    Route::delete('departments/destroy', 'DepartmentController@massDestroy')->name('departments.massDestroy');
    Route::resource('departments', 'DepartmentController');

    // Titles
    Route::delete('titles/destroy', 'TitleController@massDestroy')->name('titles.massDestroy');
    Route::resource('titles', 'TitleController');

    // Positions
    Route::delete('positions/destroy', 'PositionsController@massDestroy')->name('positions.massDestroy');
    Route::resource('positions', 'PositionsController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Organisations
    Route::delete('organisations/destroy', 'OrganisationController@massDestroy')->name('organisations.massDestroy');
    Route::resource('organisations', 'OrganisationController');

    // Document Types
    Route::delete('document-types/destroy', 'DocumentTypeController@massDestroy')->name('document-types.massDestroy');
    Route::resource('document-types', 'DocumentTypeController');

    // Documents
    Route::delete('documents/destroy', 'DocumentController@massDestroy')->name('documents.massDestroy');
    Route::post('documents/media', 'DocumentController@storeMedia')->name('documents.storeMedia');
    Route::post('documents/ckmedia', 'DocumentController@storeCKEditorImages')->name('documents.storeCKEditorImages');
    Route::get('documents/print/{id}', 'DocumentController@print')->name('documents.print');
    Route::get('documents/send_mail', 'DocumentController@sendMail')->name('documents.sendMail');
    Route::resource('documents', 'DocumentController');

    // Comments
    Route::delete('comments/destroy', 'CommentController@massDestroy')->name('comments.massDestroy');
    Route::post('comments/media', 'CommentController@storeMedia')->name('comments.storeMedia');
    Route::post('comments/ckmedia', 'CommentController@storeCKEditorImages')->name('comments.storeCKEditorImages');
    Route::resource('comments', 'CommentController');

    // User Infos
    Route::delete('user-infos/destroy', 'UserInfoController@massDestroy')->name('user-infos.massDestroy');
    Route::post('user-infos/media', 'UserInfoController@storeMedia')->name('user-infos.storeMedia');
    Route::post('user-infos/ckmedia', 'UserInfoController@storeCKEditorImages')->name('user-infos.storeCKEditorImages');
    Route::resource('user-infos', 'UserInfoController');

    // App Seetings
    Route::delete('app-seetings/destroy', 'AppSeetingController@massDestroy')->name('app-seetings.massDestroy');
    Route::post('app-seetings/media', 'AppSeetingController@storeMedia')->name('app-seetings.storeMedia');
    Route::post('app-seetings/ckmedia', 'AppSeetingController@storeCKEditorImages')->name('app-seetings.storeCKEditorImages');
    Route::resource('app-seetings', 'AppSeetingController');

    // Staff
    Route::delete('staff/destroy', 'StaffController@massDestroy')->name('staff.massDestroy');
    Route::post('staff/media', 'StaffController@storeMedia')->name('staff.storeMedia');
    Route::post('staff/ckmedia', 'StaffController@storeCKEditorImages')->name('staff.storeCKEditorImages');
    Route::post('staff/parse-csv-import', 'StaffController@parseCsvImport')->name('staff.parseCsvImport');
    Route::post('staff/process-csv-import', 'StaffController@processCsvImport')->name('staff.processCsvImport');
    Route::resource('staff', 'StaffController');

    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
    Route::get('user-alerts/read', 'UserAlertsController@read');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
        Route::post('profile/two-factor', 'ChangePasswordController@toggleTwoFactor')->name('password.toggleTwoFactor');
    }
});
Route::group(['namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
// Two Factor Authentication
    if (file_exists(app_path('Http/Controllers/Auth/TwoFactorController.php'))) {
        Route::get('two-factor', 'TwoFactorController@show')->name('twoFactor.show');
        Route::post('two-factor', 'TwoFactorController@check')->name('twoFactor.check');
        Route::get('two-factor/resend', 'TwoFactorController@resend')->name('twoFactor.resend');
    }
});
