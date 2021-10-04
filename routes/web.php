<?php

use App\Http\Controllers\Admin\CheckListController;
use App\Http\Controllers\Admin\CheckListGroupController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PageController as ControllersPageController;
use App\Http\Controllers\User\ChecklistController as UserChecklistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', 'welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('welcome', [ControllersPageController::class, 'welcome'])->name('welcome');
    Route::get('consultation', [ControllersPageController::class, 'consultation'])->name('consultation');
    Route::get('checklists/{checklist}', [UserChecklistController::class, 'show'])
        ->name('user.checklists.show');

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function () {
        Route::resource('pages', PageController::class)
            ->only(['edit', 'update']);
        Route::resource('checklist_groups', CheckListGroupController::class);
        Route::resource('checklist_groups.checklists', CheckListController::class);
        Route::resource('checklists.tasks', TaskController::class);
        Route::get('users', [UserController::class, 'index'])->name('users.index');
    });
});
