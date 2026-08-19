<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Velsen - Curățenie Premium</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Hanken+Grotesk:wght@500;600;700;800&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "inverse-primary": "#aec6ff",
                        "on-tertiary-container": "#989a9b",
                        "surface-container-low": "#f6f3f2",
                        "outline-variant": "#c4c6d2",
                        "primary-fixed": "#d8e2ff",
                        "inverse-surface": "#313030",
                        "on-secondary-fixed": "#261a00",
                        "surface-container-lowest": "#ffffff",
                        "outline": "#747781",
                        "surface": "#fcf9f8",
                        "on-primary-fixed": "#001a42",
                        "tertiary-container": "#2f3233",
                        "on-secondary": "#ffffff",
                        "on-surface-variant": "#434750",
                        "on-error-container": "#93000a",
                        "on-background": "#1c1b1b",
                        "error-container": "#ffdad6",
                        "surface-container-high": "#eae7e7",
                        "error": "#ba1a1a",
                        "background": "#fcf9f8",
                        "secondary": "#795900",
                        "on-primary-fixed-variant": "#224583",
                        "on-tertiary-fixed": "#191c1d",
                        "surface-dim": "#dcd9d9",
                        "surface-tint": "#3c5d9c",
                        "on-secondary-fixed-variant": "#5b4300",
                        "on-secondary-container": "#735500",
                        "surface-variant": "#e5e2e1",
                        "secondary-container": "#fdca56",
                        "surface-bright": "#fcf9f8",
                        "secondary-fixed": "#ffdf9e",
                        "primary-container": "#002f6c",
                        "tertiary-fixed": "#e1e3e4",
                        "on-error": "#ffffff",
                        "on-primary-container": "#7999dc",
                        "inverse-on-surface": "#f3f0ef",
                        "on-tertiary-fixed-variant": "#454748",
                        "primary-fixed-dim": "#aec6ff",
                        "tertiary": "#1a1d1e",
                        "surface-container-highest": "#e5e2e1",
                        "primary": "#001b44",
                        "surface-container": "#f0eded",
                        "secondary-fixed-dim": "#f1bf4c",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#c5c7c8",
                        "on-primary": "#ffffff",
                        "on-surface": "#1c1b1b",
                        "gold": {
                            400: "#f3c761",
                            500: "#d4af37",
                            600: "#b5952f"
                        }
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "gutter": "24px",
                        "section-padding-mobile": "64px",
                        "container-max-width": "1280px",
                        "base": "8px",
                        "section-padding-desktop": "120px"
                    },
                    fontFamily: {
                        "display": ["Hanken Grotesk", "sans-serif"],
                        "headline-md": ["Manrope"],
                        "label-caps": ["Hanken Grotesk"],
                        "button-text": ["Hanken Grotesk"],
                        "body-md": ["Work Sans"],
                        "display-lg": ["Manrope"],
                        "body-lg": ["Work Sans"],
                        "display-lg-mobile": ["Manrope"],
                        "headline-sm": ["Manrope"],
                        "sans": ["Manrope", "sans-serif"]
                    },
                    fontSize: {
                        "headline-md": ["32px", { lineHeight: "40px", fontWeight: "600" }],
                        "label-caps": ["14px", { lineHeight: "20px", letterSpacing: "0.08em", fontWeight: "700" }],
                        "button-text": ["16px", { lineHeight: "24px", fontWeight: "600" }],
                        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                        "display-lg": ["56px", { lineHeight: "64px", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
                        "display-lg-mobile": ["36px", { lineHeight: "44px", letterSpacing: "-0.01em", fontWeight: "700" }],
                        "headline-sm": ["24px", { lineHeight: "32px", fontWeight: "600" }]
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(15px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-8px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
        }
        .material-symbols-outlined[data-weight="fill"],
        .material-symbols-outlined.fill-icon {
            font-variation-settings: 'FILL' 1;
        }
        .gold-gradient-bg {
            background: linear-gradient(135deg, #f3c761 0%, #d4af37 100%);
        }
        .gold-gradient-text {
            background: linear-gradient(135deg, #f3c761 0%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .animation-delay-150 { animation-delay: 150ms; }
        .animation-delay-300 { animation-delay: 300ms; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased overflow-x-hidden selection:bg-secondary-container selection:text-on-secondary-container">
    
    <!-- Unified Header -->
    <header x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 transition-all duration-300 bg-surface/80 backdrop-blur-lg border-b border-outline-variant/30 opacity-0 animate-fade-in-up">
        <!-- Desktop Header -->
        <div class="hidden md:flex justify-between items-center px-6 lg:px-8 py-3 max-w-6xl mx-auto relative">
            <a href="/" class="flex items-center gap-3 cursor-pointer group z-50">
                <img alt="Velsen Logo" class="h-10 w-auto object-contain mix-blend-darken contrast-125 brightness-110 transition-transform duration-300 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCig7X7d0cyfr3W90VilP76ukme8lUWr-RHYH_dufzepTlkqxxTE7P_t6CLXDkKQc6m0kTgN7DCsOY1c4MNQfYORJnrNBA96Onm-YWSQiakkmnaemxMi7xIyY2_3APfMuAWRVP1IMsLgs2xlHAztk0kiWGMhzpXtuXp8OE3IEt6BHgDWQTzT_4sueh7nLBfje_NqJvxE2kFQ6KgVFghQulK3ApWmcrgTh3Z6OZrVNtgZuhh1yLCE8wE6U_sYDFlaf9NGg"/>
                <span class="text-xl font-display font-extrabold text-primary tracking-tight">Velsen</span>
            </a>
            <nav class="hidden md:flex gap-8 items-center">
                <a class="text-primary border-b-2 border-gold-500 font-bold pb-0.5 text-xs font-display tracking-widest uppercase transition-colors" href="/">Acasă</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors duration-200 text-xs font-display tracking-widest uppercase" href="/servicii">Servicii</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors duration-200 text-xs font-display tracking-widest uppercase" href="#">Despre Noi</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors duration-200 text-xs font-display tracking-widest uppercase" href="#">Contact</a>
            </nav>
        </div>

        <!-- Mobile Header -->
        <div class="flex items-center justify-between px-5 py-3 md:hidden">
            <a href="/" class="flex items-center gap-3">
                <img alt="Velsen Logo" class="h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGuC8kaox21KCds2XuOfLsS39dXNhtftueBFM_dRfrvTfzviLXGBkRloUEbw2pWIl75DVCp8PT2t2F1VqJT0HSKA5y1tECS_RjspEkzaJD1R-i0gmc7nEjWu5RsF855uT2LJvXmXW5XpR50fWijklHc-bKo3lg5jv2_stBt5g2CislQB885KqgKPh-Vs_nCbaCi4zAIoIJuQZvLXxtkTzoRQ6tCrlM9P72d53ev6Ul4KmgF60ahGDd07hbsmU8zcTwXQ"/>
                <span class="font-headline-sm text-headline-sm text-primary font-extrabold tracking-tight">Velsen</span>
            </a>
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-primary p-2 hover:bg-surface-variant/50 rounded-full transition-colors active:scale-95">
                <span class="material-symbols-outlined text-[28px]" x-text="mobileMenuOpen ? 'close' : 'menu'">menu</span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             @click.away="mobileMenuOpen = false"
             class="md:hidden absolute top-full left-0 w-full bg-white border-b border-slate-100 shadow-lg py-4 px-6 flex flex-col gap-4">
            <a class="text-primary font-bold text-sm font-display tracking-widest uppercase" href="/">Acasă</a>
            <a class="text-on-surface-variant text-sm font-display tracking-widest uppercase" href="/servicii">Servicii</a>
            <a class="text-on-surface-variant text-sm font-display tracking-widest uppercase" href="#">Despre Noi</a>
            <a class="text-on-surface-variant text-sm font-display tracking-widest uppercase" href="#">Contact</a>
        </div>
    </header>

    <main class="pt-16 md:pt-0"> <!-- Add top padding for mobile to account for fixed header -->
        
        <!-- MOBILE Hero Section -->
        <section class="relative px-5 pt-10 pb-16 overflow-hidden md:hidden">
            <div class="absolute inset-0 -z-10">
                <img alt="Professional cleaning background" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRIbFcLqnscun-ZPGNNFUPADqB81Kt0r88jwBUw2nAgwVjoraSiRjOYOihX_tSr_4WpKAVH2K3-69-3ZSU45MFwjM5YmlLAbA9k40ObA1jEqYhJ4n1XvlYnnaX1cfR-qvaX7fotsf29_0oZQap-QIJkXLGtwKXAbXOiswpPpJMfnV2MH9x3u3s5OHt7PSgNdQeBflxANxXHtZnBWlwk4ARCm3GLUqvJ3aoiY_B1nvO5y7enGHJgRh9"/>
                <div class="absolute inset-0 bg-primary/75 backdrop-blur-sm"></div>
            </div>
            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-5">
                    <h1 class="font-display-lg-mobile text-display-lg-mobile text-white text-center tracking-tight">Curățenie<br/><span class="text-secondary-container drop-shadow-md italic font-light">Profesională</span></h1>
                    <p class="font-body-lg text-body-lg text-white/90 text-center max-w-sm mx-auto leading-relaxed">Standarde medicale de igienă pentru spații rezidențiale și comerciale. Precizie olandeză, încredere absolută.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <button class="bg-secondary-container text-on-secondary-container font-button-text text-button-text rounded-full min-h-[56px] px-6 flex items-center justify-center gap-2 w-full hover:bg-secondary-container/90 transition-colors shadow-md active:scale-[0.98]">
                        Cere o Ofertă<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                    </button>
                    <button class="bg-white text-primary font-button-text text-button-text rounded-full min-h-[56px] px-6 flex items-center justify-center gap-2 w-full shadow-lg hover:bg-white/90 transition-colors active:scale-[0.98]"> 
                        <span class="material-symbols-outlined text-[20px]">phone</span> Sună Acum 
                    </button>
                </div>
            </div>
            <div class="flex justify-center items-center gap-2 mt-14 px-5 py-4 bg-surface-container-lowest border border-outline-variant/30 rounded-full mx-auto max-w-[280px] shadow-sm">
                <span class="material-symbols-outlined text-secondary-container text-[22px]" data-weight="fill">verified</span>
                <span class="font-label-caps text-label-caps text-on-surface-variant">Certificare ISO 9001</span>
            </div>
        </section>

        <!-- DESKTOP Hero Section -->
        <section class="hidden md:flex relative min-h-[70vh] items-center bg-primary overflow-hidden pt-16">
            <div class="absolute inset-0 z-0">
                <img alt="Professional cleaning background" class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-[20s] hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByLYZJtjV8MttsP3PBVJ_0mxvK-MeVtY4aLGhWJs8w40qA3piFK9aXjh_z2BW31_AUOGlqx2pY3tg0pwq_WNQLwsM8KrEtAkOWSDec2Ark-aNfryKHLumEVZ_6ZzjooyYS_Zl4ACK3z5IPZJ5Rm_McAJTwMnpXKqXI_aXPY_8RFuxNKgaU2ZYXh-VWRsVujqfpMgAu9epvEpRG-4MxULvv4nsnzRr4HFmBV073GnEcm_Eqv4QBwbfK"/>
                <div class="absolute inset-0 bg-primary/90 md:bg-gradient-to-r md:from-primary md:via-primary/90 md:to-primary/50 backdrop-blur-[1px]"></div>
            </div>
            
            <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 w-full py-16">
                <div class="max-w-2xl opacity-0 animate-fade-in-up">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full glass-panel mb-6 border-gold-500/30">
                        <span class="w-1.5 h-1.5 rounded-full bg-gold-500 animate-pulse"></span>
                        <span class="text-gold-400 font-display text-xs tracking-widest uppercase font-bold">Standarde de Excelență</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight tracking-tight">
                        Servicii de Curățenie <br/>
                        <span class="gold-gradient-text">Premium</span>
                    </h1>
                    
                    <p class="text-base md:text-lg font-light text-white/80 mb-8 max-w-xl leading-relaxed opacity-0 animate-fade-in-up animation-delay-150">
                        Standarde instituționale aplicate spațiului tău. Oferim soluții de igienizare la nivel medical, asigurând un mediu steril și impecabil pentru reședințe de lux și clinici.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 opacity-0 animate-fade-in-up animation-delay-300">
                        <button class="gold-gradient-bg text-primary-container px-7 py-3 rounded-full font-display font-bold text-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                            Descoperă Serviciile
                        </button>
                        <button class="glass-panel text-white px-7 py-3 rounded-full font-display text-sm font-semibold hover:bg-white/10 transition-all duration-200 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">play_circle</span> Prezentare
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- MOBILE Services Bento Grid -->
        <section class="px-5 py-section-padding-mobile bg-surface-container-low md:hidden">
            <div class="mb-12 text-center">
                <span class="font-label-caps text-label-caps text-secondary block mb-3 tracking-widest">SERVICIILE NOASTRE</span>
                <h2 class="font-headline-sm text-headline-sm text-primary">Soluții Adaptate Nevoilor Tale</h2>
            </div>
            <div class="flex flex-col gap-8">
                <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="bg-cover bg-center w-full aspect-video" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA4xaNmhhLocbHh2rmD6pLifOK_shnzwzEvfNR5XU1RyTBpAtzMQFOCTMi3SCVqPrU0V2FpD6ne-uNWSgeHQoAiK6z8YOUcxxzy4eZx2fjBwj-19elKyAiYGxlnJvVLd4TarUE0CIou-e_eb6ogr-_F6J_0tzwGe0Kl5A5Yp0ddF3a6wzDUa7TTepJNFK7h9ZRT_fVWktr07fgQGuEzg4F7wCd90AQnyxFInRlT9QsC_rb2f3MQB0-n')"></div>
                    <div class="p-7">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-symbols-outlined text-secondary text-[26px]" data-weight="fill">home</span>
                            <h3 class="font-headline-sm text-headline-sm text-primary text-xl">Rezidențial</h3>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">Igienizare completă pentru apartamente și vile. Detalii care fac diferența.</p>
                        <a class="inline-flex items-center gap-1 font-label-caps text-label-caps text-secondary font-bold hover:text-secondary/80 active:scale-95 transition-all p-2 -ml-2 rounded-lg" href="#">DETALII <span class="material-symbols-outlined text-[20px]">chevron_right</span></a>
                    </div>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="bg-cover bg-center w-full aspect-video" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBTibEkjxrUZLRRfoduogQ4W-oibew0fs0UNjZE-IFGG7rEoPysedU9RnRD5gF0dRZtMwqOU09l1Ub-jOiuuoVX4m4i3FQbXVpJ21cJGefQUF17ExQ_JDrAqMyiwB1sbsPC_xrBhBKpSdBC-DHAHQnxJdjfeCXLahhVG1isTlgmhU5mVThxdJdxYFKeM1S98tY77b3qEOEK2snBvHVJhd7jkwxhpWoXzUjaUeOzmlJ6Q1Uj-lkEFfF3')"></div>
                    <div class="p-7">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-symbols-outlined text-secondary text-[26px]" data-weight="fill">medical_services</span>
                            <h3 class="font-headline-sm text-headline-sm text-primary text-xl">Medical</h3>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">Dezinfecție de nivel înalt respectând protocoalele sanitare stricte.</p>
                        <a class="inline-flex items-center gap-1 font-label-caps text-label-caps text-secondary font-bold hover:text-secondary/80 active:scale-95 transition-all p-2 -ml-2 rounded-lg" href="#">DETALII <span class="material-symbols-outlined text-[20px]">chevron_right</span></a>
                    </div>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="bg-cover bg-center w-full aspect-video" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDnUbl0xoEwN2557htvIhhdzkmNZRc0TEW0H1NAtcKb593KGrHlxf1AZJWJPvatR_sDX00_9_TKE8JviCLy4yo-a7PAIlLL1We7L9zXPqgt_QyebbqQmtjYUTe2ddGZAlUri8gFzb898OHGL0i_h1NpVRsJkdU2d8rUBQ6QQcBoQ9HuOVnQI93J2QzEevlysWeP0hITftp3SznJikW5T2_aBEAKUULZfOW4nvGq-9FOZz6HRsjEbG-r')"></div>
                    <div class="p-7">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-symbols-outlined text-secondary text-[26px]" data-weight="fill">domain</span>
                            <h3 class="font-headline-sm text-headline-sm text-primary text-xl">Comercial</h3>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">Întreținere profesională pentru birouri și spații comerciale.</p>
                        <a class="inline-flex items-center gap-1 font-label-caps text-label-caps text-secondary font-bold hover:text-secondary/80 active:scale-95 transition-all p-2 -ml-2 rounded-lg" href="#">DETALII <span class="material-symbols-outlined text-[20px]">chevron_right</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- DESKTOP About Section -->
        <section class="hidden md:block py-20 bg-surface relative overflow-hidden">
            <div class="max-w-6xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative group animate-float max-w-md mx-auto lg:max-w-none">
                    <div class="absolute -inset-3 gold-gradient-bg rounded-xl opacity-20 blur-xl group-hover:opacity-30 transition-opacity duration-500"></div>
                    <div class="relative rounded-xl overflow-hidden shadow-xl border border-slate-100">
                        <img class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCKiyWKMEAnIWTAhqvvAkb-vBiB5GITCcYGjO19rJ8OhbkMWzi9V0UktGVRKWxeXUYjdvAVndCf0Iou62xBBqHJf07PnKHv6a6Jx1YL5s54DBPCGw1c19OtBpz7AFh57pcTuoma606lF7SUBiAMvqsj8Jv2xH8CulSmWpng_sAQaorQeuPA0KJNcdFQdK94vDBn0WYqHaJ8y9e3JddJ3q982VBPYSdaq8XVjZWKPOktEuxNdUAis4v" alt="Precision Cleaning"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent opacity-40"></div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-primary mb-6 leading-tight tracking-tight">
                        Precizie Medicală.<br/>Eleganță Rezidențială.
                    </h2>
                    <div class="w-16 h-1 gold-gradient-bg mb-8 rounded-full"></div>
                    
                    <p class="text-base text-on-surface-variant mb-5 leading-relaxed font-light">
                        Ne distingem prin abordarea meticuloasă a fiecărui spațiu. Inspirându-ne din rigurozitatea protocoalelor de igienizare din domeniul medical, am creat un standard de curățenie care depășește așteptările.
                    </p>
                    <p class="text-base text-on-surface-variant mb-8 leading-relaxed font-light">
                        Echipa noastră folosește tehnologie de ultimă oră și soluții avizate, garantând un mediu nu doar vizual impecabil, ci și bacteriologic sigur.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6 bg-background p-6 rounded-xl border border-slate-200">
                        <div>
                            <div class="text-3xl font-extrabold text-primary mb-1">100%</div>
                            <div class="text-xs font-display text-gold-600 uppercase tracking-widest font-bold">Standarde ISO</div>
                        </div>
                        <div>
                            <div class="text-3xl font-extrabold text-primary mb-1">5+</div>
                            <div class="text-xs font-display text-gold-600 uppercase tracking-widest font-bold">Ani Experiență</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DESKTOP Services Section -->
        <section class="hidden md:block py-20 bg-background relative border-t border-slate-200/60">
            <div class="max-w-6xl mx-auto px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="text-gold-500 font-display text-xs tracking-widest uppercase font-bold mb-3 block">Portofoliu</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-primary mb-4 tracking-tight">Servicii Specializate</h2>
                    <p class="text-base text-on-surface-variant font-light">Soluții adaptate nevoilor specifice ale fiecărui tip de mediu, livrate cu o atenție obsesivă la detalii.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Residential -->
                    <div class="bg-surface rounded-2xl p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group border border-slate-100 relative overflow-hidden flex flex-col h-full">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-gold-500/5 rounded-bl-full -z-10 group-hover:scale-125 transition-transform duration-500"></div>
                        <div class="mb-6 w-12 h-12 rounded-xl bg-primary/5 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <span class="material-symbols-outlined text-2xl fill-icon" data-icon="home">home</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-3 font-display">Reședințe de Lux</h3>
                        <p class="text-sm text-on-surface-variant font-light mb-8 flex-grow">
                            Întreținere impecabilă pentru locuințe premium. Utilizăm produse delicate cu suprafețele fine, dar dure cu impuritățile.
                        </p>
                        <a class="text-gold-600 font-display font-bold uppercase text-xs tracking-wider flex items-center gap-1 group-hover:gap-2 transition-all duration-300" href="#">
                            Află Mai Multe <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>
                        </a>
                    </div>
                    
                    <!-- Medical (Highlighted) -->
                    <div class="bg-primary rounded-2xl p-8 shadow-lg hover:-translate-y-1 transition-all duration-300 group relative overflow-hidden flex flex-col h-full">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==')] opacity-40"></div>
                        <div class="mb-6 w-12 h-12 rounded-xl gold-gradient-bg text-primary-container flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-300 relative z-10">
                            <span class="material-symbols-outlined text-2xl fill-icon" data-icon="medical_services">medical_services</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-3 font-display relative z-10">Spații Medicale</h3>
                        <p class="text-sm text-white/80 font-light mb-8 flex-grow relative z-10">
                            Sterilizare și decontaminare la standarde spitalicești. Protocoale stricte pentru clinici și cabinete stomatologice.
                        </p>
                        <a class="text-gold-400 font-display font-bold uppercase text-xs tracking-wider flex items-center gap-1 group-hover:gap-2 transition-all duration-300 relative z-10" href="#">
                            Află Mai Multe <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>
                        </a>
                    </div>
                    
                    <!-- Commercial -->
                    <div class="bg-surface rounded-2xl p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group border border-slate-100 relative overflow-hidden flex flex-col h-full">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-gold-500/5 rounded-bl-full -z-10 group-hover:scale-125 transition-transform duration-500"></div>
                        <div class="mb-6 w-12 h-12 rounded-xl bg-primary/5 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <span class="material-symbols-outlined text-2xl fill-icon" data-icon="business">business</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-3 font-display">Spații Corporate</h3>
                        <p class="text-sm text-on-surface-variant font-light mb-8 flex-grow">
                            Un mediu de lucru impecabil reflectă profesionalismul companiei. Servicii discrete, adaptate programului office.
                        </p>
                        <a class="text-gold-600 font-display font-bold uppercase text-xs tracking-wider flex items-center gap-1 group-hover:gap-2 transition-all duration-300" href="#">
                            Află Mai Multe <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- MOBILE Quick Contact Section -->
        <section class="px-5 py-section-padding-mobile bg-primary text-on-primary md:hidden">
            <div class="text-center mb-10">
                <span class="material-symbols-outlined text-secondary-container text-[48px] mb-4">support_agent</span>
                <h2 class="font-headline-md text-headline-md mb-3 text-white">Ai nevoie de ajutor?</h2>
                <p class="font-body-md text-body-md text-inverse-primary/80">Echipa noastră este pregătită să îți ofere soluția optimă de curățenie.</p>
            </div>
            <form class="flex flex-col gap-6 bg-white/5 p-7 rounded-2xl border border-white/10 backdrop-blur-sm">
                <div class="flex flex-col">
                    <label class="font-label-caps text-label-caps text-inverse-primary mb-2 opacity-80">Nume Complet</label>
                    <input class="bg-white/10 border-0 border-b-2 border-white/20 focus:border-secondary focus:ring-0 px-4 py-4 min-h-[56px] text-white font-body-md placeholder-white/30 rounded-t-lg transition-colors" placeholder="Ex: Ion Popescu" type="text"/>
                </div>
                <div class="flex flex-col">
                    <label class="font-label-caps text-label-caps text-inverse-primary mb-2 opacity-80">Telefon</label>
                    <input class="bg-white/10 border-0 border-b-2 border-white/20 focus:border-secondary focus:ring-0 px-4 py-4 min-h-[56px] text-white font-body-md placeholder-white/30 rounded-t-lg transition-colors" placeholder="07xx xxx xxx" type="tel"/>
                </div>
                <button class="mt-6 bg-secondary-container text-on-secondary-container font-button-text text-button-text rounded-full min-h-[56px] px-6 flex items-center justify-center gap-2 w-full hover:bg-secondary-container/90 transition-all shadow-lg active:scale-[0.98]" type="button">
                    Solicită Apel
                </button>
            </form>
        </section>
    </main>

    <!-- Unified Responsive Footer -->
    <footer class="bg-primary dark:bg-tertiary w-full py-section-padding-mobile md:py-section-padding-desktop px-gutter flex flex-col md:flex-row justify-between items-start gap-8">
<div class="flex flex-col gap-4 max-w-sm">
<span class="text-headline-sm font-headline-sm text-secondary">Velsen</span>
<p class="text-body-md font-body-md text-on-primary/80 dark:text-on-tertiary/80">
                Soluții profesionale de curățenie pentru medii exigente, definite prin precizie și standarde clinice.
            </p>
<p class="text-body-md font-body-md text-on-primary/60 dark:text-on-tertiary/60 mt-4 text-sm">
                © 2024 Velsen Servicii de Curățenie Profesională. Toate drepturile rezervate.
            </p>
</div>
<div class="flex flex-col gap-4">
<h4 class="text-label-caps font-label-caps text-on-primary dark:text-on-tertiary mb-2">Servicii</h4>
<a class="text-on-primary/80 dark:text-on-tertiary/80 hover:text-secondary transition-colors duration-200 text-body-md font-body-md" href="/servicii">Servicii Rezidențiale</a>
<a class="text-on-primary/80 dark:text-on-tertiary/80 hover:text-secondary transition-colors duration-200 text-body-md font-body-md" href="/servicii">Servicii Medicale</a>
<a class="text-on-primary/80 dark:text-on-tertiary/80 hover:text-secondary transition-colors duration-200 text-body-md font-body-md" href="/servicii">Curățenie Comercială</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="text-label-caps font-label-caps text-on-primary dark:text-on-tertiary mb-2">Legal</h4>
<a class="text-on-primary/80 dark:text-on-tertiary/80 hover:text-secondary transition-colors duration-200 text-body-md font-body-md" href="/">Termeni și Condiții</a>
<a class="text-on-primary/80 dark:text-on-tertiary/80 hover:text-secondary transition-colors duration-200 text-body-md font-body-md" href="/">Politică de Confidențialitate</a>
</div>
    </footer>
</body>
</html>
