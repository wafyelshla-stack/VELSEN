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
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased selection:bg-secondary-container selection:text-on-secondary-container">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 grid grid-cols-1 md:grid-cols-3 items-center px-gutter py-2.5 w-full max-w-container-max-width mx-auto bg-surface/90 backdrop-blur-md dark:bg-surface/90 border-b border-primary/10 dark:border-outline-variant flat no shadows">
<div class="flex items-center gap-3 justify-start">
<a href="/" class="flex items-center gap-3.5 group">
<img alt="Velsen Logo" class="h-16 md:h-20 w-auto object-contain mix-blend-multiply transition-transform duration-300 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVTkcBHAfFGp2sgMkFTxsUdc09Z77vKXP4DrtyLoobFYcDFvKRDHmP3XY3ulj9D1jcM25QQEYq9iFcqDEyhZWFS6E-MH6VMRseOt-W_f9L1D_2Olcw9lPi8rK6MbGVv6YCwMtduZjBFpNdoKnpKpIv9SaEYrJZPcjMm_8W3E-r1VxPJ-Zr1p2L7VKCCehZWKydo9VWAvxcy2wY5u-FrDCB7xhZCVf-qTguRhY_cj-sw7pba3a8VlBA1icdyMOEiK7BCA"/>
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
<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center justify-center py-14 md:py-20">
<div class="absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
<div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-primary/60 to-primary/85 backdrop-blur-[1px]"></div>
</div>
<div class="relative z-10 text-center px-gutter max-w-4xl mx-auto py-8">
<span class="block text-secondary-container font-label-caps text-label-caps tracking-widest uppercase mb-4 drop-shadow-md">Curățenie Profesională de Elită</span>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-white mb-5 drop-shadow-lg leading-tight">
                Excelență Instituțională în Curățenie Profesională
            </h1>
<p class="font-body-lg text-body-lg text-white/90 mb-8 max-w-2xl mx-auto drop-shadow font-light">
                Servicii de curățenie de înaltă precizie pentru facilități medicale, spații comerciale și reședințe de lux. Standarde riguroase, rezultate impecabile.
            </p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="#contact" class="bg-secondary-container text-on-secondary-container font-button-text text-button-text uppercase tracking-widest px-7 py-3 rounded-sm shadow-md shadow-secondary/30 hover:bg-secondary-container/90 transition-all hover:shadow-lg inline-block">
                    Solicitați o Evaluare
</a>
<a href="/despre-noi" class="bg-transparent border border-white/50 text-white font-button-text text-button-text uppercase tracking-widest px-7 py-3 rounded-sm hover:bg-white/10 hover:border-white transition-all flex items-center justify-center gap-2 backdrop-blur-sm">
<span class="material-symbols-outlined text-lg" data-icon="play_circle">play_circle</span>
                    Vedeți Standardele Noastre
</a>
</div>
</div>
</section>
<!-- Stats / Highlights Section -->
<section class="bg-surface py-10 border-b border-primary/10 relative -mt-10 z-20 max-w-5xl mx-auto px-5">
<div class="bg-white rounded-lg shadow-md shadow-primary/5 border border-primary/5 py-8 px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center divide-x divide-primary/10">
<div class="flex flex-col items-center">
<span class="material-symbols-outlined text-secondary-container text-4xl mb-2 font-light" data-icon="verified_user">verified_user</span>
<span class="font-headline-md text-headline-md text-primary mb-0.5">100+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs">Clienți Corporate</span>
</div>
<div class="flex flex-col items-center">
<span class="material-symbols-outlined text-secondary-container text-4xl mb-2 font-light" data-icon="local_hospital">local_hospital</span>
<span class="font-headline-md text-headline-md text-primary mb-0.5">ISO</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs">Standard Medical</span>
</div>
<div class="flex flex-col items-center">
<span class="material-symbols-outlined text-secondary-container text-4xl mb-2 font-light" data-icon="workspace_premium">workspace_premium</span>
<span class="font-headline-md text-headline-md text-primary mb-0.5">5 Ani</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs">Experiență Premium</span>
</div>
<div class="flex flex-col items-center">
<span class="material-symbols-outlined text-secondary-container text-4xl mb-2 font-light" data-icon="support_agent">support_agent</span>
<span class="font-headline-md text-headline-md text-primary mb-0.5">24/7</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs">Suport Dedicat</span>
</div>
</div>
</section>
<!-- Services Overview -->
<section class="py-section-padding-mobile md:py-section-padding-desktop bg-surface px-gutter max-w-container-max-width mx-auto">
<div class="text-center mb-12 flex flex-col items-center">
<span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-2">Expertiza Noastră</span>
<h2 class="font-headline-md text-headline-md text-primary mb-3">Servicii Specializate</h2>
<div class="w-12 h-0.5 bg-secondary-container mb-4"></div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto font-light">
                Oferim soluții adaptate pentru medii care necesită cel mai înalt nivel de igienă și prezentare.
            </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Service Card 1 -->
