<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="utf-8"/>
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Servicii Velsen - Curățenie Profesională</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        "colors": {
                "on-tertiary-fixed-variant": "#454748",
                "inverse-primary": "#aec6ff",
                "surface-container-high": "#eae7e7",
                "on-secondary-container": "#ffffff",
                "surface-dim": "#dcd9d9",
                "surface": "#fcf9f8",
                "tertiary-fixed-dim": "#c5c7c8",
                "tertiary": "#1a1d1e",
                "primary-fixed": "#d8e2ff",
                "inverse-on-surface": "#f3f0ef",
                "surface-container-low": "#f6f3f2",
                "on-surface": "#1c1b1b",
                "secondary-container": "#e05a10",
                "tertiary-container": "#2f3233",
                "surface-container-lowest": "#ffffff",
                "secondary-fixed": "#ffdf9e",
                "on-tertiary": "#ffffff",
                "primary-container": "#002f6c",
                "on-tertiary-fixed": "#191c1d",
                "on-primary-fixed-variant": "#224583",
                "outline-variant": "#c4c6d2",
                "outline": "#747781",
                "inverse-surface": "#313030",
                "surface-container": "#f0eded",
                "primary-fixed-dim": "#aec6ff",
                "on-primary-container": "#7999dc",
                "on-background": "#1c1b1b",
                "surface-bright": "#fcf9f8",
                "error-container": "#ffdad6",
                "secondary-fixed-dim": "#f1bf4c",
                "on-secondary": "#ffffff",
                "surface-variant": "#e5e2e1",
                "tertiary-fixed": "#e1e3e4",
                "surface-tint": "#3c5d9c",
                "error": "#ba1a1a",
                "on-tertiary-container": "#989a9b",
                "primary": "#001b44",
                "on-error-container": "#93000a",
                "on-primary-fixed": "#001a42",
                "on-error": "#ffffff",
                "surface-container-highest": "#e5e2e1",
                "on-secondary-fixed": "#261a00",
                "secondary": "#e05a10",
                "on-primary": "#ffffff",
                "on-surface-variant": "#434750",
                "background": "#fcf9f8",
                "on-secondary-fixed-variant": "#5b4300"
        },
        "borderRadius": {
                "DEFAULT": "0.125rem",
                "lg": "0.25rem",
                "xl": "0.5rem",
                "full": "0.75rem"
        },
        "spacing": {
                "container-max-width": "1200px",
                "section-padding-desktop": "64px",
                "gutter": "20px",
                "section-padding-mobile": "40px",
                "base": "8px"
        },
        "fontFamily": {
                "body-md": ["Work Sans"],
                "button-text": ["Hanken Grotesk"],
                "label-caps": ["Hanken Grotesk"],
                "display-lg-mobile": ["Manrope"],
                "body-lg": ["Work Sans"],
                "headline-sm": ["Manrope"],
                "display-lg": ["Manrope"],
                "headline-md": ["Manrope"]
        },
        "fontSize": {
                "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                "button-text": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
                "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.08em", "fontWeight": "700" }],
                "display-lg-mobile": ["28px", { "lineHeight": "34px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                "display-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                "headline-md": ["26px", { "lineHeight": "34px", "fontWeight": "600" }]
        }
},
    },
  }
