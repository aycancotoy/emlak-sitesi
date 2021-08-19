<?php

use App\Http\Livewire\Admin\AdminPaneliComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\KonutComponent;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
//Anasayfa
Route::get('/',HomeComponent::class);
Route::get('/konut',KonutComponent::class);
//Admin


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', AdminPaneliComponent::class)->name('admin.dashboard');
});
