<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'İmkan Geliştirme A.Ş. — 45 Yıllık Güven ve Tecrübe')</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="@yield('meta_description', 'İmkan Geliştirme A.Ş. 45 yıldır köklü bir inşaat ve mühendislik firması olarak modern ve sağlam yapılar inşa etmektedir.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-white text-dark font-body antialiased overflow-x-hidden">
    <!-- Loading Screen -->
    <div x-data="{ loading: true }" x-init="setTimeout(() => loading = false, 800)" x-show="loading"
        class="fixed inset-0 z-[9999] bg-primary flex flex-col items-center justify-center transition-opacity duration-500"
        :class="{ 'opacity-0 pointer-events-none': !loading }">
        <div class="text-4xl font-title text-white mb-4 font-bold tracking-widest">İMKAN</div>
        <div class="w-48 h-0.5 bg-white/20 rounded-full overflow-hidden">
            <div class="h-full bg-white animate-progress"></div>
        </div>
    </div>

    <div class="flex flex-col min-h-screen">
        @include('partials.navbar')

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/905000000000" target="_blank"
        class="fixed bottom-6 right-6 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-transform flex items-center justify-center">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.888-11.888 3.176 0 6.161 1.237 8.404 3.48s3.481 5.229 3.481 8.404c0 6.556-5.332 11.888-11.888 11.888-2.012 0-3.987-.511-5.741-1.48L0 24zm6.12-4.662l.366.217c1.552.921 3.328 1.408 5.151 1.408 5.518 0 10.012-4.494 10.012-10.012 0-2.671-1.041-5.181-2.928-7.068-1.887-1.887-4.398-2.928-7.068-2.928-5.518 0-10.012 4.494-10.012 10.012 0 1.834.488 3.63 1.413 5.204l.238.404-1.01 3.692 3.842-1.017zm8.309-4.48c-.299-.15-1.765-.87-2.039-.971-.274-.1-.474-.15-.674.15-.2.3-.772.971-.947 1.171-.174.2-.349.225-.648.075-.299-.15-1.265-.467-2.41-1.488-.891-.795-1.492-1.777-1.666-2.076-.174-.3-.019-.462.13-.611.135-.134.299-.349.449-.524.15-.174.2-.299.299-.499.1-.2.05-.374-.025-.524-.075-.15-.674-1.623-.924-2.221-.244-.588-.491-.508-.674-.518-.174-.009-.374-.011-.574-.011-.2 0-.524.075-.798.374-.274.3-.1.748.1 1.048.2.225.5.474.748.674 1.571 1.282 1.571 1.282 1.571 1.282zm-.299-4.48c-.299-.15-1.765-.87-2.039-.971-.274-.1-.474-.15-.674.15-.2.3-.772.971-.947 1.171-.174.2-.349.225-.648.075-.299-.15-1.265-.467-2.41-1.488-.891-.795-1.492-1.777-1.666-2.076-.174-.3-.019-.462.13-.611.135-.134.299-.349.449-.524.15-.174.2-.299.299-.499.1-.2.05-.374-.025-.524-.075-.15-.674-1.623-.924-2.221-.244-.588-.491-.508-.674-.518-.174-.009-.374-.011-.574-.011-.2 0-.524.075-.798.374-.274.3-.1.748.1 1.048.2.225.5.474.748.674 1.571 1.282 1.571 1.282 1.571 1.282z" />
        </svg>
    </a>

    @stack('scripts')
</body>

</html>