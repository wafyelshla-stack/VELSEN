<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display the Admin Login form.
     */
    public function showLogin()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Handle Admin Login submission.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Default admin credentials: admin@velsen.ro / admin123
        if (($request->email === 'admin@velsen.ro' || $request->email === 'admin') && $request->password === 'admin123') {
            session(['admin_authenticated' => true]);

            return redirect()->route('admin.dashboard')->with('success', 'Autentificare reușită!');
        }

        return back()->withErrors(['email' => 'Date de autentificare incorecte.'])->withInput();
    }

    /**
     * Handle Admin Logout.
     */
    public function logout()
    {
        session()->forget('admin_authenticated');

        return redirect()->route('admin.login')->with('success', 'Ați fost deconectat cu succes.');
    }

    /**
     * Admin Dashboard view.
     */
    public function index()
    {
        $imageFields = [
            'hero_bg' => [
                'label' => 'Imagine Fundal Hero (Pagina Principală)',
                'default' => 'images/hero-bg.png',
                'description' => 'Fotografia principală de fundal afișată în header-ul paginii de start.',
            ],
            'logo_img' => [
                'label' => 'Logo Velsen (Vector SVG/PNG)',
                'default' => 'images/logo.svg',
                'description' => 'Logo-ul oficial afișat în bara de navigație.',
            ],
            'service_img_residential' => [
                'label' => 'Serviciu: Rezidențial Premium',
                'default' => 'images/service-residential.jpg',
                'description' => 'Imagine card pentru curățenie rezidențială.',
            ],
            'service_img_commercial' => [
                'label' => 'Serviciu: Curățenie Comercială',
                'default' => 'images/service-commercial.jpg',
                'description' => 'Imagine card pentru birouri și spații comerciale.',
            ],
            'service_img_horeca' => [
                'label' => 'Serviciu: Hospitality & HORECA',
                'default' => 'images/service-horeca.jpg',
                'description' => 'Imagine card pentru hoteluri și restaurante.',
            ],
            'service_img_industrial' => [
                'label' => 'Serviciu: Curățenie Industrială',
                'default' => 'images/service-industrial.jpg',
                'description' => 'Imagine card pentru hale și depozite.',
            ],
            'service_img_facades' => [
                'label' => 'Serviciu: Curățare Fațade & Geamuri',
                'default' => 'images/service-facades.jpg',
                'description' => 'Imagine card pentru alpinism utilitar și geamuri.',
            ],
            'service_img_deepclean' => [
                'label' => 'Serviciu: Curățenie Generală (Deep Clean)',
                'default' => 'images/service-deepclean.jpg',
                'description' => 'Imagine card pentru dezinfectare și curățenie generală.',
            ],
            'service_img_postconstruction' => [
                'label' => 'Serviciu: Post-Constructor',
                'default' => 'images/service-postconstruction.jpg',
                'description' => 'Imagine card pentru curățenie după șantier.',
            ],
            'service_img_custom' => [
                'label' => 'Serviciu: Soluții Personalizate',
                'default' => 'images/service-custom.jpg',
                'description' => 'Imagine card pentru pachete personalizate.',
            ],
        ];

        return view('admin.dashboard', compact('imageFields'));
    }

    /**
     * Update settings and handle image uploads.
     */
    public function update(Request $request)
    {
        $files = $request->file('images', []);

        foreach ($files as $key => $file) {
            if ($file && $file->isValid()) {
                // Store in storage/app/public/uploads
                $path = $file->store('uploads', 'public');
                SiteSetting::set($key, $path, ucwords(str_replace('_', ' ', $key)), 'images');
            }
        }

        return redirect()->route('admin.dashboard')->with('success', 'Toate imaginile și setările au fost actualizate cu succes!');
    }
}
