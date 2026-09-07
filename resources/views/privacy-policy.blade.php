<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | VELSEN</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&family=Manrope:wght@600;700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#001b44',
                        secondary: '#e05a10',
                        surface: '#fcf9f8',
                        'on-surface': '#1c1b1b',
                        'on-surface-variant': '#434750'
                    },
                    fontFamily: {
                        body: ['Work Sans'],
                        display: ['Manrope'],
                        label: ['Hanken Grotesk']
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface text-on-surface font-body antialiased">
    <header class="border-b border-primary/10 bg-white">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-5 md:px-8">
            <a href="{{ url('/') }}" class="font-display text-2xl font-bold tracking-wide text-primary">VELSEN</a>
            <a href="{{ url('/') }}" class="font-label text-sm font-semibold text-primary transition-colors hover:text-secondary">Back to home</a>
        </div>
    </header>

    <main class="mx-auto max-w-4xl px-5 py-14 md:px-8 md:py-20">
        <div class="mb-10 border-b border-primary/10 pb-8">
            <p class="mb-3 font-label text-xs font-bold uppercase tracking-[0.16em] text-secondary">Legal</p>
            <h1 class="font-display text-4xl font-bold leading-tight text-primary md:text-5xl">VELSEN Privacy Policy</h1>
        </div>

        <article class="space-y-8 text-base leading-8 text-on-surface-variant">
            <p>VELSEN respects your privacy and is committed to protecting your personal data.</p>

            <p>When you submit information through our website, contact forms, or advertising lead forms, we may collect personal information such as your name, email address, phone number, company name, job title, and details related to your service request.</p>

            <section>
                <h2 class="mb-3 font-display text-2xl font-bold text-primary">How we use your information</h2>
                <p class="mb-3">We use this information only to:</p>
                <ul class="list-disc space-y-2 pl-6">
                    <li>respond to enquiries;</li>
                    <li>prepare quotations;</li>
                    <li>arrange site visits;</li>
                    <li>discuss potential business cooperation;</li>
                    <li>provide requested services;</li>
                    <li>follow up on submitted requests.</li>
                </ul>
            </section>

            <p>VELSEN does not sell personal data to third parties.</p>

            <p>Personal information may only be shared with trusted service providers when necessary for business operations and only where appropriate safeguards are in place.</p>

            <p>We take reasonable measures to protect personal data against unauthorized access, loss, misuse, or disclosure.</p>

            <p>Under applicable data protection laws, including the GDPR, you may request access to your personal data, correction, deletion, restriction of processing, or withdrawal of consent where applicable.</p>

            <section class="border-l-4 border-secondary bg-white px-6 py-5">
                <h2 class="mb-3 font-display text-2xl font-bold text-primary">Contact</h2>
                <p>For any privacy-related questions or requests, please contact:</p>
                <address class="mt-4 not-italic">
                    <strong class="text-primary">VELSEN GROUP S.R.L.</strong><br>
                    Phone: <a class="font-semibold text-secondary hover:text-primary" href="tel:+40724101196">+40 (724) 101 196</a><br>
                    Email: <a class="font-semibold text-secondary hover:text-primary" href="mailto:info@velsengroup.ro">info@velsengroup.ro</a><br>
                    Brașov, Romania
                </address>
            </section>

            <p>By submitting your information through our website or lead forms, you acknowledge that your personal data may be processed in accordance with this Privacy Policy.</p>
        </article>
    </main>

    <footer class="bg-primary px-5 py-8 text-center text-sm text-white/70 md:px-8">
        <p>&copy; 2026 Velsen Servicii de Curățenie Profesională. All rights reserved.</p>
    </footer>
</body>
</html>