</script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&amp;family=Manrope:wght@600;700&amp;family=Work+Sans:wght@400&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .card-shadow { box-shadow: 0px 10px 25px rgba(0, 27, 68, 0.04); }
        .gold-accent { border-top: 2px solid #795900; }
        .service-card:hover .service-icon { color: #795900; transform: scale(1.05); transition: all 0.3s ease; }
        .service-card:hover { border-color: #795900; transition: border-color 0.3s ease; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased selection:bg-secondary-container selection:text-on-secondary-container">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 bg-surface/95 backdrop-blur-md border-b border-primary/10 transition-all duration-300">
<div class="max-w-container-max-width mx-auto px-4 md:px-gutter py-3 grid grid-cols-2 md:grid-cols-3 items-center">
<div class="flex items-center justify-start">
<a href="/" class="flex items-center gap-3.5 group">
<img alt="Velsen Logo" class="h-16 sm:h-20 md:h-24 w-auto object-contain transition-transform duration-300 group-hover:scale-105" style="background: transparent;" src="{{ \App\Models\SiteSetting::url('logo_img', 'images/logo.webp') }}"/>
<span class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-primary tracking-wide">Velsen</span>
</a>
</div>

<!-- Desktop Navigation (Centered in Middle) -->
<nav class="hidden md:flex items-center justify-center gap-10">
<a class="relative py-2 text-lg md:text-xl font-bold text-on-surface-variant hover:text-primary transition-colors duration-300 group" href="/">
<span>Acasă</span>
<span class="absolute bottom-0 left-0 w-full h-[3px] bg-secondary rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-lg md:text-xl font-bold text-on-surface-variant hover:text-primary transition-colors duration-300 group" href="/servicii">
<span>Servicii</span>
<span class="absolute bottom-0 left-0 w-full h-[3px] bg-secondary rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-lg md:text-xl font-bold text-on-surface-variant hover:text-primary transition-colors duration-300 group" href="/despre-noi">
<span>Despre Noi</span>
<span class="absolute bottom-0 left-0 w-full h-[3px] bg-secondary rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
</nav>

<!-- Mobile Menu Toggle Button -->
<div class="flex items-center justify-end">
<button id="menu-toggle" aria-label="Deschide Meniul" class="md:hidden text-primary p-2 rounded-lg hover:bg-primary/5 focus:outline-none transition-colors cursor-pointer">
<span id="menu-icon" class="material-symbols-outlined text-3xl">menu</span>
</button>
</div>
</div>

<!-- Mobile Navigation Drawer (Centered in Middle) -->
<div id="mobile-menu" class="hidden md:hidden border-t border-primary/10 bg-surface/98 backdrop-blur-lg px-4 py-4 flex flex-col items-center justify-center space-y-2 text-center">
<a class="w-full py-3 px-4 text-lg font-bold text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-md transition-colors text-center" href="/">Acasă</a>
<a class="w-full py-3 px-4 text-lg font-bold text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-md transition-colors text-center" href="/servicii">Servicii</a>
<a class="w-full py-3 px-4 text-lg font-bold text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-md transition-colors text-center" href="/despre-noi">Despre Noi</a>
</div>
</header>

<!-- Script for Mobile Menu Toggle -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    if (toggleBtn && mobileMenu && menuIcon) {
      toggleBtn.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.toggle('hidden');
        menuIcon.textContent = isHidden ? 'menu' : 'close';
      });
    }
  });
</script>
<!-- Page Header -->
<section class="w-full max-w-container-max-width mx-auto px-gutter py-section-padding-mobile md:py-section-padding-desktop">
<div class="max-w-3xl">
<h1 class="text-display-lg-mobile md:text-display-lg font-display-lg-mobile md:font-display-lg text-primary mb-4 leading-tight">Excelență în Curățenie Profesională</h1>
<p class="text-body-lg font-body-lg text-on-surface-variant leading-relaxed font-light">
                Soluții premium de igienizare și întreținere, adaptate celor mai exigente standarde. Serviciile noastre sunt concepute pentru a asigura un mediu impecabil, fie că este vorba de spații comerciale, rezidențiale sau industriale de înaltă precizie.
            </p>
</div>
</section>
<!-- Services Bento Grid -->
<section class="bg-white py-section-padding-mobile md:py-section-padding-desktop border-y border-outline-variant/30">
<div class="w-full max-w-container-max-width mx-auto px-gutter">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Commercial -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="business_center">business_center</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Curățenie Comercială</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                        Întreținere profesională pentru clădiri de birouri, centre de afaceri și spații comerciale. Garantăm un mediu de lucru sănătos și o imagine impecabilă.
                    </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                        Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<!-- Hospitality -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary" style="background-color: rgb(230, 81, 0);"></div>
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="room_service">room_service</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Hospitality &amp; HORECA</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                        Standarde superioare de curățenie pentru hoteluri, restaurante și spații de evenimente. Atenție meticuloasă la detalii pentru o experiență perfectă.
                    </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                        Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<!-- Industrial -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="factory">factory</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Curățenie Industrială</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                        Echipamente și proceduri specializate pentru hale de producție, depozite și spații logistice. Soluții robuste pentru medii cu cerințe stricte.
                    </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                        Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<!-- Residential -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden lg:col-span-2">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary" style="background-color: rgb(230, 81, 0);"></div>
<div class="flex flex-col md:flex-row gap-6 h-full">
<div class="flex-1 flex flex-col">
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="villa">villa</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Rezidențial Premium</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                                Servicii de curățenie de lux pentru reședințe, vile și apartamente premium. Personal discret și respect absolut pentru intimitatea dumneavoastră.
                            </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                                Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<div class="flex-1 hidden md:block rounded-sm overflow-hidden">
