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
                    <a href="https://www.facebook.com/imkandevelopment" target="_blank"
                        class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all duration-300">
                        <i class="fab fa-facebook-f text-xs"></i>
                    </a>
                    <a href="https://www.instagram.com/imkandevelopment/" target="_blank"
                        class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all duration-300">
                        <i class="fab fa-instagram text-xs"></i>
                    </a>
                    <a href="https://wa.me/905488500850" target="_blank"
                        class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-primary transition-all duration-300">
                        <i class="fab fa-whatsapp text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Projects -->
            <div>
                <h4 class="text-lg font-bold mb-8 uppercase tracking-widest">Projeler</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    @foreach($footerProjects as $project)
                        <li>
                            <a href="{{ route('projects.show', $project->slug) }}"
                                class="hover:text-white transition-colors">
                                {{ $project->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-bold mb-8 uppercase tracking-widest">Hizmetlerimiz</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    @foreach($navServices as $service)
                        <li>
                            <a href="{{ route('services.show', $service->slug) }}"
                                class="hover:text-white transition-colors">
                                {{ $service->title }}
                            </a>
                        </li>
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
                        <span>Marmara 21. Sokak 32/1, Nicosia</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <a href="mailto:info@imkandevelopment.com"
                            class="hover:text-white transition-colors">info@imkandevelopment.com</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.5 5.75C2.5 4.783 3.283 4 4.25 4h2.1c.6 0 1.13.337 1.39.87l1.24 2.58a1.5 1.5 0 01-.42 1.79l-1.28 1.06a.75.75 0 00-.21.9 8.5 8.5 0 004.51 4.51.75.75 0 00.9-.21l1.06-1.28a1.5 1.5 0 011.79-.42l2.58 1.24c.533.26.87.79.87 1.39v2.1c0 .967-.783 1.75-1.75 1.75H17c-7.18 0-13-5.82-13-13V5.75z">
                            </path>
                        </svg>
                        <a href="tel:+905488500850" class="hover:text-white transition-colors">+90 548 850 08 50</a>
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