<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EcocareController;

use App\Http\Controllers\AppDetailController;
use Illuminate\Routing\Route as RoutingRoute;

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
    // return view('welcome');
    $applications = DB::table('app_app')->get();
    // $applications = DB::table('app_fd_purchase_request')->get();
    $request = DB::table('tbl_customer')->get();
    // var_dump($request);
        //  var_dump($applications);
    return view('/layouts/master', [
        'applications' => $applications, 
        'request' => $request,
        EcocareController::class, 'index'
        ]);
    // return view('welcome', ['applications' => $applications]);
});
Route::get('/list', [EcocareController::class, 'getApps'])->name('app_app.list');


Route::resource('customsearch', 'CustomSearchController');
// Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

// Route::get('/', function () {
//     return view('welcome');
// });

//ECOCARE JWDB
Route::get('ecocare', [EcocareController::class, 'index']);
Route::get('ecocare/list', [EcocareController::class, 'getApps'])->name('app_app.list');

//ECOTEST
// Route::get('ecotest', [ AppDetailController::class, 'index' ]);
// Route::get('ecotest', 'App\Http\Controllers\AppDetailController@index');
// Route::get('ecotest', 'App\Http\Controllers\AppDetailController@getApps')
//     ->name('app_app.list');
// Route::get('ecotest/list', [ AppDetailController::class, 'getApps'])
// Route::get('ecotest/list', [AppDetailController::class, 'getApps'])->name('app_app.list');


// Route::get('students', [StudentController::class, 'index']);
// Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

Route::get('appDetail', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_advance_finance')->get();
        //  var_dump($applications);
    return view('/layouts/appDetail', ['applications' => $applications]);
});
// Route::get('appDetaild', [ AppDetailController::class, 'index']);
// Route::get('appDetail/list', [ AppDetailController::class, 'getApps'])->name('app_app.list');


Route::get('/af', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_advance_finance')->get();
        //  var_dump($applications);
    return view('/layouts/af', ['applications' => $applications]);
});

Route::get('/bkes', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_bpjs_kesehatan')->get();
        //  var_dump($applications);
    return view('/layouts/bkes', ['applications' => $applications]);
});

Route::get('/bket', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_bpjs_ketenagakerja')->get();
        //  var_dump($applications);
    return view('/layouts/bket', ['applications' => $applications]);
});

Route::get('/rc', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_cuti')->get();
        //  var_dump($applications);
    return view('/layouts/rc', ['applications' => $applications]);
});

Route::get('/da', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_destroy_asset')->get();
        //  var_dump($applications);
    return view('/layouts/da', ['applications' => $applications]);
});

Route::get('/ma', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_movement_asset')->get();
        //  var_dump($applications);
    return view('/layouts/ma', ['applications' => $applications]);
});

Route::get('/pc', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_pengiriman_cabang')->get();
        //  var_dump($applications);
    return view('/layouts/pc', ['applications' => $applications]);
});

Route::get('/gdf', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_pengiriman_regular')->get();
        //  var_dump($applications);
    return view('/layouts/gdf', ['applications' => $applications]);
});

Route::get('/pa', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_penjualan_asset')->get();
        //  var_dump($applications);
    return view('/layouts/pa', ['applications' => $applications]);
});

Route::get('/pd', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_perjalanan_dinas')->get();
        //  var_dump($applications);
    return view('/layouts/pd', ['applications' => $applications]);
});

Route::get('/pk', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_permintaankaryawan')->get();
        //  var_dump($applications);
    return view('/layouts/pk', ['applications' => $applications]);
});

Route::get('/pcf', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_pettycash')->get();
        //  var_dump($applications);
    return view('/layouts/pcf', ['applications' => $applications]);
});

Route::get('/pr', function () {
    // return view('welcome');
    $applications = DB::table('app_fd_purchase_request')->get();
        //  var_dump($applications);
    return view('/layouts/pr', ['applications' => $applications]);
});

// Route::get('/', function () {
//     // return view('welcome');
//     $applications = DB::table('app_app')->get();
//         //  var_dump($applications);
//     return view('/layouts/master', ['applications' => $applications]);
// });
