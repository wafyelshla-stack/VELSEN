<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="utf-8"/>
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
                "on-secondary-container": "#735500",
                "surface-dim": "#dcd9d9",
                "surface": "#fcf9f8",
                "tertiary-fixed-dim": "#c5c7c8",
                "tertiary": "#1a1d1e",
                "primary-fixed": "#d8e2ff",
                "inverse-on-surface": "#f3f0ef",
                "surface-container-low": "#f6f3f2",
                "on-surface": "#1c1b1b",
                "secondary-container": "#fdca56",
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
                "secondary": "#795900",
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
<header class="sticky top-0 z-50 grid grid-cols-1 md:grid-cols-3 items-center px-gutter py-2.5 w-full max-w-container-max-width mx-auto bg-surface/90 backdrop-blur-md dark:bg-surface/90 border-b border-primary/10 dark:border-outline-variant flat no shadows">
<div class="flex items-center gap-3 justify-start">
<a href="/" class="flex items-center gap-3.5 group">
<img alt="Velsen Logo" class="h-16 md:h-20 w-auto object-contain transition-transform duration-300 group-hover:scale-105" src="{{ asset('images/logo.svg') }}"/>
<span class="text-2xl md:text-3xl font-extrabold text-primary hidden md:inline-block tracking-wide">Velsen</span>
</a>
</div>
<nav class="hidden md:flex items-center justify-center gap-8">
<a class="relative py-2 text-on-surface-variant font-label-caps text-label-caps hover:text-primary transition-colors duration-300 group" href="/">
<span>Acasă</span>
<span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#e05a10] rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-on-surface-variant font-label-caps text-label-caps hover:text-primary transition-colors duration-300 group" href="/servicii">
<span>Servicii</span>
<span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#e05a10] rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-on-surface-variant font-label-caps text-label-caps hover:text-primary transition-colors duration-300 group" href="/despre-noi">
<span>Despre Noi</span>
<span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#e05a10] rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
</nav>
<div class="hidden md:block"></div>
</header>
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
<div class="text-headline-sm font-headline-sm text-secondary-container mb-4 tracking-wide" style="color: rgb(230, 81, 0);">Velsen</div>
<p class="font-body-md text-body-md text-white/70 mb-6 font-light leading-relaxed">Standardul de aur în curățenia profesională. Precizie, încredere și excelență instituțională.</p>
<p class="font-body-md text-body-md text-white/50 text-xs tracking-wider uppercase">© 2024 Velsen Servicii de Curățenie Profesională. Toate drepturile rezervate.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
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
