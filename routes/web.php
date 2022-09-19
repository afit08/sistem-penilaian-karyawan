<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Divisi10Controller;
use App\Http\Controllers\Divisi11Controller;
use App\Http\Controllers\Divisi12Controller;
use App\Http\Controllers\Divisi13Controller;
use App\Http\Controllers\Divisi1Controller;
use App\Http\Controllers\Divisi2Controller;
use App\Http\Controllers\Divisi3Controller;
use App\Http\Controllers\Divisi4Controller;
use App\Http\Controllers\Divisi5Controller;
use App\Http\Controllers\Divisi6Controller;
use App\Http\Controllers\Divisi7Controller;
use App\Http\Controllers\Divisi8Controller;
use App\Http\Controllers\Divisi9Controller;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TahunPenilaianController;
use App\Http\Controllers\TransaksiController;
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


Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5,6,7,8,9,10,11,12,13,14']], function(){
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/karyawan', [AdminController::class,'index'])->name('karyawan');
Route::get('/create-karyawan', [AdminController::class,'create'])->name('create-karyawan');
Route::post('/save-karyawan', [AdminController::class,'store'])->name('save-karyawan');
Route::get('/detail-karyawan/{id}', [AdminController::class,'detail'])->name('detail-karyawan');
Route::get('/edit-karyawan/{id}', [AdminController::class,'edit'])->name('edit-karyawan');
Route::post('/karyawan/update', [AdminController::class,'update'])->name('update-karyawan');
Route::get('/delete-karyawan/{id}', [AdminController::class,'destroy'])->name('delete-karyawan');
Route::post('/karyawan/import_excel', [AdminController::class,'import_excel']);
Route::get('/karyawan/export_excel', [AdminController::class,'export_excel']);

Route::get('/tahun-penilaian', [TahunPenilaianController::class,'index'])->name('tahun-penilaian');
Route::get('/create-tahun-penilaian', [TahunPenilaianController::class,'create'])->name('create-tahun-penilaian');
Route::post('/save-tahun-penilaian', [TahunPenilaianController::class,'store'])->name('save-tahun-penilaian');
Route::get('/edit-tahun-penilaian/{id}', [TahunPenilaianController::class,'edit'])->name('edit-tahun-penilaian');
Route::post('/tahun-penilaian/update', [TahunPenilaianController::class,'update'])->name('update-tahun-penilaian');
Route::get('/delete-tahun-penilaian/{id}', [TahunPenilaianController::class,'destroy'])->name('delete-tahun-penilaian');

Route::get('/kategori', [KategoriController::class,'index'])->name('kategori');
Route::get('/create-kategori', [KategoriController::class,'create'])->name('create-kategori');
Route::post('/save-kategori', [KategoriController::class,'store'])->name('save-kategori');
Route::get('/edit-kategori/{id}', [KategoriController::class,'edit'])->name('edit-kategori');
Route::post('/kategori/update', [KategoriController::class,'update'])->name('update-kategori');
Route::get('/delete-kategori/{id}', [KategoriController::class,'destroy'])->name('delete-kategori');

Route::get('/kompetensi', [KompetensiController::class,'index'])->name('kompetensi');
Route::get('/create-kompetensi', [KompetensiController::class,'create'])->name('create-kompetensi');
Route::post('/save-kompetensi', [KompetensiController::class,'store'])->name('save-kompetensi');
Route::get('/edit-kompetensi/{id}', [KompetensiController::class,'edit'])->name('edit-kompetensi');
Route::post('/kompetensi/update', [KompetensiController::class,'update'])->name('update-kompetensi');
Route::get('/delete-kompetensi/{id}', [KompetensiController::class,'destroy'])->name('delete-kompetensi');

Route::get('/rating', [RatingController::class,'index'])->name('rating');
Route::get('/create-rating', [RatingController::class,'create'])->name('create-rating');
Route::post('/save-rating', [RatingController::class,'store'])->name('save-rating');
Route::get('/edit-rating/{id}', [RatingController::class,'edit'])->name('edit-rating');
Route::post('/rating/update', [RatingController::class,'update'])->name('update-rating');
Route::get('/delete-rating/{id}', [RatingController::class,'destroy'])->name('delete-rating');

