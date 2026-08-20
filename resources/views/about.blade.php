<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Despre Noi - Velsen Servicii de Curățenie Profesională</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Manrope:wght@400;600;700&amp;family=Work+Sans:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 24;
        }

        @keyframes pageLoadFadeUp {
            0% { opacity: 0; transform: translateY(22px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .page-load-animate {
            animation: pageLoadFadeUp 0.7s ease-out both;
        }

        .page-load-animate-delay-1 { animation-delay: 0.08s; }
        .page-load-animate-delay-2 { animation-delay: 0.16s; }
        .page-load-animate-delay-3 { animation-delay: 0.24s; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased selection:bg-secondary-container selection:text-on-secondary-container">
<div class="page-load-animate">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 grid grid-cols-1 md:grid-cols-3 items-center px-gutter py-2.5 w-full max-w-container-max-width mx-auto bg-surface/90 backdrop-blur-md dark:bg-surface/90 border-b border-primary/10 dark:border-outline-variant flat no shadows">
<div class="flex items-center gap-3 justify-start">
<a href="/" class="flex items-center gap-3.5 group">
<img alt="Velsen Logo" class="h-16 md:h-20 w-auto object-contain transition-transform duration-300 group-hover:scale-105" src="{{ \App\Models\SiteSetting::url('logo_img', 'images/logo.svg') }}"/>
<span class="text-2xl md:text-3xl font-extrabold text-primary hidden md:inline-block tracking-wide">Velsen</span>
</a>
</div>
<nav class="hidden md:flex items-center justify-center gap-10">
<a class="relative py-2 text-lg md:text-xl font-bold text-on-surface-variant hover:text-primary transition-colors duration-300 group" href="/">
<span>Acasă</span>
<span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#e05a10] rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-lg md:text-xl font-bold text-on-surface-variant hover:text-primary transition-colors duration-300 group" href="/servicii">
<span>Servicii</span>
<span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#e05a10] rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-lg md:text-xl font-bold text-on-surface-variant hover:text-primary transition-colors duration-300 group" href="/despre-noi">
<span>Despre Noi</span>
<span class="absolute bottom-0 left-0 w-full h-[3px] bg-[#e05a10] rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
</nav>
<div class="hidden md:block"></div>
</header>
<main class="w-full">
<!-- Hero / Header Section -->
<section class="w-full max-w-container-max-width mx-auto px-gutter py-section-padding-mobile md:py-section-padding-desktop">
<div class="max-w-5xl page-load-animate page-load-animate-delay-1">
    <div class="flex items-start gap-6">
        <div class="flex-1">
            <span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-3 block">Despre Velsen</span>
            <h1 class="text-display-lg-mobile md:text-display-lg font-display-lg-mobile md:font-display-lg leading-tight mb-4">
                <span class="block text-primary">Standarde clinice,</span>
                <span class="block text-secondary">Precizie absolută.</span>
            </h1>
        </div>

        <div class="hidden md:flex items-center justify-center w-24 h-24 rounded-full border-2 border-secondary/30 bg-secondary/5 text-secondary shadow-sm">
            <span class="material-symbols-outlined text-4xl">verified</span>
        </div>
    </div>

    <p class="text-body-lg font-body-lg text-on-surface-variant leading-relaxed font-light max-w-4xl">
        La Velsen, redefinim conceptul de curățenie profesională. Nu oferim doar servicii de igienizare, ci garantăm medii sterile, sigure și impecabile pentru clienții noștri din sectorul medical, rezidențial și comercial.
    </p>
</div>
</section>
<!-- Bento Grid - Core Values & Stats -->
<section class="bg-white py-section-padding-mobile md:py-section-padding-desktop border-y border-outline-variant/30">
<div class="w-full max-w-container-max-width mx-auto px-gutter">
<div class="text-center mb-10">
<span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-2 block">Fundamentat pe Încredere</span>
<h2 class="font-headline-md text-headline-md text-primary">Pilonii Activității Noastre</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Value 1 -->
<div class="bg-surface p-7 rounded-sm border border-outline-variant/40 flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-secondary text-4xl mb-4" data-icon="verified_user">verified_user</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-2">Rigoare și Calitate</h3>
<p class="text-body-md font-body-md text-on-surface-variant font-light leading-relaxed">
                            Implementăm protocoale verificate clinic pentru a garanta că fiecare suprafață este tratată cu maximă precizie.
                        </p>
</div>
</div>
<!-- Value 2 -->
<div class="bg-primary text-on-primary p-7 rounded-sm flex flex-col justify-between md:col-span-2">
<div>
<span class="material-symbols-outlined text-secondary-container text-4xl mb-4" data-icon="shield">shield</span>
<h3 class="text-headline-sm font-headline-sm text-white mb-2">Tehnologie &amp; Substanțe Certificate</h3>
<p class="text-body-md font-body-md text-white/80 font-light leading-relaxed max-w-xl">
                            Utilizăm echipamente de ultimă generație și dezinfectanți avizați de Ministerul Sănătății, siguri pentru mediu și non-toxici pentru populație.
                        </p>
</div>
</div>
<!-- Value 3 -->
<div class="bg-surface p-7 rounded-sm border border-outline-variant/40 md:col-span-2 flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-secondary text-4xl mb-4" data-icon="groups">groups</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-2">Echipă Calificată &amp; Discreție</h3>
<p class="text-body-md font-body-md text-on-surface-variant font-light leading-relaxed max-w-xl">
                            Personalul nostru este supus unei instruiri continue în materie de igienizare instituțională și semnează acorduri stricte de confidențialitate.
                        </p>
</div>
</div>
<!-- Value 4 -->
<div class="bg-surface p-7 rounded-sm border border-outline-variant/40 flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-secondary text-4xl mb-4" data-icon="schedule">schedule</span>
<h3 class="text-headline-sm font-headline-sm text-primary mb-2">Promptitudine 24/7</h3>
<p class="text-body-md font-body-md text-on-surface-variant font-light leading-relaxed">
                            Flexibilitate maximă în organizarea schimburilor, astfel încât activitatea dumneavoastră să nu fie perturbată.
                        </p>
</div>
</div>
</div>
</div>
</section>
<!-- Timeline / Process Section -->
<section class="py-section-padding-mobile md:py-section-padding-desktop w-full max-w-container-max-width mx-auto px-gutter">
<div class="text-center mb-12">
<span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-2 block">Cum Lucrăm</span>
<h2 class="font-headline-md text-headline-md text-primary">Procesul Nostru Integrat</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
<div class="bg-white p-6 rounded-sm border border-primary/5 shadow-sm">
<span class="text-secondary font-label-caps text-sm font-bold block mb-2">01</span>
<h4 class="font-headline-sm text-primary text-lg mb-2">Audit &amp; Evaluare</h4>
<p class="text-body-md text-on-surface-variant font-light">Analizăm specificul spațiului și identificăm cerințele exacte de igienizare.</p>
</div>
<div class="bg-white p-6 rounded-sm border border-primary/5 shadow-sm">
<span class="text-secondary font-label-caps text-sm font-bold block mb-2">02</span>
<h4 class="font-headline-sm text-primary text-lg mb-2">Plan Personalizat</h4>
<p class="text-body-md text-on-surface-variant font-light">Elaborăm un caiet de sarcini dedicat și un grafic optim de intervenții.</p>
</div>
<div class="bg-white p-6 rounded-sm border border-primary/5 shadow-sm">
<span class="text-secondary font-label-caps text-sm font-bold block mb-2">03</span>
<h4 class="font-headline-sm text-primary text-lg mb-2">Execuție Riguroasă</h4>
<p class="text-body-md text-on-surface-variant font-light">Echipa noastră intervine cu echipamente speciale și soluții profesionale.</p>
</div>
<div class="bg-white p-6 rounded-sm border border-primary/5 shadow-sm">
<span class="text-secondary font-label-caps text-sm font-bold block mb-2">04</span>
<h4 class="font-headline-sm text-primary text-lg mb-2">Control Calitate</h4>
<p class="text-body-md text-on-surface-variant font-light">Verificăm periodic conformitatea cu standardele stabilite inițial.</p>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-10 md:py-14 px-gutter flex flex-col md:flex-row justify-between items-start gap-8 bg-primary">
<div class="text-white max-w-sm">
<div class="text-headline-sm font-headline-sm text-secondary-container mb-4 tracking-wide">Velsen</div>
<p class="font-body-md text-body-md text-white/70 mb-4 font-light leading-relaxed">Standardul de aur în curățenia profesională. Precizie, încredere și excelență instituțională.</p>
<!-- Social Links -->
<div class="flex items-center gap-4 mb-6">
<a href="https://www.facebook.com/profile.php?id=61593313353911" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary-container hover:text-white transition-all duration-300">
<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
</a>
<a href="https://www.instagram.com/velsengroup/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary-container hover:text-white transition-all duration-300">
<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
</a>
<a href="https://www.linkedin.com/in/velsengroup/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary-container hover:text-white transition-all duration-300">
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
</div>
</body>
</html>
