<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RilisController;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('rilis', [App\Http\Controllers\RilisController::class, 'index']);

Route::resource('home', 'App\Http\Controllers\HomeController');
Route::resource('/', 'App\Http\Controllers\WebViewController');
// Route::get('/index', 'App\Http\Controllers\WebViewController@index');
Route::get('/dashboard', 'App\Http\Controllers\WebViewController@DashboardAdminPanel')->name('Dashboard');

Route::resource('profil', 'App\Http\Controllers\ProfilController');
Route::resource('staf', 'App\Http\Controllers\StafController');
Route::get('staf-ynki', 'App\Http\Controllers\WebViewController@Staf')->name('StafYnki');
Route::get('detail-staf/{id}', 'App\Http\Controllers\WebViewController@DetailStaf')->name('DetailStaf');
Route::resource('partner', 'App\Http\Controllers\PartnerController');

Route::resource('program-lanskap', 'App\Http\Controllers\ProgramLanskapController');
Route::resource('komoditas-masyarakat', 'App\Http\Controllers\KomoditasMasyarakatController');
Route::resource('kebijakan-keberlanjutan', 'App\Http\Controllers\KebijakanKeberlanjutanController');

Route::resource('pemulihan-lingkungan', 'App\Http\Controllers\PemulihanLingkunganController');
Route::resource('psem', 'App\Http\Controllers\PSEMController');
Route::resource('rehabilitasi-dan-restorasi', 'App\Http\Controllers\RehabilitasiDanRestorasiController');
Route::resource('advokasi-kebijakan', 'App\Http\Controllers\AdvokasiKebijakanController');

Route::resource('rilis', 'App\Http\Controllers\RilisController');
Route::get('/list-rilis', 'App\Http\Controllers\WebViewController@ListRilis')->name('ListRilis');
Route::get('/detail-rilis/{id}', 'App\Http\Controllers\WebViewController@DetailRilis')->name('DetailRilis');
Route::resource('opini', 'App\Http\Controllers\OpiniController');
Route::resource('kabar-dari-lapangan', 'App\Http\Controllers\KabarDariLapanganController');

Route::resource('karir', 'App\Http\Controllers\KarirController');
Route::resource('program-magang', 'App\Http\Controllers\ProgramMagangController');
Route::resource('ikut-terlibat', 'App\Http\Controllers\IkutTerlibatController');

Route::resource('kontak-kami', 'App\Http\Controllers\KontakKamiController');
