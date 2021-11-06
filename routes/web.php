<?php

use App\Models\Repository;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {

    $microframework = Repository::where('name','microframework')->get();
    $paymentservice = Repository::where('name','paymentservice')->get();
    $hub = Repository::where('name','hub')->get();
    $pagos = Repository::where('name','pgs')->get();
    $repos = Repository::all()->pluck('name')->unique();
    $partitions = Repository::all()->pluck('partition')->unique();

    return view('welcome', ['repos' => $repos, 'partitions' => $partitions]);
});

Route::get('/jira', function (){
    return view('jira');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