<a href="/servicii" class="bg-white border border-primary/5 rounded-sm p-7 hover:border-secondary-container/50 transition-all duration-300 group shadow-sm hover:shadow-lg hover:-translate-y-1 cursor-pointer relative overflow-hidden block">
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
<a href="/servicii" class="bg-primary border border-primary rounded-sm p-7 hover:border-secondary-container/50 transition-all duration-300 group shadow-md hover:shadow-xl hover:-translate-y-1 cursor-pointer relative overflow-hidden block">
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
<a href="/servicii" class="bg-white border border-primary/5 rounded-sm p-7 hover:border-secondary-container/50 transition-all duration-300 group shadow-sm hover:shadow-lg hover:-translate-y-1 cursor-pointer relative overflow-hidden block">
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
<section id="contact" class="bg-white py-section-padding-mobile md:py-section-padding-desktop border-t border-primary/5">
<div class="max-w-container-max-width mx-auto px-gutter grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
<div>
<span class="text-secondary font-label-caps text-label-caps tracking-widest uppercase mb-2 block">Consultație</span>
<h2 class="font-headline-md text-headline-md text-primary mb-4">Stabiliți o Evaluare Gratuită</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 font-light leading-relaxed">
                    Fiecare spațiu are nevoi unice. Contactați-ne pentru a discuta cum Velsen poate ridica standardele de igienă ale facilității dumneavoastră. Vă vom răspunde în maxim 2 ore lucrătoare.
                </p>
<div class="space-y-6">
<div class="flex items-start gap-4">
<div class="bg-surface w-10 h-10 rounded-full flex items-center justify-center border border-primary/10 shrink-0">
<span class="material-symbols-outlined text-secondary-container text-xl font-light" data-icon="call">call</span>
</div>
<div>
<span class="block font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs mb-0.5">Telefon</span>
<a href="tel:+40700123456" class="font-body-md text-body-md text-primary font-semibold hover:text-secondary-container transition-colors">+40 (700) 123 456</a>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-surface w-10 h-10 rounded-full flex items-center justify-center border border-primary/10 shrink-0">
<span class="material-symbols-outlined text-secondary-container text-xl font-light" data-icon="mail">mail</span>
</div>
<div>
<span class="block font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs mb-0.5">Email</span>
<a href="mailto:contact@velsen.ro" class="font-body-md text-body-md text-primary font-semibold hover:text-secondary-container transition-colors">contact@velsen.ro</a>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-surface w-10 h-10 rounded-full flex items-center justify-center border border-primary/10 shrink-0">
<span class="material-symbols-outlined text-secondary-container text-xl font-light" data-icon="location_on">location_on</span>
</div>
<div>
<span class="block font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider text-xs mb-0.5">Sediu Central</span>
<span class="font-body-md text-body-md text-primary font-semibold">Strada Preciziei Nr. 12, București</span>
</div>
</div>
</div>
</div>
<div class="bg-surface p-8 rounded-sm border border-primary/10 shadow-lg shadow-primary/5 relative">
<h3 class="font-headline-sm text-headline-sm text-primary mb-6 border-b border-primary/10 pb-3">Formular de Contact</h3>
<form class="space-y-5">
<div>
<label class="block font-label-caps text-label-caps text-on-surface-variant mb-1.5 text-xs uppercase tracking-wider">Nume Complet</label>
<input class="w-full bg-white border border-outline-variant/50 focus:border-secondary-container focus:ring-1 focus:ring-secondary-container/50 px-3 py-2 font-body-md text-primary placeholder-on-surface-variant/40 transition-all rounded-sm font-light" placeholder="Introduceți numele" type="text"/>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
<div>
<label class="block font-label-caps text-label-caps text-on-surface-variant mb-1.5 text-xs uppercase tracking-wider">Telefon</label>
<input class="w-full bg-white border border-outline-variant/50 focus:border-secondary-container focus:ring-1 focus:ring-secondary-container/50 px-3 py-2 font-body-md text-primary placeholder-on-surface-variant/40 transition-all rounded-sm font-light" placeholder="Număr de contact" type="tel"/>
</div>
<div>
<label class="block font-label-caps text-label-caps text-on-surface-variant mb-1.5 text-xs uppercase tracking-wider">Tip Spațiu</label>
<select class="w-full bg-white border border-outline-variant/50 focus:border-secondary-container focus:ring-1 focus:ring-secondary-container/50 px-3 py-2 font-body-md text-primary transition-all rounded-sm font-light appearance-none">
<option>Comercial / Birouri</option>
<option>Medical</option>
<option>Rezidențial</option>
<option>Altul</option>
</select>
</div>
</div>
<div>
<label class="block font-label-caps text-label-caps text-on-surface-variant mb-1.5 text-xs uppercase tracking-wider">Detalii Suplimentare</label>
<textarea class="w-full bg-white border border-outline-variant/50 focus:border-secondary-container focus:ring-1 focus:ring-secondary-container/50 px-3 py-2 font-body-md text-primary placeholder-on-surface-variant/40 transition-all resize-none rounded-sm font-light" placeholder="Cum vă putem ajuta?" rows="3"></textarea>
</div>
<button class="w-full bg-secondary-container text-on-secondary-container font-button-text text-button-text uppercase tracking-widest py-3 rounded-sm shadow-md shadow-secondary/30 hover:bg-secondary-container/90 transition-all hover:shadow-lg mt-2" type="button">
                        Trimite Solicitarea
</button>
</form>
</div>
</div>
</section>
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