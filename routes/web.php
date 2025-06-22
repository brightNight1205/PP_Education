<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\FavoriteController;    
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\ContactController;


Route::get('/', [UniversityController::class, 'index'])->name('home');

// homepage 
Route::get('/dashboard', function () {
    return view('HomePage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/university/{universityId}/stats', [UniversityController::class, 'getStats'])->name('university.stats');

// Route::get('/home', function () {
//     return redirect()->route('dashboard');
// })->name('home');

// Route::get('/', function () {
//     return view('HomePage');
// })->name('home');

// General Pages
Route::get('/AboutUs', fn() => view('AboutUs'))->name('aboutus');

// University Pages
Route::get('/Rupp', fn() => view('RUPP'))->name('rupp');
Route::get('/ITC', fn() => view('ITC'))->name('itc');
Route::get('/CADT', fn() => view('CADT'))->name('cadt');
Route::get('/Rule', fn() => view('RULE'))->name('rule');
Route::get('/AEU', fn() => view('AEU'))->name('aeu');

// Degree Program Pages
Route::get('/Master', fn() => view('Master'))->name('master');
Route::get('/DocP', fn() => view('DoctoralProgram'))->name('doctoral');

// Doctoral Programs
Route::get('/DC_AEU', fn() => view('DC_AEU'))->name('dc_aeu');
Route::get('/DC_ITC', fn() => view('DC_ICT'))->name('dc_itc');
Route::get('/DC_RUPP', fn() => view('Doctoral_RUPP'))->name('dc_rupp');

// Master's Programs by University
Route::get('/M_AEU', fn() => view('Master_of_AEU'))->name('m_aeu');
Route::get('/M_CADT', fn() => view('Master_of_CADT'))->name('m_cadt');
Route::get('/M_ITC', fn() => view('Master_of_ITC'))->name('m_itc');
Route::get('/M_RULE', fn() => view('Master_of_RULE'))->name('m_rule');
Route::get('/M_RUPP', fn() => view('Master_of_RUPP'))->name('m_rupp');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/feedback', fn() => view('feedback'))->name('feedback');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

    Route::get('/contact', [ContactUSController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactUSController::class, 'store'])->name('contact.store');
    Route::get('/majors/{universityId}', [ContactUSController::class, 'getMajors'])->name('contact.getMajors');

    Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');
    Route::get('/ratings/status/{universityId}', [RatingController::class, 'status'])->name('ratings.status');

    Route::post('/favorites/toggle', [FavoriteController::class, 'toggle'])->name('favorites.toggle');
    Route::get('/favorites/status/{universityId}', [FavoriteController::class, 'status'])->name('favorites.status');
});

require __DIR__.'/auth.php';