<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MyHomeController;
use App\Http\Controllers\Admin\MediaController;




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
    return view('home');
});
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registration', [MemberController::class, 'Membercreate']);
Route::post('api/fetch-cities', [MemberController::class, 'fetchCity']);
Route::resource('members', MemberController::class);
Route::get('member/admin/all-member', [MemberController::class, "indexAdmin"]);

Route::delete('delete-member/{id}', [MemberController::class, 'destroy']);

Route::post('login-pin', [LoginController::class, "pincode"])->name("login-pin");
// Route::post('/loginuser', 'LoginController@authenticate');
Route::get('/validate-email','MemberController@validateuseremail');

Route::get('/fronthome', [MyHomeController::class, "index"]);
Route::get('/media', [MyHomeController::class, "media"]);
Route::get('/donate', [MyHomeController::class, "donate"]);
Route::get('/contact', [MyHomeController::class, "contactUs"]);
Route::get('/about', [MyHomeController::class, "about"]);
Route::get('/gallery', [MyHomeController::class, "gallery"]);
Route::get('/services', [MyHomeController::class, "services"]);
Route::get('/teams', [MyHomeController::class, "team"]);
Route::get('/projects', [MyHomeController::class, "project"]);
Route::get('/groups', [MyHomeController::class, "group"]);
Route::get('/media/{id}/', [MyHomeController::class, 'show']);



Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::delete('delete-user/{id}', [UserController::class, 'destroy']);
 
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('products', ProductController::class);
    
    Route::get('state/admin', [UserController::class, 'stateAdmin']);
    Route::get('district/admin', [UserController::class, 'districtadmin']);
    Route::get('block/admin', [UserController::class, 'blockadmin']);
    Route::get('punchayat/admin', [UserController::class, 'puchayatadmin']);
    Route::get('village/admin', [UserController::class, 'villageadmin']);

    Route::get('dist/urban/admin', [UserController::class, 'distUrbanAdmin']);
    Route::get('dist/rural/admin', [UserController::class, 'distRuralAdmin']);
    Route::get('block/urban/admin', [UserController::class, 'blockurbanAdmin']);
    Route::get('block/rural/admin', [UserController::class, 'blockRuralAdmin']);
    Route::get('/member/active/{id}/', [MemberController::class, 'membershow']);
    // Route::get('/member/active/{id}/', 'MemberController@membershow');
    Route::get('/approve/{id}', [App\Http\Controllers\MemberController::class, 'approve'])->name('admin.approve');
    Route::get('/approve/{id}', [App\Http\Controllers\UserController::class, 'approve'])->name('admin.approve');

    Route::get('export', [UserController::class, "export"])->name("export");
    Route::get('exports', [MemberController::class, "export"])->name("exports");

    Route::resource('medias', MediaController::class);



});