Route::get('/divisi', [DivisiController::class,'index'])->name('divisi');
Route::get('/create-divisi', [DivisiController::class,'create'])->name('create-divisi');
Route::post('/save-divisi', [DivisiController::class,'store'])->name('save-divisi');
Route::get('/edit-divisi/{id}', [DivisiController::class,'edit'])->name('edit-divisi');
Route::post('/divisi/update', [DivisiController::class,'update'])->name('update-divisi');
Route::get('/delete-divisi/{id}', [DivisiController::class,'destroy'])->name('delete-divisi');

Route::get('/mutasi', [MutasiController::class,'index'])->name('mutasi');
Route::post('/save-mutasi', [MutasiController::class,'store'])->name('save-mutasi');

Route::get('/transaksi', [TransaksiController::class,'index'])->name('transaksi');
Route::post('/save-transaksi', [TransaksiController::class,'store'])->name('save-transaksi');
Route::get('/rekap-transaksi/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi');
Route::get('/detail-rekap-transaksi/{mutasi_id}', [TransaksiController::class,'rekapp'])->name('detail-rekap-transaksi');
Route::get('/mutasi/status/{mutasi_id}/{status_code}', [TransaksiController::class, 'updateStatus'])->name('mutasi.status.update');

Route::get('/laporan', [LaporanController::class,'index'])->name('laporan');

});
Route::group(['middleware' => ['auth', 'ceklevel:2']], function(){
    Route::get('/karyawan-finance', [Divisi1Controller::class,'index'])->name('karyawan-finance');
    Route::get('/create-karyawan-finance', [Divisi1Controller::class,'create'])->name('create-karyawan-finance');
    Route::post('/save-karyawan-finance', [Divisi1Controller::class,'store'])->name('save-karyawan-finance');
    Route::get('/detail-karyawan-finance/{id}', [Divisi1Controller::class,'detail'])->name('detail-karyawan-finance');
    Route::get('/edit-karyawan-finance/{id}', [Divisi1Controller::class,'edit'])->name('edit-karyawan-finance');
    Route::post('/karyawan-finance/update', [Divisi1Controller::class,'update'])->name('update-karyawan-finance');
    Route::get('/delete-karyawan-finance/{id}', [Divisi1Controller::class,'destroy'])->name('delete-karyawan-finance');
    Route::post('/karyawan-finance/import_excel', [Divisi1Controller::class,'import_excel']);
    Route::get('/karyawan-finance/export_excel', [Divisi1Controller::class,'export_excel']);
    
    Route::get('/mutasi-finance', [MutasiController::class,'index'])->name('mutasi-finance');
    Route::get('/create-mutasi-finance', [MutasiController::class,'create'])->name('create-mutasi-finance');
    Route::post('/save-mutasi-finance', [MutasiController::class,'store'])->name('save-mutasi-finance');
    Route::get('/edit-mutasi-finance/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-finance');
    
    Route::get('/transaksi-finance', [TransaksiController::class,'index'])->name('transaksi-finance');
    Route::post('/save-transaksi-finance', [TransaksiController::class,'store'])->name('save-transaksi-finance');
    Route::get('/rekap-transaksi-finance/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-finance');
    Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
    Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
    
    Route::get('/laporan-finance', [TransaksiController::class,'laporan-finance'])->name('laporan-finance');
    Route::get('/laporan-finance-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-finance-tahun');
    });

    Route::group(['middleware' => ['auth', 'ceklevel:3']], function(){
        Route::get('/karyawan-operational', [Divisi2Controller::class,'index'])->name('karyawan-operational');
        Route::get('/create-karyawan-operational', [Divisi2Controller::class,'create'])->name('create-karyawan-operational');
        Route::post('/save-karyawan-operational', [Divisi2Controller::class,'store'])->name('save-karyawan-operational');
        Route::get('/detail-karyawan-operational/{id}', [Divisi2Controller::class,'detail'])->name('detail-karyawan-operational');
        Route::get('/edit-karyawan-operational/{id}', [Divisi2Controller::class,'edit'])->name('edit-karyawan-operational');
        Route::post('/karyawan-operational/update', [Divisi2Controller::class,'update'])->name('update-karyawan-operational');
        Route::get('/delete-karyawan-operational/{id}', [Divisi2Controller::class,'destroy'])->name('delete-karyawan-operational');
        Route::post('/karyawan-operational/import_excel', [Divisi2Controller::class,'import_excel']);
        Route::get('/karyawan-operational/export_excel', [Divisi2Controller::class,'export_excel']);
        
        Route::get('/mutasi-operational', [MutasiController::class,'index'])->name('mutasi-operational');
        Route::get('/create-mutasi-operational', [MutasiController::class,'create'])->name('create-mutasi-operational');
        Route::post('/save-mutasi-operational', [MutasiController::class,'store'])->name('save-mutasi-operational');
        Route::get('/edit-mutasi-operational/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-operational');
        
        Route::get('/transaksi-operational', [TransaksiController::class,'index'])->name('transaksi-operational');
        Route::post('/save-transaksi-operational', [TransaksiController::class,'store'])->name('save-transaksi-operational');
        Route::get('/rekap-transaksi-operational/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-operational');
        Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
        Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
        
        Route::get('/laporan-operational', [TransaksiController::class,'laporan-operational'])->name('laporan-operational');
        Route::get('/laporan-operational-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-operational-tahun');
        });

        Route::group(['middleware' => ['auth', 'ceklevel:4']], function(){

            Route::get('/karyawan-hr-and-gs-division', [Divisi3Controller::class,'index'])->name('karyawan-hr-and-gs-division');
            Route::get('/create-karyawan-hr-and-gs-division', [Divisi3Controller::class,'create'])->name('create-karyawan-hr-and-gs-division');
            Route::post('/save-karyawan-hr-and-gs-division', [Divisi3Controller::class,'store'])->name('save-karyawan-hr-and-gs-division');
            Route::get('/detail-karyawan-hr-and-gs-division/{id}', [Divisi3Controller::class,'detail'])->name('detail-karyawan-hr-and-gs-division');
            Route::get('/edit-karyawan-hr-and-gs-division/{id}', [Divisi3Controller::class,'edit'])->name('edit-karyawan-hr-and-gs-division');
            Route::post('/karyawan-hr-and-gs-division/update', [Divisi3Controller::class,'update'])->name('update-karyawan-hr-and-gs-division');
            Route::get('/delete-karyawan-hr-and-gs-division/{id}', [Divisi3Controller::class,'destroy'])->name('delete-karyawan-hr-and-gs-division');
            Route::post('/karyawan-hr-and-gs-division/import_excel', [Divisi3Controller::class,'import_excel']);
            Route::get('/karyawan-hr-and-gs-division/export_excel', [Divisi3Controller::class,'export_excel']);
            
            Route::get('/mutasi-hr-and-gs-division', [MutasiController::class,'index'])->name('mutasi-hr-and-gs-division');
            Route::get('/create-mutasi-hr-and-gs-division', [MutasiController::class,'create'])->name('create-mutasi-hr-and-gs-division');
            Route::post('/save-mutasi-hr-and-gs-division', [MutasiController::class,'store'])->name('save-mutasi-hr-and-gs-division');
            Route::get('/edit-mutasi-hr-and-gs-division/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-hr-and-gs-division');
            
            Route::get('/transaksi-hr-and-gs-division', [TransaksiController::class,'index'])->name('transaksi-hr-and-gs-division');
            Route::post('/save-transaksi-hr-and-gs-division', [TransaksiController::class,'store'])->name('save-transaksi-hr-and-gs-division');
            Route::get('/rekap-transaksi-hr-and-gs-division/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-hr-and-gs-division');
            Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
            Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
            
            Route::get('/laporan-hr-and-gs-division', [TransaksiController::class,'laporan-hr-and-gs-division'])->name('laporan-hr-and-gs-division');
            Route::get('/laporan-hr-and-gs-division-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-hr-and-gs-division-tahun');
            });        

            Route::group(['middleware' => ['auth', 'ceklevel:5']], function(){
    
                Route::get('/karyawan-2kpno', [Divisi4Controller::class,'index'])->name('karyawan-2kpno');
                Route::get('/create-karyawan-2kpno', [Divisi4Controller::class,'create'])->name('create-karyawan-2kpno');
                Route::post('/save-karyawan-2kpno', [Divisi4Controller::class,'store'])->name('save-karyawan-2kpno');
                Route::get('/detail-karyawan-2kpno/{id}', [Divisi4Controller::class,'detail'])->name('detail-karyawan-2kpno');
                Route::get('/edit-karyawan-2kpno/{id}', [Divisi4Controller::class,'edit'])->name('edit-karyawan-2kpno');
                Route::post('/karyawan-2kpno/update', [Divisi4Controller::class,'update'])->name('update-karyawan-2kpno');
                Route::get('/delete-karyawan-2kpno/{id}', [Divisi4Controller::class,'destroy'])->name('delete-karyawan-2kpno');
                Route::post('/karyawan-2kpno/import_excel', [Divisi4Controller::class,'import_excel']);
                Route::get('/karyawan-2kpno/export_excel', [Divisi4Controller::class,'export_excel']);
                
                Route::get('/mutasi-2kpno', [MutasiController::class,'index'])->name('mutasi-2kpno');
                Route::get('/create-mutasi-2kpno', [MutasiController::class,'create'])->name('create-mutasi-2kpno');
                Route::post('/save-mutasi-2kpno', [MutasiController::class,'store'])->name('save-mutasi-2kpno');
                Route::get('/edit-mutasi-2kpno/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-2kpno');
                
                Route::get('/transaksi-2kpno', [TransaksiController::class,'index'])->name('transaksi-2kpno');
                Route::post('/save-transaksi-2kpno', [TransaksiController::class,'store'])->name('save-transaksi-2kpno');
                Route::get('/rekap-transaksi-2kpno/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-2kpno');
                Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                
                Route::get('/laporan-2kpno', [TransaksiController::class,'laporan-2kpno'])->name('laporan-2kpno');
                Route::get('/laporan-2kpno-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-2kpno-tahun');
                });

                Route::group(['middleware' => ['auth', 'ceklevel:6']], function(){
        
                    Route::get('/karyawan-general', [Divisi5Controller::class,'index'])->name('karyawan-general');
                    Route::get('/create-karyawan-general', [Divisi5Controller::class,'create'])->name('create-karyawan-general');
                    Route::post('/save-karyawan-general', [Divisi5Controller::class,'store'])->name('save-karyawan-general');
                    Route::get('/detail-karyawan-general/{id}', [Divisi5Controller::class,'detail'])->name('detail-karyawan-general');
                    Route::get('/edit-karyawan-general/{id}', [Divisi5Controller::class,'edit'])->name('edit-karyawan-general');
                    Route::post('/karyawan-general/update', [Divisi5Controller::class,'update'])->name('update-karyawan-general');
                    Route::get('/delete-karyawan-general/{id}', [Divisi5Controller::class,'destroy'])->name('delete-karyawan-general');
                    Route::post('/karyawan-general/import_excel', [Divisi5Controller::class,'import_excel']);
                    Route::get('/karyawan-general/export_excel', [Divisi5Controller::class,'export_excel']);
                    
                    Route::get('/mutasi-general', [MutasiController::class,'index'])->name('mutasi-general');
                    Route::get('/create-mutasi-general', [MutasiController::class,'create'])->name('create-mutasi-general');
                    Route::post('/save-mutasi-general', [MutasiController::class,'store'])->name('save-mutasi-general');
                    Route::get('/edit-mutasi-general/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-general');
                    
                    Route::get('/transaksi-general', [TransaksiController::class,'index'])->name('transaksi-general');
                    Route::post('/save-transaksi-general', [TransaksiController::class,'store'])->name('save-transaksi-general');
                    Route::get('/rekap-transaksi-general/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-general');
                    Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                    Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                    
                    Route::get('/laporan-general', [TransaksiController::class,'laporan-general'])->name('laporan-general');
                    Route::get('/laporan-general-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-general-tahun');
                    });

                    Route::group(['middleware' => ['auth', 'ceklevel:7']], function(){
            
                        Route::get('/karyawan-it', [Divisi6Controller::class,'index'])->name('karyawan-it');
                        Route::get('/create-karyawan-it', [Divisi6Controller::class,'create'])->name('create-karyawan-it');
                        Route::post('/save-karyawan-it', [Divisi6Controller::class,'store'])->name('save-karyawan-it');
                        Route::get('/detail-karyawan-it/{id}', [Divisi6Controller::class,'detail'])->name('detail-karyawan-it');
                        Route::get('/edit-karyawan-it/{id}', [Divisi6Controller::class,'edit'])->name('edit-karyawan-it');
                        Route::post('/karyawan-it/update', [Divisi6Controller::class,'update'])->name('update-karyawan-it');
                        Route::get('/delete-karyawan-it/{id}', [Divisi6Controller::class,'destroy'])->name('delete-karyawan-it');
                        Route::post('/karyawan-it/import_excel', [Divisi6Controller::class,'import_excel']);
                        Route::get('/karyawan-it/export_excel', [Divisi6Controller::class,'export_excel']);
                        
                        Route::get('/mutasi-it', [MutasiController::class,'index'])->name('mutasi-it');
                        Route::get('/create-mutasi-it', [MutasiController::class,'create'])->name('create-mutasi-it');
                        Route::post('/save-mutasi-it', [MutasiController::class,'store'])->name('save-mutasi-it');
                        Route::get('/edit-mutasi-it/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-it');
                        
                        Route::get('/transaksi-it', [TransaksiController::class,'index'])->name('transaksi-it');
                        Route::post('/save-transaksi-it', [TransaksiController::class,'store'])->name('save-transaksi-it');
                        Route::get('/rekap-transaksi-it/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-it');
                        Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                        Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                        
                        Route::get('/laporan-it', [TransaksiController::class,'laporan-it'])->name('laporan-it');
                        Route::get('/laporan-it-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-it-tahun');
                        });

                        Route::group(['middleware' => ['auth', 'ceklevel:8']], function(){
                            Route::get('/karyawan-capem', [Divisi7Controller::class,'index'])->name('karyawan-capem');
                            Route::get('/create-karyawan-capem', [Divisi7Controller::class,'create'])->name('create-karyawan-capem');
                            Route::post('/save-karyawan-capem', [Divisi7Controller::class,'store'])->name('save-karyawan-capem');
                            Route::get('/detail-karyawan-capem/{id}', [Divisi7Controller::class,'detail'])->name('detail-karyawan-capem');
                            Route::get('/edit-karyawan-capem/{id}', [Divisi7Controller::class,'edit'])->name('edit-karyawan-capem');
                            Route::post('/karyawan-capem/update', [Divisi7Controller::class,'update'])->name('update-karyawan-capem');
                            Route::get('/delete-karyawan-capem/{id}', [Divisi7Controller::class,'destroy'])->name('delete-karyawan-capem');
                            Route::post('/karyawan-capem/import_excel', [Divisi7Controller::class,'import_excel']);
                            Route::get('/karyawan-capem/export_excel', [Divisi7Controller::class,'export_excel']);
                            
                            Route::get('/mutasi-capem', [MutasiController::class,'index'])->name('mutasi-capem');
                            Route::get('/create-mutasi-capem', [MutasiController::class,'create'])->name('create-mutasi-capem');
                            Route::post('/save-mutasi-capem', [MutasiController::class,'store'])->name('save-mutasi-capem');
                            Route::get('/edit-mutasi-capem/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-capem');
                            
                            Route::get('/transaksi-capem', [TransaksiController::class,'index'])->name('transaksi-capem');
                            Route::post('/save-transaksi-capem', [TransaksiController::class,'store'])->name('save-transaksi-capem');
                            Route::get('/rekap-transaksi-capem/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-capem');
                            Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                            Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                            
                            Route::get('/laporan-capem', [TransaksiController::class,'laporan-capem'])->name('laporan-capem');
                            Route::get('/laporan-capem-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-capem-tahun');
                            });

                            Route::group(['middleware' => ['auth', 'ceklevel:9']], function(){
                    
                                Route::get('/karyawan-hcm', [Divisi8Controller::class,'index'])->name('karyawan-hcm');
                                Route::get('/create-karyawan-hcm', [Divisi8Controller::class,'create'])->name('create-karyawan-hcm');
                                Route::post('/save-karyawan-hcm', [Divisi8Controller::class,'store'])->name('save-karyawan-hcm');
                                Route::get('/detail-karyawan-hcm/{id}', [Divisi8Controller::class,'detail'])->name('detail-karyawan-hcm');
                                Route::get('/edit-karyawan-hcm/{id}', [Divisi8Controller::class,'edit'])->name('edit-karyawan-hcm');
                                Route::post('/karyawan-hcm/update', [Divisi8Controller::class,'update'])->name('update-karyawan-hcm');
                                Route::get('/delete-karyawan-hcm/{id}', [Divisi8Controller::class,'destroy'])->name('delete-karyawan-hcm');
                                Route::post('/karyawan-hcm/import_excel', [Divisi8Controller::class,'import_excel']);
                                Route::get('/karyawan-hcm/export_excel', [Divisi8Controller::class,'export_excel']);
                                
                                Route::get('/mutasi-hcm', [MutasiController::class,'index'])->name('mutasi-hcm');
                                Route::get('/create-mutasi-hcm', [MutasiController::class,'create'])->name('create-mutasi-hcm');
                                Route::post('/save-mutasi-hcm', [MutasiController::class,'store'])->name('save-mutasi-hcm');
                                Route::get('/edit-mutasi-hcm/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-hcm');
                                
                                Route::get('/transaksi-hcm', [TransaksiController::class,'index'])->name('transaksi-hcm');
                                Route::post('/save-transaksi-hcm', [TransaksiController::class,'store'])->name('save-transaksi-hcm');
                                Route::get('/rekap-transaksi-hcm/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-hcm');
                                Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                                Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                                
                                Route::get('/laporan-hcm', [TransaksiController::class,'laporan-hcm'])->name('laporan-hcm');
                                Route::get('/laporan-hcm-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-hcm-tahun');
                                });

                                Route::group(['middleware' => ['auth', 'ceklevel:10']], function(){
                        
                                    Route::get('/karyawan-regional-jakarta2', [Divisi9Controller::class,'index'])->name('karyawan-regional-jakarta2');
                                    Route::get('/create-karyawan-regional-jakarta2', [Divisi9Controller::class,'create'])->name('create-karyawan-regional-jakarta2');
                                    Route::post('/save-karyawan-regional-jakarta2', [Divisi9Controller::class,'store'])->name('save-karyawan-regional-jakarta2');
                                    Route::get('/detail-karyawan-regional-jakarta2/{id}', [Divisi9Controller::class,'detail'])->name('detail-karyawan-regional-jakarta2');
                                    Route::get('/edit-karyawan-regional-jakarta2/{id}', [Divisi9Controller::class,'edit'])->name('edit-karyawan-regional-jakarta2');
                                    Route::post('/karyawan-regional-jakarta2/update', [Divisi9Controller::class,'update'])->name('update-karyawan-regional-jakarta2');
                                    Route::get('/delete-karyawan-regional-jakarta2/{id}', [Divisi9Controller::class,'destroy'])->name('delete-karyawan-regional-jakarta2');
                                    Route::post('/karyawan-regional-jakarta2/import_excel', [Divisi9Controller::class,'import_excel']);
                                    Route::get('/karyawan-regional-jakarta2/export_excel', [Divisi9Controller::class,'export_excel']);
                                    
                                    Route::get('/mutasi-regional-jakarta2', [MutasiController::class,'index'])->name('mutasi-regional-jakarta2');
                                    Route::get('/create-mutasi-regional-jakarta2', [MutasiController::class,'create'])->name('create-mutasi-regional-jakarta2');
                                    Route::post('/save-mutasi-regional-jakarta2', [MutasiController::class,'store'])->name('save-mutasi-regional-jakarta2');
                                    Route::get('/edit-mutasi-regional-jakarta2/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-regional-jakarta2');
                                    
                                    Route::get('/transaksi-regional-jakarta2', [TransaksiController::class,'index'])->name('transaksi-regional-jakarta2');
                                    Route::post('/save-transaksi-regional-jakarta2', [TransaksiController::class,'store'])->name('save-transaksi-regional-jakarta2');
                                    Route::get('/rekap-transaksi-regional-jakarta2/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-regional-jakarta2');
                                    Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                                    Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                                    
                                    Route::get('/laporan-regional-jakarta2', [TransaksiController::class,'laporan-regional-jakarta2'])->name('laporan-regional-jakarta2');
                                    Route::get('/laporan-regional-jakarta2-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-regional-jakarta1-tahun');
                                    });

                                    Route::group(['middleware' => ['auth', 'ceklevel:11']], function(){
                            
                                        Route::get('/karyawan-regional-jakarta1', [Divisi10Controller::class,'index'])->name('karyawan-regional-jakarta1');
                                        Route::get('/create-karyawan-regional-jakarta1', [Divisi10Controller::class,'create'])->name('create-karyawan-regional-jakarta1');
                                        Route::post('/save-karyawan-regional-jakarta1', [Divisi10Controller::class,'store'])->name('save-karyawan-regional-jakarta1');
                                        Route::get('/detail-karyawan-regional-jakarta1/{id}', [Divisi10Controller::class,'detail'])->name('detail-karyawan-regional-jakarta1');
                                        Route::get('/edit-karyawan-regional-jakarta1/{id}', [Divisi10Controller::class,'edit'])->name('edit-karyawan-regional-jakarta1');
                                        Route::post('/karyawan-regional-jakarta1/update', [Divisi10Controller::class,'update'])->name('update-karyawan-regional-jakarta1');
                                        Route::get('/delete-karyawan-regional-jakarta1/{id}', [Divisi10Controller::class,'destroy'])->name('delete-karyawan-regional-jakarta1');
                                        Route::post('/karyawan-regional-jakarta1/import_excel', [Divisi10Controller::class,'import_excel']);
                                        Route::get('/karyawan-regional-jakarta1/export_excel', [Divisi10Controller::class,'export_excel']);
                                        
                                        Route::get('/mutasi-regional-jakarta1', [MutasiController::class,'index'])->name('mutasi-regional-jakarta1');
                                        Route::get('/create-mutasi-regional-jakarta1', [MutasiController::class,'create'])->name('create-mutasi-regional-jakarta1');
                                        Route::post('/save-mutasi-regional-jakarta1', [MutasiController::class,'store'])->name('save-mutasi-regional-jakarta1');
                                        Route::get('/edit-mutasi-regional-jakarta1/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-regional-jakarta1');
                                        
                                        Route::get('/transaksi-regional-jakarta1', [TransaksiController::class,'index'])->name('transaksi-regional-jakarta1');
                                        Route::post('/save-transaksi-regional-jakarta1', [TransaksiController::class,'store'])->name('save-transaksi-regional-jakarta1');
                                        Route::get('/rekap-transaksi-regional-jakarta1/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-regional-jakarta1');
                                        Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                                        Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                                        
                                        Route::get('/laporan-regional-jakarta1', [TransaksiController::class,'laporan-regional-jakarta1'])->name('laporan-regional-jakarta1');
                                        Route::get('/laporan-regional-jakarta1-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-regional-jakarta1-tahun');
                                        });

                                        Route::group(['middleware' => ['auth', 'ceklevel:12']], function(){
                                
                                            Route::get('/karyawan-prfs', [Divisi11Controller::class,'index'])->name('karyawan-prfs');
                                            Route::get('/create-karyawan-prfs', [Divisi11Controller::class,'create'])->name('create-karyawan-prfs');
                                            Route::post('/save-karyawan-prfs', [Divisi11Controller::class,'store'])->name('save-karyawan-prfs');
                                            Route::get('/detail-karyawan-prfs/{id}', [Divisi11Controller::class,'detail'])->name('detail-karyawan-prfs');
                                            Route::get('/edit-karyawan-prfs/{id}', [Divisi11Controller::class,'edit'])->name('edit-karyawan-prfs');
                                            Route::post('/karyawan-prfs/update', [Divisi11Controller::class,'update'])->name('update-karyawan-prfs');
                                            Route::get('/delete-karyawan-prfs/{id}', [Divisi11Controller::class,'destroy'])->name('delete-karyawan-prfs');
                                            Route::post('/karyawan-prfs/import_excel', [Divisi11Controller::class,'import_excel']);
                                            Route::get('/karyawan-prfs/export_excel', [Divisi11Controller::class,'export_excel']);
                                            
                                            Route::get('/mutasi-prfs', [MutasiController::class,'index'])->name('mutasi-prfs');
                                            Route::get('/create-mutasi-prfs', [MutasiController::class,'create'])->name('create-mutasi-prfs');
                                            Route::post('/save-mutasi-prfs', [MutasiController::class,'store'])->name('save-mutasi-prfs');
                                            Route::get('/edit-mutasi-prfs/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-prfs');
                                            
                                            Route::get('/transaksi-prfs', [TransaksiController::class,'index'])->name('transaksi-prfs');
                                            Route::post('/save-transaksi-prfs', [TransaksiController::class,'store'])->name('save-transaksi-prfs');
                                            Route::get('/rekap-transaksi-prfs/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-prfs');
                                            Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                                            Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                                            
                                            Route::get('/laporan-prfs', [TransaksiController::class,'laporan-prfs'])->name('laporan-prfs');
                                            Route::get('/laporan-prfs-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-prfs-tahun');
                                            });

                                            Route::group(['middleware' => ['auth', 'ceklevel:13']], function(){
                                    
                                                Route::get('/karyawan-special-division', [Divisi12Controller::class,'index'])->name('karyawan-special-division');
                                                Route::get('/create-karyawan-special-division', [Divisi12Controller::class,'create'])->name('create-karyawan-special-division');
                                                Route::post('/save-karyawan-special-division', [Divisi12Controller::class,'store'])->name('save-karyawan-special-division');
                                                Route::get('/detail-karyawan-special-division/{id}', [Divisi12Controller::class,'detail'])->name('detail-karyawan-special-division');
                                                Route::get('/edit-karyawan-special-division/{id}', [Divisi12Controller::class,'edit'])->name('edit-karyawan-special-division');
                                                Route::post('/karyawan-special-division/update', [Divisi12Controller::class,'update'])->name('update-karyawan-special-division');
                                                Route::get('/delete-karyawan-special-division/{id}', [Divisi12Controller::class,'destroy'])->name('delete-karyawan-special-division');
                                                Route::post('/karyawan-special-division/import_excel', [Divisi12Controller::class,'import_excel']);
                                                Route::get('/karyawan-special-division/export_excel', [Divisi12Controller::class,'export_excel']);
                                                
                                                Route::get('/mutasi-special-division', [MutasiController::class,'index'])->name('mutasi-special-division');
                                                Route::get('/create-mutasi-special-division', [MutasiController::class,'create'])->name('create-mutasi-special-division');
                                                Route::post('/save-mutasi-special-division', [MutasiController::class,'store'])->name('save-mutasi-special-division');
                                                Route::get('/edit-mutasi-special-division/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-special-division');
                                                
                                                Route::get('/transaksi-special-division', [TransaksiController::class,'index'])->name('transaksi-special-division');
                                                Route::post('/save-transaksi-special-division', [TransaksiController::class,'store'])->name('save-transaksi-special-division');
                                                Route::get('/rekap-transaksi-special-division/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-special-division');
                                                Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                                                Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                                                
                                                Route::get('/laporan-special-division', [TransaksiController::class,'laporan-special-division'])->name('laporan-special-division');
                                                Route::get('/laporan-special-division-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-special-division-tahun');
                                                });

                                                Route::group(['middleware' => ['auth', 'ceklevel:14']], function(){
                                        
                                                    Route::get('/karyawan-personnel', [Divisi13Controller::class,'index'])->name('karyawan-personnel');
                                                    Route::get('/create-karyawan-personnel', [Divisi13Controller::class,'create'])->name('create-karyawan-personnel');
                                                    Route::post('/save-karyawan-personnel', [Divisi13Controller::class,'store'])->name('save-karyawan-personnel');
                                                    Route::get('/detail-karyawan-personnel/{id}', [Divisi13Controller::class,'detail'])->name('detail-karyawan-personnel');
                                                    Route::get('/edit-karyawan-personnel/{id}', [Divisi13Controller::class,'edit'])->name('edit-karyawan-personnel');
                                                    Route::post('/karyawan-personnel/update', [Divisi13Controller::class,'update'])->name('update-karyawan-personnel');
                                                    Route::get('/delete-karyawan-personnel/{id}', [Divisi13Controller::class,'destroy'])->name('delete-karyawan-personnel');
                                                    Route::post('/karyawan-personnel/import_excel', [Divisi13Controller::class,'import_excel']);
                                                    Route::get('/karyawan-personnel/export_excel', [Divisi13Controller::class,'export_excel']);
                                                    
                                                    Route::get('/mutasi-personnel', [MutasiController::class,'index'])->name('mutasi-personnel');
                                                    Route::get('/create-mutasi-personnel', [MutasiController::class,'create'])->name('create-mutasi-personnel');
                                                    Route::post('/save-mutasi-personnel', [MutasiController::class,'store'])->name('save-mutasi-personnel');
                                                    Route::get('/edit-mutasi-personnel/{id}', [MutasiController::class,'edit'])->name('edit-mutasi-personnel');
                                                    
                                                    Route::get('/transaksi-personnel', [TransaksiController::class,'index'])->name('transaksi-personnel');
                                                    Route::post('/save-transaksi-personnel', [TransaksiController::class,'store'])->name('save-transaksi-personnel');
                                                    Route::get('/rekap-transaksi-personnel/{mutasi_id}', [TransaksiController::class,'rekap'])->name('rekap-transaksi-personnel');
                                                    Route::get('/create-table', [TransaksiController::class,'create'])->name('create-table');
                                                    Route::post('/save-table', [TransaksiController::class,'stored'])->name('save-table');
                                                    
                                                    Route::get('/laporan-personnel', [TransaksiController::class,'laporan-personnel'])->name('laporan-personnel');
                                                    Route::get('/laporan-personnel-tahun/{tahun}', [TransaksiController::class,'tahun'])->name('laporan-personnel-tahun');
                                                    }); 

Route::get('/login', function(){
    return view('admin.login');
})->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/register', [LoginController::class,'registrasi'])->name('register');
Route::post('/simpanregistrasi', [LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');