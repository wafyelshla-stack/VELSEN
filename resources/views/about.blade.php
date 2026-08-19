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
<span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-secondary rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-on-surface-variant font-label-caps text-label-caps hover:text-primary transition-colors duration-300 group" href="/servicii">
<span>Servicii</span>
<span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-secondary rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
<a class="relative py-2 text-on-surface-variant font-label-caps text-label-caps hover:text-primary transition-colors duration-300 group" href="/despre-noi">
<span>Despre Noi</span>
<span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-secondary rounded-full scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
</a>
</nav>
<div class="hidden md:block"></div>
</header>
<main class="w-full">
<!-- Hero / Header Section -->
<section class="w-full max-w-container-max-width mx-auto px-gutter py-section-padding-mobile md:py-section-padding-desktop">
<div class="max-w-3xl">
<span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-3 block">Despre Velsen</span>
<h1 class="text-display-lg-mobile md:text-display-lg font-display-lg-mobile md:font-display-lg text-primary mb-4 leading-tight"> Standarde Clinice. Excelență Operațională. </h1>
<p class="text-body-lg font-body-lg text-on-surface-variant leading-relaxed font-light">
                Suntem dedicați furnizării de servicii de curățenie profesională la cele mai înalte standarde din industrie. Cu un portofoliu axat pe medii critice, de la facilități medicale la spații de birouri premium, misiunea noastră este de a asigura igienă impecabilă și siguranță absolută.
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
