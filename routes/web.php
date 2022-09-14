<?php

use App\Http\Controllers\Admin\AlumniAwardController;
use App\Http\Controllers\Admin\BeritaKelautanController;
use App\Http\Controllers\Admin\CeritaAlumniController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\GaleriIsla;
use App\Http\Controllers\Admin\GaleriIslaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JumbotronController;
use App\Http\Controllers\Admin\LokerController;
use App\Http\Controllers\Admin\NasionalController;
use App\Http\Controllers\Admin\OpiniController;
use App\Http\Controllers\Admin\PengurusWilayahController;
use App\Http\Controllers\Admin\PimpinanController;
use App\Http\Controllers\Admin\RegionalController;
use App\Http\Controllers\Admin\StrukturMpoController;
use App\Http\Controllers\Admin\StrukturOrganisasiController;
use App\Models\GaleriIsla as ModelsGaleriIsla;
use App\Models\StrukturMpo;
use App\Models\StrukturOrganisasi;

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
    return redirect()->route('jumbotron');
});

Route::group(['prefix' => 'admin'], function () {
    //dashboard
    Route::get('/jumbotron', [JumbotronController::class, 'index'])->name('jumbotron');
    Route::get('/tambahdata', [JumbotronController::class, 'create'])->name('tambahdatajumbotron');
    Route::post('/tambahdata', [JumbotronController::class, 'store'])->name('savedatajumbotron');
    Route::get('/editdata/{id}', [JumbotronController::class, 'edit'])->name('editdatajumbotron');
    Route::post('/editdata/{id}', [JumbotronController::class, 'update'])->name('updatedatajumbotron');    
    Route::get('/deletedata/{id}', [JumbotronController::class, 'delete'])->name('deletedatajumbotron');
    
    //#profile
    //pimpinan
    Route::get('/pimpinanIsla', [PimpinanController::class, 'index'])->name('pimpinan');
    Route::get('/tambahPimpinan', [PimpinanController::class,'create'])->name('tambahpimpinan');
    Route::post('/tambahPimpinan', [PimpinanController::class,'store'])->name('savedpimpinan');
    Route::get('/editPimpinan/{id}', [PimpinanController::class,'edit'])->name('editpimpinan');
    Route::post('/editPimpinan/{id}', [PimpinanController::class,'update'])->name('updatepimpinan');
    Route::get('/deletePimpinan/{id}', [PimpinanController::class,'destroy'])->name('deletepimpinan');
    
    //MPO
    Route::get('/strukturMpo', [StrukturMpoController::class, 'index'])->name('mpo');
    Route::get('/tambahMpo', [StrukturMpoController::class, 'create'])->name('tambahmpo');
    Route::post('/tambahMpo', [StrukturMpoController::class, 'store'])->name('savedmpo');
    Route::get('/editMpo/{id}', [StrukturMpoController::class, 'edit'])->name('editmpo');
    Route::post('/editMpo/{id}', [StrukturMpoController::class, 'update'])->name('updatempo');
    Route::get('/deleteMpo/{id}', [StrukturMpoController::class, 'destroy'])->name('deletempo');
    
    //struktur organisasi
    Route::get('/strukturOrganisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur');
    Route::get('/tambahStruktur', [StrukturOrganisasiController::class, 'create'])->name('tambahstruktur');
    Route::post('/tambahStruktur', [StrukturOrganisasiController::class, 'store'])->name('savedstruktur');    
    Route::get('/editStruktur/{id}', [StrukturOrganisasiController::class, 'edit'])->name('editstruktur');
    Route::post('/editStruktur/{id}', [StrukturOrganisasiController::class, 'update'])->name('updatestruktur');
    Route::get('/deleteStruktur/{id}', [StrukturOrganisasiController::class, 'destroy'])->name('deletestruktur');
    
    //pengurus Wilayah
    Route::get('/pengurusWilayah', [PengurusWilayahController::class, 'index'])->name('pengurus');
    Route::get('/tambahpengurus', [PengurusWilayahController::class, 'create'])->name('tambahpengurus');
    Route::post('/tambahpengurus', [PengurusWilayahController::class, 'store'])->name('savedpengurus');
    Route::get('/editpengurus/{id}', [PengurusWilayahController::class, 'edit'])->name('editpengurus');
    Route::post('/editpengurus/{id}', [PengurusWilayahController::class, 'update'])->name('updatepengurus');
    Route::get('/deletepengurus/{id}', [PengurusWilayahController::class, 'destroy'])->name('deletepengurus');

    //#Klanews
    //berita kelautan
    Route::get('/beritaKelautan', [BeritaKelautanController::class, 'index'])->name('berita');
    Route::get('/tambahBerita', [BeritaKelautanController::class, 'create'])->name('tambahberita');
    Route::post('/tambahBerita', [BeritaKelautanController::class, 'store'])->name('savedberita');
    Route::get('/editBerita/{id}', [BeritaKelautanController::class, 'edit'])->name('editberita');
    Route::post('/updateBerita/{id}', [BeritaKelautanController::class, 'update'])->name('updateberita');
    Route::get('/deleteBerita/{id}', [BeritaKelautanController::class, 'destroy'])->name('deleteberita');

    //opini
    Route::get('/opiniMahasiswa', [OpiniController::class, 'index'])->name('opini');
    Route::get('/tambahOpini', [OpiniController::class, 'create'])->name('tambahopini');
    Route::post('/tambahOpini', [OpiniController::class, 'store'])->name('savedopini');
    Route::get('/editOpini/{id}', [OpiniController::class, 'edit'])->name('editopini');
    Route::post('/editOpini/{id}', [OpiniController::class, 'update'])->name('updateopini');
    Route::get('/deleteOpini/{id}', [OpiniController::class, 'destroy'])->name('deleteopini');

    //loker
    Route::get('/infoLoker', [LokerController::class, 'index'])->name('loker');
    Route::get('/tambahLoker', [LokerController::class, 'create'])->name('tambahloker');
    Route::post('/tambahLoker', [LokerController::class, 'store'])->name('savedloker');
    Route::get('/editLoker/{id}', [LokerController::class, 'edit'])->name('editloker');
    Route::post('/editLoker/{id}', [LokerController::class, 'update'])->name('updateloker');
    Route::get('/deleteLoker/{id}', [LokerController::class, 'destroy'])->name('deleteloker');

    //#proker
    //nasional
    Route::get('/prokernasional', [NasionalController::class, 'index'])->name('nasional');
    Route::get('/tambahnasional', [NasionalController::class, 'create'])->name('tambahnasional');
    Route::post('/tambahnasional', [NasionalController::class, 'store'])->name('savednasional');
    Route::get('/editnasional/{id}', [NasionalController::class, 'edit'])->name('editnasional');
    Route::post('/editnasional/{id}', [NasionalController::class, 'update'])->name('updatenasional');
    Route::get('/deletenasional/{id}', [NasionalController::class, 'destroy'])->name('deletenasional');
    
    //regional
    Route::get('/prokerregional', [RegionalController::class, 'index'])->name('regional');
    Route::get('/tambahregional', [RegionalController::class, 'create'])->name('tambahregional');
    Route::post('/tambahregional', [RegionalController::class, 'store'])->name('savedregional');
    Route::get('/editregional/{id}', [RegionalController::class, 'edit'])->name('editregional');
    Route::post('/editregional/{id}', [RegionalController::class, 'update'])->name('updateregional');
    Route::get('/deleteregional/{id}', [RegionalController::class, 'destroy'])->name('deleteregional');
    
    //#Alumni
    //alumni award
    Route::get('/alumniAward', [AlumniAwardController::class, 'index'])->name('alumni');
    Route::get('/tambahAlumni', [AlumniAwardController::class, 'create'])->name('tambahaward');
    Route::post('/tambahAlumni', [AlumniAwardController::class, 'store'])->name('savedaward');
    Route::get('/editAlumni/{id}', [AlumniAwardController::class, 'edit'])->name('editaward');
    Route::post('/editAlumni/{id}', [AlumniAwardController::class, 'update'])->name('updateaward');
    Route::get('/deleteAlumni/{id}', [AlumniAwardController::class, 'destroy'])->name('deleteaward');
    
    //Galeri Isla
    Route::get('/galeriIslah', [GaleriIslaController::class, 'index'])->name('galeri');
    Route::get('/tambahGaleri', [GaleriIslaController::class, 'create'])->name('tambahgaleri');
    Route::post('/tambahGaleri', [GaleriIslaController::class, 'store'])->name('savedgaleri');
    Route::get('/editGaleri/{id}', [GaleriIslaController::class, 'edit'])->name('editgaleri');
    Route::post('/editGaleri/{id}', [GaleriIslaController::class, 'update'])->name('updategaleri');
    Route::get('/deleteGaleri/{id}', [GaleriIslaController::class, 'destroy'])->name('deletegaleri');

    //cerita alumni
    Route::get('/ceritaAlumni', [CeritaAlumniController::class, 'index'])->name('cerita');
    Route::get('/tambahCerita', [CeritaAlumniController::class, 'create'])->name('tambahcerita');
    Route::post('/tambahCerita', [CeritaAlumniController::class, 'store'])->name('savedcerita');
    Route::get('/editCerita/{id}', [CeritaAlumniController::class, 'edit'])->name('editcerita');
    Route::post('/editCerita/{id}', [CeritaAlumniController::class, 'update'])->name('updatecerita');
    Route::get('/deleteCerita/{id}', [CeritaAlumniController::class, 'destroy'])->name('deletecerita');
    
    //Document
    Route::get('/document', [DocumentController::class, 'index'])->name('document');
    Route::get('/tambahDocument', [DocumentController::class, 'create'])->name('tambahdocument');
    Route::post('/tambahDocument', [DocumentController::class, 'store'])->name('saveddocument');
    Route::get('/editDocument/{id}', [DocumentController::class, 'edit'])->name('editdocument');
    Route::post('/editDocument/{id}', [DocumentController::class, 'update'])->name('updatedocument');
    Route::get('/deleteDocument/{id}', [DocumentController::class, 'destroy'])->name('deletedocument');
    
    //Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/tambahContact', [ContactController::class, 'create'])->name('tambahcontact');
    Route::post('/tambahContact', [ContactController::class, 'store'])->name('savedcontact');
    Route::get('/editContact/{id}', [ContactController::class, 'edit'])->name('editcontact');
    Route::post('/editContact/{id}', [ContactController::class, 'update'])->name('updatecontact');
    Route::get('/deleteContact/{id}', [ContactController::class, 'destroy'])->name('deletecontact');
});

// route::get('/login', [admincontroler::class, 'login'])->name('login');