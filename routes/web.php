<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\WordsController;
use App\Http\Controllers\LandingPageController;

            

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
    return view('sw.home');
});
Route::get('/sw', function () {
    return view('sw.home');
});
// Route::get('/en', function () {
//     return view('en.home');
// });
// Route::get('home', function () {
//     return view('sw.home'); 
// });
Route::get('huduma', function () {
    return view('sw.huduma'); 
});
Route::get('kuhusu', function () {
    return view('sw.kuhusu'); 
});
Route::get('nifanyaje', function () {
    return view('sw.nifanyaje'); 
});
Route::get('idara', function () {
    return view('sw.idara'); 
});
Route::get('utawala', function () {
    return view('sw.utawala'); 
});
Route::get('maswali', function () {
    return view('sw.nifanyaje'); 
});
Route::get('about-us', function () {
    return view('en.aboutus'); 
});
Route::get('services', function () {
    return view('en.services'); 
});
Route::get('structure', function () {
    return view('en.structure'); 
});
Route::get('board', function () {
    return view('en.board'); 
});
Route::get('muundo', function () {
    return view('sw.muundo'); 
});
Route::get('test', function () {
    return view('en.test'); 
});
Route::get('units', function () {
    return view('en.units'); 
});
Route::get('service', function () {
    return view('en.services2'); 
});
Route::get('salamu', function () {
    return view('sw.salamu'); 
});
Route::get('greetings', function () {
    return view('en.greetings'); 
});
Route::get('utumishinautawala', function () {
    return view('sw.utumishinautawala'); 
});
Route::get('bodi', function () {
    return view('sw.bodi'); 
});
Route::get('historia', function () {
    return view('sw.historia'); 
});
Route::get('bakita-history', function () {
    return view('en.history'); 
});
Route::get('mising-mikuu', function () {
    return view('sw.misingi'); 
});
Route::get('cvalues', function () {
    return view('en.bcvalues'); 
});
Route::get('dira-dhamira', function () {
    return view('sw.dira-dhamira'); 
});
Route::get('vision-mision', function () {
    return view('en.mision-vision'); 
});
Route::get('bakita-functions', function () {
    return view('en.bakita-functions'); 
});
Route::get('majukumu', function () {
    return view('sw.majukumu'); 
});
Route::get('directorates', function () {
    return view('en.bakita-directorates'); 
});
Route::get('kurugenzi', function () {
    return view('sw.bakita-kurugenzi'); 
});
Route::get('vitengo', function () {
    return view('sw.vitengo'); 
});
Route::get('sections', function () {
    return view('en.sections'); 
});
// Route::get('slider', function () {
//     return view('en.slider');});

Route::get('sw/{slug}', [LandingPageController::class, 'swshow'])->name('swshow');
Route::resource('sw', LandingPageController::class);
// Route::resource('en', LandingPageController::class);
Route::get('en', [LandingPageController::class, 'en'])->name('enindex');
Route::get('vitabu', [LandingPageController::class, 'guestindex'])->name('guestindex');
Route::get('bookslist', [LandingPageController::class, 'bookslist'])->name('bookslist');
// Route::get('bookview', [LandingPageController::class, 'bookview'])->name('bookview');
Route::get('showbook', [LandingPageController::class, 'showbook'])->name('showbook');

Route::resource('/', LandingPageController::class);

Route::get('learnswahili', function () {
    return view('en.learnswahili'); 
});
Route::get('jifunze', function () {
    return view('sw.jifunze'); 
});
Route::get('contact', function () {
    return view('en.contact'); 
});
Route::get('wasiliana', function () {
    return view('sw.wasiliana'); 
});
Route::get('magazeti', function () {
    return view('sw.magazetipage'); 
});
Route::get('nyaraka', function () {
    return view('sw.nyaraka'); 
});
Route::get('miongozo', function () {
    return view('sw.miongozo'); 
});
Route::get('circular', function () {
    return view('en.circular'); 
});
Route::get('magazine', function () {
    return view('en.magazete'); 
});
Route::get('sehemu', function () {
    return view('sw.sehemu'); 
});
Route::get('maktaba', function () {
    return view('sw.maktaba'); 
});
Route::get('library', function () {
    return view('en.library'); 
});

Route::resource('books', BooksController::class)->middleware('auth');
// Route::resource('books1', BooksController::class);
// Route::get('/books', [ContentsController::class, 'index'])->middleware('auth')->name('books');
// Route::get('/addbook', [ContentsController::class, 'store'])->middleware('auth')->name('store');
// Route::get('bookspageview', [BooksController::class, 'guestindex'])->name('guestindex');
Route::resource('words',WordsController::class);
Route::resource('/', LandingPageController::class);
Route::resource('contents', ContentsController::class);
Route::resource('sliders', SlidersController::class);

// Email Routing
// Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/bookspage', [App\Http\Controllers\BooksController::class, 'show'])->middleware('auth')->name('bookspage');

Route::get('/contents', [App\Http\Controllers\ContentsController::class, 'index'])->middleware('auth')->name('contents');
Route::get('/library', [App\Http\Controllers\ContentsController::class, 'index'])->middleware('auth')->name('contents');

Route::get('/addbook', [App\Http\Controllers\BooksController::class, 'index'])->middleware('auth')->name('books');
Route::get('/addcontent', [App\Http\Controllers\ContentsController::class, 'create'])->middleware('auth')->name('contents');
Route::get('/addword', [App\Http\Controllers\WordsController::class, 'create'])->middleware('auth')->name('words');
Route::get('/showwords', [App\Http\Controllers\WordsController::class, 'index'])->middleware('auth')->name('showwords');
Route::get('/news', [App\Http\Controllers\WordsController::class, 'index'])->middleware('auth')->name('news');
Route::get('/showsliders', [App\Http\Controllers\SlidersController::class, 'index'])->middleware('auth')->name('showsliders');
Route::get('/addslider', [App\Http\Controllers\SlidersController::class, 'create'])->middleware('auth')->name('slider');
Route::get('main-menu', [App\Http\Controllers\SlidersController::class, 'create'])->middleware('auth')->name('main-menu');
Route::get('#', [App\Http\Controllers\SlidersController::class, 'create'])->middleware('auth')->name('logosetup');

Route::get('book-store', [App\Http\Controllers\SlidersController::class, 'store'])->middleware('auth')->name('book-store');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/slider', [App\Http\Controllers\LandingPageController::class, 'index'])->name('slider');
// Route::get('/en', [App\Http\Controllers\LandingPageController::class, 'enindex'])->name('enindex');

Route::get('/dashboard1', [App\Http\Controllers\HomeController::class, 'admin'])->name('dashboard');

Route::get('/admin', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'adminHome'])->name('dashboard')->middleware('is_admin');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify'); 
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::get('library', function () {
		return view('pages.contents.contnts');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
    Route::get('library', function () {
        return view('pages.contents.contents');
    })->name('library');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});
// Route::resource('/books', BooksController::class);