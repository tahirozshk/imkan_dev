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
    <a href="https://wa.me/905488500850" target="_blank"
        class="fixed bottom-6 right-6 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-transform flex items-center justify-center border-2 border-white/80">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    @stack('scripts')
</body>

</html>