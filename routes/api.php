<?php

use App\Http\Controllers\api\IndexController;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('categories', [IndexController::class, 'getAllCategories']);

Route::post('store-company', [IndexController::class, 'store']);
Route::get('companies', [IndexController::class, 'getAllCompanies']);
Route::get('companies-slug', [IndexController::class, 'getCompaniesSlug']);
