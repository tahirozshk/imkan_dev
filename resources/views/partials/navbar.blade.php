<nav x-data="{ 
    atTop: true, 
    mobileMenu: false 
}" x-init="window.addEventListener('scroll', () => { atTop = window.pageYOffset < 50 })"
    :class="atTop ? 'bg-transparent py-4' : 'bg-[#006272]/95 py-2 shadow-2xl backdrop-blur-md'"
    class="fixed w-full z-[100] transition-all duration-500 font-accent text-white border-b border-white/10">

    <div class="container mx-auto px-6">
        <!-- Top Row: Socials | Logo | Contact -->
        <div class="flex justify-between items-center mb-4 relative">
            <!-- Left: Socials -->
            <div class="flex items-center space-x-4 w-1/3">
                <a href="https://www.facebook.com/imkandevelopment" target="_blank"
                    class="hover:opacity-70 transition-opacity"><i class="fab fa-facebook-f text-lg"></i></a>
                <a href="https://www.instagram.com/imkandevelopment/" target="_blank"
                    class="hover:opacity-70 transition-opacity"><i class="fab fa-instagram text-lg"></i></a>
                <a href="https://wa.me/905488500850" target="_blank"
                    class="hover:opacity-70 transition-opacity"><i class="fab fa-whatsapp text-lg"></i></a>
            </div>

            <!-- Center: Logo -->
            <div class="w-1/3 flex flex-col items-center">
                <a href="{{ route('home') }}" class="flex flex-col items-center group">
                    <div class="relative mb-0.5">
                        <span class="text-3xl md:text-4xl font-bold tracking-tight leading-none">İMKAN</span>
                    </div>
                    <span class="text-[9px] md:text-[11px] tracking-[0.4em] font-light opacity-80 uppercase">İNŞAAT
                        A.Ş.</span>
                </a>
            </div>

            <!-- Right: Contact -->
            <div class="w-1/3 flex flex-col justify-end items-end space-y-1">
                <a href="tel:+905488500850"
                    class="flex items-center font-bold tracking-wider text-sm md:text-base hover:opacity-70 transition-opacity">
                    <i class="fas fa-phone-alt mr-3 text-lg rotate-12"></i>
                    +90 548 850 08 50
                </a>
                <a href="mailto:info@imkandevelopment.com"
                    class="flex items-center text-xs md:text-sm hover:opacity-70 transition-opacity">
                    <i class="fas fa-envelope mr-3 text-lg"></i>
                    info@imkandevelopment.com
                </a>
            </div>

            <!-- Mobile Toggle (Absolute Right on mobile) -->
            <div class="lg:hidden absolute right-0 top-1/2 -translate-y-1/2">
                <button @click="mobileMenu = !mobileMenu" class="text-white focus:outline-none">
                    <svg x-show="!mobileMenu" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <svg x-show="mobileMenu" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Bottom Row: Centered Navigation -->
        <div
            class="hidden lg:flex items-center justify-center space-x-8 xl:space-x-12 font-bold uppercase tracking-widest text-[11px] xl:text-[13px]">
            <a href="{{ route('home') }}" class="hover:opacity-60 transition-opacity">Anasayfa</a>
            <a href="{{ route('about') }}" class="hover:opacity-60 transition-opacity">Hakkımızda</a>
            <a href="{{ route('projects.index') }}" class="hover:opacity-60 transition-opacity">Projeler</a>
            <!-- Services Dropdown (Desktop) -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <a href="{{ route('services.index') }}" class="flex items-center hover:opacity-60 transition-opacity"
                    :class="open ? 'opacity-60' : ''">
                    HİZMETLERİMİZ <i class="fas fa-chevron-down ml-2 text-[8px] transition-transform duration-300"
                        :class="open ? 'rotate-180' : ''"></i>
                </a>

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1"
                    class="absolute left-1/2 -translate-x-1/2 mt-0 pt-6 w-72 z-50">
                    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 py-3 overflow-hidden">
                        @foreach($navServices as $service)
                            <a href="{{ route('services.show', $service->slug) }}"
                                class="block px-6 py-3 text-[11px] font-bold text-dark hover:bg-gray-50 hover:text-primary transition-all duration-300 border-b border-gray-50 last:border-0 uppercase tracking-wider">
                                {{ $service->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <a href="{{ route('earthquake-test') }}" class="hover:opacity-60 transition-opacity">KONUT DEPREM TESTİ</a>
            <a href="{{ route('contact.index') }}" class="hover:opacity-60 transition-opacity">BİZE ULAŞIN</a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
        class="lg:hidden bg-[#006272] border-t border-white/10 absolute w-full left-0 py-6 px-6 space-y-4 shadow-2xl">
        <a href="{{ route('home') }}"
            class="block text-white hover:text-white/70 text-lg font-bold uppercase tracking-widest">ANASAYFA</a>
        <a href="{{ route('about') }}"
            class="block text-white hover:text-white/70 text-lg font-bold uppercase tracking-widest">HAKKIMIZDA</a>
        <a href="{{ route('projects.index') }}"
            class="block text-white hover:text-white/70 text-lg font-bold uppercase tracking-widest">PROJELERİMİZ</a>
        <a href="{{ route('services.index') }}"
            class="block text-white hover:text-white/70 text-lg font-bold uppercase tracking-widest">HİZMETLERİMİZ</a>
        <a href="{{ route('earthquake-test') }}"
            class="block text-white hover:text-white/70 text-lg font-bold uppercase tracking-widest">DEPREM TESTİ</a>
        <a href="{{ route('contact.index') }}"
            class="block text-white hover:text-white/70 text-lg font-bold uppercase tracking-widest">İLETİŞİM</a>
        <hr class="border-white/10">
        <a href="tel:+905488500850" class="block text-white text-xl font-bold">+90 548 850 08 50</a>
        <a href="mailto:info@imkandevelopment.com" class="block text-white text-base mt-1">info@imkandevelopment.com</a>
    </div>
</nav>