<div class="bg-cover bg-center w-full h-full min-h-[160px] rounded-sm" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBHHBOS7_0XHW8Zeg1KXB5ZJ4Q4E1UXOZqi9So9iFQJqPFotd8vF0BM8pe_2ECNkzNzgqPnwQttZvo2slrGWwtRP7TvuKaGNHvxge3yv3Vv6_qfAI8gCHUIbP4AAPyIMN6Ug2yR9f9jjrR-ihL1TtDAmxtUUwplVzv_8nd0LO_rVzR8ETqQDqOnYjOn3g4JZepaRpB561dWGvUe264cMsoAOwNXKkucNAZx68ABMT6liRQwTJOaoYLW');"></div>
</div>
</div>
</div>
<!-- Window -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="cleaning_services">cleaning_services</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Curățare Fațade &amp; Geamuri</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                        Alpinism utilitar și tehnici moderne pentru curățarea impecabilă a ferestrelor și fațadelor din sticlă.
                    </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                        Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<!-- Deep Cleaning -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary" style="background-color: rgb(230, 81, 0);"></div>
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="sanitizer">sanitizer</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Curățenie Generală (Deep Clean)</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                        Igienizare profundă și dezinfecție detaliată. Ideală pentru schimbări de sezon, mutări sau reîmprospătare completă.
                    </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                        Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<!-- Post-Construction -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="construction">construction</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Post-Constructor</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                        Îndepărtarea eficientă a molozului, prafului fin și a resturilor. Transformăm șantierul într-un spațiu gata de utilizare.
                    </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                        Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<!-- Customized -->
<div class="service-card group bg-surface-lowest border border-outline-variant/50 rounded-sm p-6 card-shadow flex flex-col h-full relative overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary" style="background-color: rgb(230, 81, 0);"></div>
<span class="material-symbols-outlined text-3xl text-primary mb-4 service-icon transition-colors" data-icon="tune">tune</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-3">Soluții Personalizate</h3>
<p class="text-body-md font-body-md text-on-surface-variant flex-grow mb-4 font-light leading-relaxed">
                        Pachete flexibile de servicii concepute exact pe nevoile specifice ale locației dumneavoastră.
                    </p>
<a class="text-label-caps font-label-caps text-secondary inline-flex items-center gap-1.5 mt-auto hover:text-primary transition-colors text-xs" href="/#contact" style="color: rgb(230, 81, 0);">
                        Detalii Serviciu <span class="material-symbols-outlined text-xs" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="w-full py-10 md:py-14 px-gutter flex flex-col md:flex-row justify-between items-start gap-8 bg-primary">
<div class="text-white max-w-sm">
<div class="text-headline-sm font-headline-sm text-secondary-container mb-4 tracking-wide">Velsen</div>
<p class="font-body-md text-body-md text-white/70 mb-4 font-light leading-relaxed">Standardul de aur în curățenia profesională. Precizie, încredere și excelență instituțională.</p>
<!-- Social Links -->
<div class="flex items-center gap-4 mb-6">
<a href="https://www.facebook.com/profile.php?id=61593313353911" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary-container hover:text-white transition-all duration-300">
<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
</a>
<a href="https://www.instagram.com/velsengroup/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary-container hover:text-white transition-all duration-300">
<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
</a>
<a href="https://www.linkedin.com/in/velsengroup/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary-container hover:text-white transition-all duration-300">
<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
</a>
</div>
<p class="font-body-md text-body-md text-white/50 text-xs tracking-wider uppercase">© 2024 Velsen Servicii de Curățenie Profesională. Toate drepturile rezervate.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
<div>
<h4 class="font-label-caps text-label-caps text-secondary-container mb-4 uppercase tracking-widest text-xs">Contact Direct</h4>
<ul class="space-y-3">
<li><a class="font-body-md text-body-md text-white/70 hover:text-secondary-container transition-colors duration-200 font-light flex items-center gap-2" href="tel:+40724101196">+40 (724) 101 196</a></li>
<li><a class="font-body-md text-body-md text-white/70 hover:text-secondary-container transition-colors duration-200 font-light flex items-center gap-2" href="mailto:info@velsengroup.ro">info@velsengroup.ro</a></li>
</ul>
</div>
<div>
<h4 class="font-label-caps text-label-caps text-secondary-container mb-4 uppercase tracking-widest text-xs">Servicii</h4>
<ul class="space-y-3">
<li><a class="font-body-md text-body-md text-white/70 hover:text-secondary-container transition-colors duration-200 font-light" href="/servicii">Servicii Rezidențiale</a></li>
<li><a class="font-body-md text-body-md text-white/70 hover:text-secondary-container transition-colors duration-200 font-light" href="/servicii">Servicii Medicale</a></li>
<li><a class="font-body-md text-body-md text-white/70 hover:text-secondary-container transition-colors duration-200 font-light" href="/servicii">Curățenie Comercială</a></li>
</ul>
</div>
<div>
<h4 class="font-label-caps text-label-caps text-secondary-container mb-4 uppercase tracking-widest text-xs">Legal</h4>
<ul class="space-y-3">
<li><a class="font-body-md text-body-md text-white/70 hover:text-secondary-container transition-colors duration-200 font-light" href="#">Termeni și Condiții</a></li>
<li><a class="font-body-md text-body-md text-white/70 hover:text-secondary-container transition-colors duration-200 font-light" href="#">Politică de Confidențialitate</a></li>
</ul>
</div>
</div>
</footer>
</body>
</html>
