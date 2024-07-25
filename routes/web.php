<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlownyController;
use App\Http\Controllers\PomocniczyController;
use App\Http\Controllers\WiadomosciController;
use App\Http\Controllers\ArtykulyController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WatkiController;
use App\Http\Controllers\ZdjeciaController;
use App\Http\Controllers\PlikiController;
use App\Http\Controllers\ListyController;
use App\Http\Controllers\IntencjeController;
use App\Http\Controllers\FilmyController;
use App\Http\Controllers\StronyController;
use App\Http\Controllers\KsiegarnieController;
use App\Http\Controllers\BiogramController;
use App\Http\Controllers\BiografiaController;
use App\Http\Controllers\ModlitwyController;
use App\Http\Controllers\KalendariumController;
use App\Http\Controllers\CzywieszController;
use App\Http\Controllers\ZasobyController;
use App\Http\Controllers\SzukajController;
use App\Models\Wiadomosci;
use App\Models\Zdjecia;

Route::get('/', [GlownyController::class, 'StronaGlowna'])->name('StronaGlowna');
/*Route::get('/', [GlownyController::class, 'StronaGlowna'])->name('StronaGlowna');*/



//podstrony
// lista intencji i świadectw
Route::get('/IntencjeSwiadectwa', [IntencjeController::class, 'index'])->name('IntencjeSwiadectwa');
//Mapa strony
Route::get('/mapaStrony', [GlownyController::class, 'mapaStrony'])->name('mapaStrony');
//
Route::get('/ksiazka-bozy-wojownik', [GlownyController::class, 'naszaKsiazka'])->name('naszaKsiazka');
Route::get('/bozy-wojownik-fragment-ksiazki', [GlownyController::class, 'fragmentKsiazki'])->name('fragmentKsiazki');
/*Route::get('/gdzie-kupic-ksiazke-bozy-wojownik', [GlownyController::class, 'gdzieKupic'])->name('gdzieKupic');*/
Route::get('/publikacjeKsiazka', [GlownyController::class, 'publikacjeKsiazka'])->name('publikacjeKsiazka');
Route::get('/wsparcie', [GlownyController::class, 'wsparcie'])->name('wsparcie');

Route::get('/filmy', [FilmyController::class, 'filmy'])->name('filmy');
Route::get('/strony', [PomocniczyController::class, 'strony'])->name('strony');
Route::get('/biogram', [PomocniczyController::class, 'biogram'])->name('biogram');
Route::get('/relikwieDlaKosciola', [PomocniczyController::class, 'relikwie'])->name('relikwie');
Route::get('/modlitwy', [ModlitwyController::class, 'modlitwy'])->name('modlitwy');
Route::get('/nowenna', [ModlitwyController::class, 'nowenna'])->name('nowenna');
Route::get('/litania', [ModlitwyController::class, 'litania'])->name('litania');
Route::get('/modlitwa-o-uchronienie-od-wojny', [ModlitwyController::class, 'uchronienieOdWojny'])->name('uchronienieOdWojny');
Route::get('/modlitwa-o-nawrocenie-narodu', [ModlitwyController::class, 'nawrocenieNarodu'])->name('nawrocenieNarodu');
Route::get('/zdjecia-dokumenty-ksiazki', [ZasobyController::class, 'zasoby'])->name('zasoby');
Route::get('/portrety', [ZasobyController::class, 'portrety'])->name('obrazyAndrzejaBoboli');
Route::get('/artykuly', [ArtykulyController::class, 'artykuly'])->name('artykuly');
Route::get('/aktualnosci', [WiadomosciController::class, 'wiadomosci'])->name('wiadomosci');
Route::get('/biografia', [BiografiaController::class, 'biografia'])->name('biografia');
Route::get('/kalendarium', [KalendariumController::class, 'kalendarium'])->name('kalendarium');

// koniec podstrony

// strony z całymi tresciami
Route::get('/aktualnosci/{slug}', [WiadomosciController::class, 'wiadomosc'])->name('wiadomosc');
Route::get('/artykul/{slug}', [ArtykulyController::class, 'artykul'])->name('artykul');
Route::get('/czywiesz/{slug}', [PomocniczyController::class, 'czywiesz'])->name('czywiesz');
Route::get('/zdjecie-dokument-ksiazka/{slug}', [ZasobyController::class, 'zasob'])->name('zasob');
Route::get('/modlitwa/{slug}', [ModlitwyController::class, 'modlitwa'])->name('modlitwa');
Route::get('/film/{slug}', [FilmyController::class, 'film'])->name('film');

// koniec stron z całymi tresciami

// kontakt -- list do redakcji - formularz
Route::get('/kontakt', [GlownyController::class, 'kontakt'])->name('kontakt');
// kontakt -- list do redakcji - przeyłanie treści
Route::post('/listDoRedakcji', [ListyController::class, 'create'])->name('listDoRedakcji');
// kontakt -- przesyłanie inztecnji - formularz
Route::get('/intencje', [GlownyController::class, 'intencje'])->name('intencje');
// kontakt -- przesyłanie intecnji - przeyłanie treści
Route::post('/przeslijIntencje', [IntencjeController::class, 'create'])->name('przeslijIntencje');
Route::get('refresh_captcha', [PomocniczyController::class, 'refreshCaptcha'])->name('refresh_captcha');
// koniec kontakt

//podgląd redakcyjny
Route::get('/o15ui3j5i99ew/wiadomosc/{slug}', [WiadomosciController::class, 'wiadomoscRedakcja']);
Route::get('/o15ui3j5i99ew/artykul/{slug}', [ArtykulyController::class, 'artykulRedakcja']);
//Koniec podgląd redakcyjny

// wyszukiwarka
Route::post('/szukaj', [GlownyController::class, 'szukaj'])->name('szukaj');


/*Route::get('/wiadomosciLista', [WiadomosciController::class, 'index'])->name('wiadomosciLista');
 */
/*Route::get('/', function () {
    return view('welcome');
});*/
