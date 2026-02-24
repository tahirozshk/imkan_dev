<footer class="bg-primary-dark text-white pt-20 pb-10">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- About -->
            <div class="space-y-6">
                <div class="text-3xl font-title tracking-tighter font-bold">İMKAN <span
                        class="text-white/50 font-light">GELİŞTİRME</span></div>
                <p class="text-white/60 leading-relaxed font-body text-sm">
                    45 yıllık köklü geçmişimizle, inşaat ve mühendislik dünyasında güvenin simgesi olmaya devam
                    ediyoruz. Geleceğin sağlam yapılarını bugün inşa ediyoruz.
                </p>
                <div class="flex space-x-3">
                    <a href="#"
                        class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all duration-300">
                        <i class="fab fa-facebook-f text-xs"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all duration-300">
                        <i class="fab fa-instagram text-xs"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all duration-300">
                        <i class="fab fa-linkedin-in text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-bold mb-8 uppercase tracking-widest">Kurumsal</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Hakkımızda</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Vizyon & Misyon</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Yönetim Kurulu</a></li>
                    <li><a href="{{ route('contact.index') }}" class="hover:text-white transition-colors">İletişim</a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-bold mb-8 uppercase tracking-widest">Hizmetlerimiz</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    @foreach($navServices->take(4) as $service)
                        <li><a href="{{ route('services.show', $service->slug) }}"
                                class="hover:text-white transition-colors">{{ $service->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-lg font-bold mb-8 uppercase tracking-widest">Bize Ulaşın</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-3 mt-1 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Silifke, Mersin</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <a href="mailto:info@imkangilistirme.com"
                            class="hover:text-white transition-colors">info@imkangilistirme.com</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <a href="tel:+905320000000" class="hover:text-white transition-colors">+90 532 000 00 00</a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="border-t border-white/10 pt-10 flex flex-col md:flex-row justify-between items-center text-xs text-white/40">
            <p>&copy; {{ date('Y') }} İmkan Geliştirme A.Ş. Tüm hakları saklıdır.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Gizlilik Politikası</a>
                <a href="#" class="hover:text-white transition-colors">KVKK</a>
            </div>
        </div>
    </div>
</footer>