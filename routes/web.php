<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

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

Route::get('/', [mainController::class, 'index']);
Route::get('/blog', [mainController::class, 'blog']);
Route::get('/page', [mainController::class, 'page']);
Route::get('/page-elements', [mainController::class, 'page_elements']);
Route::get('/page-icons', [mainController::class, 'page_icons']);
Route::get('/portfolio', [mainController::class, 'portfolio']);
Route::get('/contact', [mainController::class, 'contact']);

Route::post('/form', [mainController::class, 'form_handler']);

Route::get('/blog/{id}', [mainController::class, 'show_article']);
