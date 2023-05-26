<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\EmailsController;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::resource('/posts', '\App\Http\Controllers\PostsController');
Route::resource('/users', '\App\Http\Controllers\UsersController');
Route::resource('/transactions', '\App\Http\Controllers\TransactionsController');
Route::resource('/contacts', '\App\Http\Controllers\ContactsController');

Route::get('/',  [PagesController::class, 'index']);
Route::get('/about',  [PagesController::class, 'about']);
Route::get('/services',  [PagesController::class, 'services']);

Route::get('/randomArticle',  [PostsController::class, 'randomArticle']);

Route::post('/dashboard/update', [UsersController::class, 'update'])->name('dashboard/update');

Route::get('/dashboard/edit/', [UsersController::class, "edit"]);

Route::post('/contacts/new', [ContactsController::class, "new"])->name('contacts/new');

Route::get('/dashboard/transactions/', [TransactionsController::class, "allUser"]);

Route::post('/transactions/new', [TransactionsController::class, "new"])->name('transactions/new');

Route::get('/deposit', [TransactionsController::class, "deposit"]);

Route::post('/transactions/search', [TransactionsController::class, "search"]);

Route::get('/withdraw', [TransactionsController::class, "withdraw"]);

Route::post('/commit', [TransactionsController::class, "commit"])->name('/commit');

Route::get('/transaction/reverse/{id}', [TransactionsController::class, "reverse"]);


Route::get('/newsletter', [EmailsController::class, "create"]);

Route::get('/searchArticles', [PostsController::class, "search"]);