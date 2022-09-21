<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\LabResults;
use Illuminate\Support\Facades\Response;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'authrecp'])->get('/recp/dashboard', function () {
    return redirect('/recp');
    //return view('recp.dashboard');
})->name('recp.dashboard');

//Route::group(['middleware'=>['auth:sanctum', 'verified', 'authrecp']], )


Route::middleware(['authrecp'])->resource('/recp','App\Http\Controllers\ReceptionController');

/*Route::get('/ret', function () {
    $user= User::find('1');
    return $user->roles->name;
});*/
//Route::resource ('/reception',['middleware'=>'authadmin', 'App\Http\Controllers\ReceptionController']);


Route::middleware(['auth:sanctum', 'verified', 'authdoc'])->get('/doc/dashboard', function () {
    return redirect('/doc');
   // return view('doc.dashboard');
})->name('doc.dashboard');

Route::middleware(['authdoc'])->resource('/doc','App\Http\Controllers\DoctorController');


Route::middleware(['auth:sanctum', 'verified', 'authlab'])->get('/lab/dashboard', function () {
    return redirect('/lab');
})->name('lab.dashboard');

Route::middleware(['authlab'])->resource('/lab','App\Http\Controllers\LabController');

Route::middleware(['authdoc'])->resource('/dead','App\Http\Controllers\DeadController');
Route::middleware(['authdoc'])->resource('/treat','App\Http\Controllers\TreatController');
Route::middleware(['authdoc'])->get('/result/{id}',function($id){
    $labs=LabResults::where('patient_id', $id)->paginate(1);
    return view('labResults', compact('labs'));
});





Route::middleware(['authdoc'])->get('/showxray/{id}',[App\Http\Controllers\ImageController::class, 'show']);
Route::middleware(['authdoc'])->get('/showxray/fetch/{id}',[App\Http\Controllers\ImageController::class, 'fetch']);

Route::middleware(['auth:sanctum', 'verified', 'authmin'])->get('/min/dashboard', function () {
    return redirect('/min');
   // return view('doc.dashboard');
})->name('min.dashboard');

Route::middleware(['authmin'])->resource('/min','App\Http\Controllers\MinController');

Route::middleware(['auth:sanctum', 'verified', 'authxr'])->get('/xr/dashboard', function () {
    return redirect('/xr');
   // return view('doc.dashboard');
})->name('xr.dashboard');

Route::middleware(['authxr'])->resource('/xr','App\Http\Controllers\XrayController');