<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ChangePassController;
Route::get('/', function () {

    return view('home'); //home.blade.php
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [CarController::class, 'Logout'])->name('user.logout');

Route::get('/admin/car', [CarController::class, 'CarFetch'])->name('admin.car');
Route::get('/car/add', [CarController::class, 'CarAdd'])->name('car.add');
Route::post('/store/car', [CarController::class, 'StoreCar'])->name('store.car');
Route::get('/car/edit/{id}', [CarController::class, 'Edit']);
Route::post('/car/update/{id}', [CarController::class, 'Update']);
Route::get('/car/delete/{id}', [CarController::class, 'Delete']);

// Change Password and user Profile Route
Route::get('/user/password', [ChangePassController::class, 'ChangePass'])->name('change.password');
Route::post('/password/update', [ChangePassController::class, 'UpdatePassword'])->name('password.update');


// User Profile
Route::get('/user/profile', [ChangePassController::class, 'ProfileUpdate'])->name('profile.update');
Route::post('/user/profile/update', [ChangePassController::class, 'UpdateProfile'])->name('update.user.profile');



