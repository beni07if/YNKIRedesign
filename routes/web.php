<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RilisController;

// use App\Http\Controllers\ProgramLanskapController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

Route::any('/register', [App\Http\Controllers\HomeController::class, 'index']);
// Auth::routes([
//     'register' => false, // Regisster Route
//     'reset' => false, // Reset Password Route
//     'verify' => false, // Email Verification Route
// ]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('rilis', [App\Http\Controllers\RilisController::class, 'index']);

Route::resource('home', 'App\Http\Controllers\HomeController');
Route::resource('/', 'App\Http\Controllers\WebViewController');
Route::get('/index', 'App\Http\Controllers\WebViewController@index');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@DashboardAdminPanel')->name('Dashboard');
Route::post('/change-password', 'App\Http\Controllers\HomeController@ChangePasswordSubmit')->name('ChangePasswordSubmit');

Route::resource('profil', 'App\Http\Controllers\ProfilController');
Route::resource('staf', 'App\Http\Controllers\StafController');
Route::get('staf-ynki', 'App\Http\Controllers\WebViewController@Staf')->name('StafYnki');
Route::get('detail-staf/{id}', 'App\Http\Controllers\WebViewController@DetailStaf')->name('DetailStaf');
Route::resource('partner', 'App\Http\Controllers\PartnerController');
Route::resource('mitra', 'App\Http\Controllers\MitraKerjaController');

// Route::resource('program-lanskap', 'App\Http\Controllers\ProgramLanskapController');
// Route::resource('komoditas-masyarakat', 'App\Http\Controllers\KomoditasMasyarakatController');
// Route::resource('kebijakan-keberlanjutan', 'App\Http\Controllers\KebijakanKeberlanjutanController');

// Route::resource('pemulihan-lingkungan', 'App\Http\Controllers\PemulihanLingkunganController');
// Route::resource('psem', 'App\Http\Controllers\PSEMController');
// Route::resource('rehabilitasi-dan-restorasi', 'App\Http\Controllers\RehabilitasiDanRestorasiController');
// Route::resource('advokasi-kebijakan', 'App\Http\Controllers\AdvokasiKebijakanController');
Route::resource('ProgramStrategi', 'App\Http\Controllers\ProgramStrategiController');
Route::get('/list-program-strategi', 'App\Http\Controllers\WebViewController@ListProgramStrategi')->name('ListProgramStrategi');
Route::get('/list-program-strategi/{id}', 'App\Http\Controllers\WebViewController@ListProgramStrategi')->name('DetailListProgramStrategi');

Route::resource('rilis', 'App\Http\Controllers\RilisController');
Route::get('/list-rilis', 'App\Http\Controllers\WebViewController@ListRilis')->name('ListRilis');
Route::get('/detail-rilis/{id}', 'App\Http\Controllers\WebViewController@DetailRilis')->name('DetailRilis');
Route::resource('opini', 'App\Http\Controllers\OpiniController');
Route::get('/list-opini', 'App\Http\Controllers\WebViewController@ListOpini')->name('ListOpini');
Route::get('/detail-opini/{id}', 'App\Http\Controllers\WebViewController@DetailOpini')->name('DetailOpini');
Route::resource('kabar-dari-lapangan', 'App\Http\Controllers\KabarDariLapanganController');
Route::get('/list-kabar-dari-lapangan', 'App\Http\Controllers\WebViewController@ListKabarDariLapangan')->name('ListKabarDariLapangan');
Route::get('/detail-kabar-dari-lapangan/{id}', 'App\Http\Controllers\WebViewController@DetailKabarDariLapangan')->name('DetailKabarDariLapangan');
Route::get('/forest-peatland-landuse-monitoring', 'App\Http\Controllers\FPLMController@index')->name('fplm');
Route::get('/forest-peatland-landuse-monitoring/{id}', 'App\Http\Controllers\FPLMController@detailFplm')->name('detailFplm');

// Route::resource('karir', 'App\Http\Controllers\KarirController');
// Route::resource('program-magang', 'App\Http\Controllers\ProgramMagangController');
// Route::resource('ikut-terlibat', 'App\Http\Controllers\IkutTerlibatController');

Route::resource('pesan', 'App\Http\Controllers\KontakKamiController');
Route::get('/kontak-kami', 'App\Http\Controllers\WebViewController@KontakKami')->name('KontakKami');
Route::post('/kirim-pesan', 'App\Http\Controllers\WebViewController@KirimPesan')->name('KirimPesan');

Route::get('/postingan-ynki', 'App\Http\Controllers\RilisController@PostinganYNKI')->name('PostinganYNKI');
Route::get('/profil-user', 'App\Http\Controllers\RilisController@Profil')->name('ProfilUser');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
