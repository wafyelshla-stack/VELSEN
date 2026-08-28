<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Velsen - Curățenie Profesională</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&amp;family=Manrope:wght@600;700&amp;family=Work+Sans:wght@400&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                "body-md": [
                        "Work Sans"
                ],
                "button-text": [
                        "Hanken Grotesk"
                ],
                "label-caps": [
                        "Hanken Grotesk"
                ],
                "display-lg-mobile": [
                        "Manrope"
                ],
                "body-lg": [
                        "Work Sans"
                ],
                "headline-sm": [
                        "Manrope"
                ],
                "display-lg": [
                        "Manrope"
                ],
                "headline-md": [
                        "Manrope"
                ]
        },
        "fontSize": {
                "body-md": [
                        "14px",
                        {
                                "lineHeight": "20px",
                                "fontWeight": "400"
                        }
                ],
                "button-text": [
                        "14px",
                        {
                                "lineHeight": "20px",
                                "fontWeight": "600"
                        }
                ],
                "label-caps": [
                        "12px",
                        {
                                "lineHeight": "16px",
                                "letterSpacing": "0.08em",
                                "fontWeight": "700"
                        }
                ],
                "display-lg-mobile": [
                        "28px",
                        {
                                "lineHeight": "34px",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "700"
                        }
                ],
                "body-lg": [
                        "16px",
                        {
                                "lineHeight": "24px",
                                "fontWeight": "400"
                        }
                ],
                "headline-sm": [
                        "20px",
                        {
                                "lineHeight": "28px",
                                "fontWeight": "600"
                        }
                ],
                "display-lg": [
                        "40px",
                        {
                                "lineHeight": "48px",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "700"
                        }
                ],
                "headline-md": [
                        "26px",
                        {
                                "lineHeight": "34px",
                                "fontWeight": "600"
                        }
                ]
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
            0% {
                opacity: 0;
                transform: translateY(24px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pageLoadScaleIn {
            0% {
                opacity: 0;
                transform: scale(0.96);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .page-load-animate {
            animation: pageLoadFadeUp 0.7s ease-out both;
        }

        .page-load-animate-delay-1 {
            animation-delay: 0.08s;
        }

        .page-load-animate-delay-2 {
            animation-delay: 0.16s;
        }

        .page-load-animate-delay-3 {
            animation-delay: 0.24s;
        }

        .hero-animate {
            animation: pageLoadScaleIn 0.8s ease-out both;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased selection:bg-secondary-container selection:text-on-secondary-container">
<div class="page-load-animate">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 bg-surface/95 backdrop-blur-md border-b border-primary/10 transition-all duration-300">
<div class="max-w-container-max-width mx-auto px-4 md:px-gutter py-3 grid grid-cols-2 md:grid-cols-3 items-center">
<div class="flex items-center justify-start">
<a href="/" class="flex items-center gap-3.5 group">
<img alt="Velsen Logo" class="h-16 sm:h-20 md:h-24 w-auto object-contain transition-transform duration-300 group-hover:scale-105" style="background: transparent;" src="{{ \App\Models\SiteSetting::url('logo_img', 'images/logo.png') }}"/>
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

<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center justify-center py-14 md:py-20 px-4">
<div class="absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ \App\Models\SiteSetting::url('hero_bg', 'images/hero-bg.png') }}');">
<div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-primary/60 to-primary/85 backdrop-blur-[1px]"></div>
</div>
<div class="relative z-10 text-center max-w-4xl mx-auto py-8 hero-animate">
<span class="block text-secondary-container font-label-caps text-label-caps tracking-widest uppercase mb-4 drop-shadow-md page-load-animate page-load-animate-delay-1">Curățenie Profesională de Elită</span>
<h1 class="font-display-lg text-2xl sm:text-3xl md:text-display-lg text-white mb-5 drop-shadow-lg leading-tight page-load-animate page-load-animate-delay-2">
                Excelență Instituțională în Curățenie Profesională
            </h1>
<p class="font-body-lg text-sm sm:text-base text-white/90 mb-8 max-w-2xl mx-auto drop-shadow font-light page-load-animate page-load-animate-delay-3 px-2">
                Servicii de curățenie de înaltă precizie pentru facilități medicale, spații comerciale și reședințe de lux. Standarde riguroase, rezultate impecabile.
            </p>
<div class="flex flex-col sm:flex-row gap-4 justify-center px-4 page-load-animate page-load-animate-delay-3">
<a href="#contact" class="bg-secondary-container text-on-secondary-container font-button-text text-button-text uppercase tracking-widest px-7 py-3 rounded-sm shadow-md shadow-secondary/30 hover:bg-secondary-container/90 transition-all hover:shadow-lg inline-block text-center">
                    Solicitați o Evaluare
</a>
<a href="/despre-noi" class="bg-transparent border border-white/50 text-white font-button-text text-button-text uppercase tracking-widest px-7 py-3 rounded-sm hover:bg-white/10 hover:border-white transition-all flex items-center justify-center gap-2 backdrop-blur-sm text-center">
<span class="material-symbols-outlined text-lg" data-icon="play_circle">play_circle</span>
                    Vedeți Standardele Noastre
</a>
</div>
</div>
</section>

<!-- Stats / Highlights Section -->
<section class="bg-surface py-6 md:py-10 border-b border-primary/10 relative md:-mt-10 z-20 max-w-4xl mx-auto px-4">
<div class="bg-white rounded-lg shadow-md shadow-primary/5 border border-primary/5 py-6 px-4 grid grid-cols-1 sm:grid-cols-2 gap-6 text-center justify-items-center divide-y sm:divide-y-0 sm:divide-x divide-primary/10">
<div class="flex flex-col items-center w-full pb-4 sm:pb-0">
<span class="material-symbols-outlined text-secondary-container text-4xl mb-2 font-light" data-icon="verified_user">verified_user</span>
<span class="font-headline-md text-headline-md text-primary mb-0.5">100+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs">Clienți Corporate</span>
</div>
<div class="flex flex-col items-center w-full pt-4 sm:pt-0">
<span class="material-symbols-outlined text-secondary-container text-4xl mb-2 font-light" data-icon="support_agent">support_agent</span>
<span class="font-headline-md text-headline-md text-primary mb-0.5">24/7</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs">Suport Dedicat</span>
</div>
</div>
</section>

<!-- Services Overview -->
<section class="py-section-padding-mobile md:py-section-padding-desktop bg-surface px-4 md:px-gutter max-w-container-max-width mx-auto">
<div class="text-center mb-12 flex flex-col items-center">
<span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-2">Expertiza Noastră</span>
<h2 class="font-headline-md text-headline-md text-primary mb-3">Servicii Specializate</h2>
<div class="w-12 h-0.5 bg-secondary-container mb-4"></div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto font-light px-2">
                Oferim soluții adaptate pentru medii care necesită cel mai înalt nivel de igienă și prezentare.
            </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Service Card 1 -->
<a href="/servicii" class="bg-white border border-primary/5 rounded-sm p-6 md:p-7 hover:border-secondary-container/50 transition-all duration-300 group shadow-sm hover:shadow-lg hover:-translate-y-1 cursor-pointer relative overflow-hidden block">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary/0 group-hover:bg-secondary-container transition-all duration-300"></div>
<span class="material-symbols-outlined text-secondary-container text-4xl mb-5 block font-light transform group-hover:scale-105 transition-transform" data-icon="domain">domain</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3">Comercial &amp; Office</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 font-light leading-relaxed">
                    Creăm un mediu de lucru impecabil pentru echipele dvs. și o primă impresie remarcabilă pentru clienți.
                </p>
<span class="text-primary font-button-text text-button-text uppercase tracking-wider flex items-center gap-2 group-hover:text-secondary-container transition-colors">
                    Detalii <span class="material-symbols-outlined text-base transform group-hover:translate-x-1 transition-transform" data-icon="arrow_right_alt">arrow_right_alt</span>
</span>
</a>
<!-- Service Card 2 -->
<a href="/servicii" class="bg-primary border border-primary rounded-sm p-6 md:p-7 hover:border-secondary-container/50 transition-all duration-300 group shadow-md hover:shadow-xl hover:-translate-y-1 cursor-pointer relative overflow-hidden block">
<div class="absolute top-0 right-0 bg-secondary-container text-on-secondary-container text-[10px] font-label-caps px-3 py-1 uppercase tracking-widest rounded-bl-sm">Specializat</div>
<div class="absolute top-0 left-0 w-full h-1 bg-secondary-container transition-all duration-300"></div>
<span class="material-symbols-outlined text-secondary-container text-4xl mb-5 block font-light transform group-hover:scale-105 transition-transform" data-icon="healing">healing</span>
<h3 class="font-headline-sm text-headline-sm text-white mb-3">Facilități Medicale</h3>
<p class="font-body-md text-body-md text-white/80 mb-6 font-light leading-relaxed">
                    Protocoale stricte de dezinfecție și sanitizare conform standardelor hospital-grade pentru clinici și laboratoare.
                </p>
<span class="text-secondary-container font-button-text text-button-text uppercase tracking-wider flex items-center gap-2 transition-colors">
                    Detalii <span class="material-symbols-outlined text-base transform group-hover:translate-x-1 transition-transform" data-icon="arrow_right_alt">arrow_right_alt</span>
</span>
</a>
<!-- Service Card 3 -->
<a href="/servicii" class="bg-white border border-primary/5 rounded-sm p-6 md:p-7 hover:border-secondary-container/50 transition-all duration-300 group shadow-sm hover:shadow-lg hover:-translate-y-1 cursor-pointer relative overflow-hidden block">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary/0 group-hover:bg-secondary-container transition-all duration-300"></div>
<span class="material-symbols-outlined text-secondary-container text-4xl mb-5 block font-light transform group-hover:scale-105 transition-transform" data-icon="home_work">home_work</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3">Reșidențial Lux</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 font-light leading-relaxed">
                    Îngrijire meticuloasă pentru proprietăți premium, utilizând produse sigure și echipamente de ultimă generație.
                </p>
<span class="text-primary font-button-text text-button-text uppercase tracking-wider flex items-center gap-2 group-hover:text-secondary-container transition-colors">
                    Detalii <span class="material-symbols-outlined text-base transform group-hover:translate-x-1 transition-transform" data-icon="arrow_right_alt">arrow_right_alt</span>
</span>
</a>
</div>
<div class="mt-10 text-center">
<a class="inline-block bg-transparent border border-primary text-primary font-button-text text-button-text uppercase tracking-widest px-8 py-3 rounded-sm hover:bg-primary hover:text-white transition-all duration-300" href="/servicii">
                Vezi toate serviciile
            </a>
</div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-white py-section-padding-mobile md:py-section-padding-desktop border-t border-primary/5 px-4">
<div class="max-w-container-max-width mx-auto px-2 text-center">
<span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-2 block">Consultație</span>
<h2 class="font-headline-md text-headline-md text-primary mb-4">Contactați-ne Pentru o Evaluare Gratuită</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto mb-12 font-light leading-relaxed">
    Fiecare spațiu are nevoi unice. Echipa Velsen vă stă la dispoziție pentru a stabili un plan optim de curățenie profesională.
</p>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface p-6 rounded-sm border border-primary/10 shadow-sm flex flex-col items-center text-center group hover:border-secondary/30 transition-all duration-300">
<div class="bg-white w-14 h-14 rounded-full flex items-center justify-center border border-primary/10 mb-4 text-secondary shadow-sm group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl" data-icon="call">call</span>
</div>
<span class="block font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs mb-1">Telefon</span>
<a href="tel:+40724101196" class="font-body-md text-lg text-primary font-bold hover:text-secondary transition-colors">+40 (724) 101 196</a>
</div>
<div class="bg-surface p-6 rounded-sm border border-primary/10 shadow-sm flex flex-col items-center text-center group hover:border-secondary/30 transition-all duration-300">
<div class="bg-white w-14 h-14 rounded-full flex items-center justify-center border border-primary/10 mb-4 text-secondary shadow-sm group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl" data-icon="mail">mail</span>
</div>
<span class="block font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs mb-1">Email</span>
<a href="mailto:info@velsengroup.ro" class="font-body-md text-lg text-primary font-bold hover:text-secondary transition-colors">info@velsengroup.ro</a>
</div>
<div class="bg-surface p-6 rounded-sm border border-primary/10 shadow-sm flex flex-col items-center text-center group hover:border-secondary/30 transition-all duration-300">
<div class="bg-white w-14 h-14 rounded-full flex items-center justify-center border border-primary/10 mb-4 text-secondary shadow-sm group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl" data-icon="location_on">location_on</span>
</div>
<span class="block font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs mb-1">Sediu Central</span>
<span class="font-body-md text-lg text-primary font-bold">Brașov, România</span>
</div>
</div>
</div>
</section>

<!-- Footer -->
<footer class="w-full py-10 md:py-14 px-4 md:px-gutter flex flex-col md:flex-row justify-between items-start gap-8 bg-primary">
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
<div class="grid grid-cols-1 sm:grid-cols-3 gap-8 w-full md:w-auto">
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