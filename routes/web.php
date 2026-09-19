<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

$services = [
    'regular-daily-cleaning' => ['title' => 'Regular / Daily Cleaning', 'icon' => 'cleaning_services', 'audience' => 'Birouri, retail, clinici, HORECA și clădiri comerciale', 'included' => 'Întreținere zilnică sau programată pentru spațiile de lucru, zonele comune și grupurile sanitare.', 'method' => 'Program flexibil, checklist operațional și echipamente profesionale adaptate suprafețelor.'],
    'deep-cleaning' => ['title' => 'Deep Cleaning', 'icon' => 'sanitizer', 'audience' => 'Spații comerciale, birouri, clinici și locații HORECA', 'included' => 'Curățare în profunzime pentru suprafețe, colțuri și zone greu accesibile.', 'method' => 'Evaluare la fața locului, degresare, aspirare profesională și curățare detaliată pe zone.'],
    'post-construction-cleaning' => ['title' => 'Post-construction Cleaning', 'icon' => 'construction', 'audience' => 'Dezvoltatori, antreprenori și administratori de clădiri', 'included' => 'Îndepărtarea prafului fin, urmelor de materiale și resturilor după renovare sau construcție.', 'method' => 'Aspirare profesională, curățare umedă și finisarea suprafețelor înainte de predare.'],
    'window-cleaning' => ['title' => 'Window Cleaning', 'icon' => 'window', 'audience' => 'Birouri, retail, HORECA și spații industriale', 'included' => 'Curățarea geamurilor, ramelor și suprafețelor vitrate interioare sau exterioare.', 'method' => 'Echipamente pentru acces în siguranță și metode potrivite în funcție de înălțime și finisaj.'],
    'floor-scrubbing-waxing' => ['title' => 'Floor Scrubbing & Waxing', 'icon' => 'floor', 'audience' => 'Retail, depozite, fabrici, birouri și clădiri comerciale', 'included' => 'Spălare mecanizată, îndepărtarea peliculelor uzate și protecție pentru pardoseli.', 'method' => 'Mașini de spălat-uscat și soluții selectate în funcție de tipul pardoselii.'],
    'kitchen-cleaning' => ['title' => 'Kitchen Cleaning', 'icon' => 'restaurant', 'audience' => 'Restaurante, cantine, hoteluri și bucătării profesionale', 'included' => 'Curățarea suprafețelor de lucru, echipamentelor, pardoselilor și zonelor de preparare.', 'method' => 'Degresare controlată și lucru pe zone, cu materiale dedicate.'],
    'wc-sanitary-cleaning' => ['title' => 'WC / Sanitary Cleaning', 'icon' => 'wash', 'audience' => 'Spații B2B cu grupuri sanitare pentru angajați sau clienți', 'included' => 'Curățare și întreținere pentru toalete, lavoare, cabine și obiecte sanitare.', 'method' => 'Rutine de verificare și produse potrivite pentru fiecare suprafață.'],
    'carpet-upholstery-cleaning' => ['title' => 'Carpet & Upholstery Cleaning', 'icon' => 'chair', 'audience' => 'Birouri, hoteluri, clinici, showroom-uri și HORECA', 'included' => 'Curățarea mochetelor, covoarelor, scaunelor și tapițeriilor textile.', 'method' => 'Aspirare, pre-tratare și extracție după testarea materialului.'],
    'warehouses-logistics' => ['title' => 'Warehouses / Logistics', 'icon' => 'warehouse', 'audience' => 'Depozite, hub-uri logistice și centre de distribuție', 'included' => 'Întreținerea zonelor de picking, culoarelor, rampelor, birourilor și spațiilor comune.', 'method' => 'Planificare pe schimburi și mecanizare coordonată cu operațiunile locației.'],
    'industrial-cleaning' => ['title' => 'Industrial Cleaning', 'icon' => 'factory', 'audience' => 'Fabrici, hale de producție și facilități tehnice', 'included' => 'Curățare pentru spații industriale, suprafețe de lucru, zone tehnice și administrative.', 'method' => 'Evaluare de risc, echipamente profesionale și proceduri adaptate mediului.'],
];

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ro', 'en'])) {
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/servicii/{service?}', function (?string $service = null) use ($services) {
    abort_if($service !== null && ! array_key_exists($service, $services), 404);

    return view('services-page', ['services' => $services, 'selectedService' => $service]);
})->name('services');

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'company' => ['required', 'string', 'max:160'],
        'phone' => ['required', 'string', 'max:40'],
        'email' => ['required', 'email', 'max:160'],
        'location' => ['required', 'string', 'max:160'],
        'service' => ['required', 'string', 'max:160'],
        'message' => ['nullable', 'string', 'max:2000'],
    ]);

    Log::info('New VELSEN site evaluation request', $validated);

    return redirect()->to(url()->previous().'#contact')->with('contact_success', 'Solicitarea a fost înregistrată. Vă vom contacta pentru următorii pași.');
})->name('contact.store');

Route::get('/despre-noi', function () {
    return view('about');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// Admin Authentication Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

Route::middleware(['admin'])->group(function () {
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::post('/update', [AdminController::class, 'update'])->name('admin.update');
    });
});

// Alias admin routes so the admin panel is also reachable at /veslen1213
Route::get('/veslen1213/login', [AdminController::class, 'showLogin'])->name('admin.login.alias');
Route::post('/veslen1213/login', [AdminController::class, 'login'])->name('admin.login.submit.alias');

Route::middleware(['admin'])->group(function () {
    Route::post('/veslen1213/logout', [AdminController::class, 'logout'])->name('admin.logout.alias');

    Route::prefix('veslen1213')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard.alias');
        Route::post('/update', [AdminController::class, 'update'])->name('admin.update.alias');
    });
});
