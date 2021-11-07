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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', function (){
        return view('welcome');
    });

    Route::get('/{repository}/{partition}', function($repository, $partition){
        $prod = Repository::where('name', $repository)->where('partition', $partition)->whereIn('env',['prd','cross'])->get();
        $uat = Repository::where('name', $repository)->where('partition', $partition)->whereIn('env',['uat','pre','tst'])->get();
        return view('table', compact('prod','uat','repository','partition'));
    });

    Route::get('/jira', function (){
        return view('jira');
    });

});
