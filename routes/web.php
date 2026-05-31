<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KategoriPengaduanController;
use App\Http\Controllers\LaporanMasukController;
use App\Http\Controllers\GenerateReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\UserPengaduankuController;
use App\Http\Controllers\UserProfileController;




Route::get('/', function(){
    return view('pages.users.index');
});


route::get('/dashboard', [DashboardController::class, 'index']);
route::resource('/masyarakat', MasyarakatController::class);
route::resource('/pegawai', PegawaiController::class);
route::resource('/kategori', KategoriPengaduanController::class);
route::get('/laporanmasuk', [LaporanMasukController::class, 'index']);
route::get('/laporanmasuk/detail/{id}', [LaporanMasukController::class, 'detail']);
route::get('/generatereport', [GenerateReportController::class, 'index']);
route::get('/generatereport/generateperiode', [GenerateReportController::class, 'generateperiode']);
route::get('/generatereport/generaterekap', [GenerateReportController::class, 'generaterekap']);
route::get('/profile', [ProfileController::class, 'index']);
route::get('/profile/editprofile', [ProfileController::class, 'editprofile']);
Route::post('/profile/update', [ProfileController::class, 'updateprofile']);
route::get('/loginadmin', [loginAdminController::class, 'index']);

route::resource('/pengaduanku', UserPengaduankuController::class);
route::get('/profileuser', [UserProfileController::class, 'index']);

//authentication admin

Route::post('/authadmin', [loginAdminController::class, 'authadmin']);
route::any('/dataTableLaporan', [LaporanMasukController::class, 'getDataLaporan']);
