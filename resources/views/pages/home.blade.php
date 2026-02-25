@extends('layouts.app')

@section('content')
    <!-- Section 1: Hero -->
    <section class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-dark">
        <!-- YouTube Background Container -->
        <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300%] h-[300%] lg:w-[150%] lg:h-[150%]">
                <iframe class="w-full h-full"
                    src="https://www.youtube.com/embed/bYVWoTYm7XQ?autoplay=1&mute=1&controls=0&loop=1&playlist=bYVWoTYm7XQ&showinfo=0&rel=0&iv_load_policy=3&disablekb=1&enablejsapi=1"
                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            </div>
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <!-- Text removed as requested -->
        <div class="container mx-auto px-6 relative z-10 text-center">
        </div>

        <!-- Hero Stats Bar (Optional, keeping it as it was in the image or integrated differently) -->
    </section>

    <!-- Project Title Section (from image) -->
    <section class="bg-primary py-12 text-center text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl md:text-3xl font-bold leading-tight">
                45 Yıldır ; Geleneklerimizin Işığında,<br>
                Geleceğe Daha Sağlam Ve Modern Yapılar<br>
                İnşaa Ediyoruz.
            </h2>
        </div>
    </section>

    <!-- Section 2: Hizmetler Grid -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Pattern (Subtle Lines/Grid) -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(var(--color-primary) 1px, transparent 0); background-size: 40px 40px;"></div>
            <!-- Diagonal Lines -->
            <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(45deg, var(--color-primary), var(--color-primary) 1px, transparent 1px, transparent 20px);"></div>
            
            <!-- Large Geometric Accents -->
            <div class="absolute -top-24 -left-24 w-96 h-96 border border-primary/10 rounded-full"></div>
            <div class="absolute top-1/2 -right-48 w-[500px] h-[500px] border border-primary/5 rounded-full"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-14 reveal-up">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">HİZMETLERİMİZ</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-5"></div>
                <p class="text-gray-500 max-w-2xl mx-auto">İnşaat ve mimari alanındaki uzmanlığımızla, projenin her aşamasında profesyonel çözümler üretiyoruz.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal-up perspective-1000">
                @foreach($services as $service)
                    <div class="group relative block h-[400px]">
                        <div class="flip-card-inner h-full w-full">
                            <!-- Front -->
                            <div class="flip-card-front shadow-xl rounded-3xl overflow-hidden border border-gray-100">
                                <img src="{{ Str::startsWith($service->image, 'http') ? $service->image : asset('storage/' . $service->image) }}" 
                                    alt="{{ $service->title }}"
                                    class="w-full h-full object-cover">
                                <!-- Title Badge -->
                                <div
                                    class="absolute bottom-6 left-1/2 -translate-x-1/2 w-[85%] bg-primary/95 backdrop-blur-sm py-4 px-4 rounded-2xl text-center border border-white/20">
                                    <h3 class="text-white text-xs md:text-sm font-bold tracking-wider uppercase leading-tight">
                                        {{ $service->title }}
                                    </h3>
                                </div>
                            </div>
                            <!-- Back -->
                            <div class="flip-card-back shadow-2xl rounded-3xl p-8 bg-primary">
                                <h3 class="text-xl font-bold mb-4 uppercase tracking-tighter text-white">{{ $service->title }}</h3>
                                <p class="text-sm opacity-90 leading-relaxed mb-6 text-white line-clamp-4">
                                    {{ $service->description }}
                                </p>
                                <a href="{{ route('services.show', $service->slug) }}"
                                    class="inline-block border-2 border-white px-8 py-3 text-xs font-bold uppercase tracking-widest text-white hover:bg-white hover:text-primary transition-all rounded-xl">
                                    DETAYLAR <i class="fas fa-arrow-right ml-2 text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-20 reveal-up">
                <a href="{{ route('services.index') }}"
                    class="inline-block bg-primary text-white px-12 py-4 font-bold uppercase tracking-widest hover:bg-primary-dark transition-all rounded-xl shadow-xl">
                    Tüm Hizmetlerimizi Gör
                </a>
            </div>
        </div>
    </section>

    <!-- Section 3: Deprem Testi -->
    <section class="bg-primary py-20 relative overflow-hidden">
        <!-- Pulse Effect Background -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-white/5 rounded-full animate-ping">
        </div>

        <div class="container mx-auto px-6 relative z-10 flex flex-col items-center text-center text-white">
            <div class="mb-8 p-6 bg-white/10 rounded-full backdrop-blur-md">
                <i class="fas fa-shield-alt text-4xl"></i>
            </div>
            <h2 class="text-3xl md:text-4xl mb-5 font-bold uppercase tracking-wider">EVİNİZ DEPREME HAZIR MI?</h2>
            <p class="text-lg max-w-2xl mb-8 opacity-90 font-light">Mevcut yapılarınızın dayanıklılığını ölçüyor, profesyonel tekniklerle güçlendiriyoruz. Güvenli bir gelecek için bugün adım atın.</p>
            <a href="{{ route('earthquake-test') }}"
                class="px-12 py-5 bg-white text-primary font-bold uppercase tracking-[0.2em] text-sm rounded-2xl hover:scale-105 transition-transform shadow-2xl">
                ÜCRETSİZ BİLGİ ALIN
            </a>
        </div>
    </section>

    <!-- Section 4: Projelerimiz (Image 1/2 Style) -->
    <section class="py-20 bg-gray-50 text-center relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="mb-14 reveal-up">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">PROJELERİMİZ</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto">Hayallerinizdeki yaşam alanlarını, kalite ve estetiğin buluştuğu özgün projelerle inşa ediyoruz.</p>
            </div>

            <div class="relative px-4 md:px-12">
                <div class="swiper projects-slider">
                    <div class="swiper-wrapper">
                        @foreach($projects as $project)
                            <div class="swiper-slide">
                                <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 group border border-gray-100 h-full flex flex-col">
                                    <!-- Image Cover -->
                                    <div class="h-[280px] relative overflow-hidden">
                                        <img src="{{ Str::startsWith($project->image, 'http') ? $project->image : asset('storage/' . $project->image) }}"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                            alt="{{ $project->title }}">
                                        @if($project->status == 'ongoing')
                                            <div class="absolute top-6 left-6 bg-warning text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-lg">Devam Ediyor</div>
                                        @elseif($project->status == 'completed')
                                            <div class="absolute top-6 left-6 bg-success text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-lg">Tamamlandı</div>
                                        @endif
                                    </div>
                                    
                                    <!-- Teal Content (reduced height so image dominates) -->
                                    <div class="bg-primary px-6 py-4 flex flex-col text-left text-white relative">
                                        <h3 class="text-base md:text-lg font-bold mb-2 tracking-tight uppercase">{{ $project->title }}</h3>
                                        <div class="w-full h-px bg-white/20 mb-3"></div>
                                        
                                        <div class="space-y-2 mb-4 text-xs md:text-sm">
                                            <div class="flex items-center text-sm">
                                                <i class="fas fa-map-marker-alt w-6 text-white/60"></i>
                                                <span class="font-medium">{{ $project->location ?? 'Belirtilmedi' }}</span>
                                            </div>
                                            
                                            <div class="flex items-start text-sm">
                                                <i class="fas fa-building w-6 mt-1 text-white/60"></i>
                                                <div class="flex flex-wrap gap-2">
                                                    @foreach(explode(',', $project->category) as $cat)
                                                        <span class="font-medium whitespace-nowrap">{{ trim($cat) }}</span>
                                                        @if(!$loop->last) <span class="opacity-30">•</span> @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto flex justify-end">
                                            <a href="{{ route('projects.show', $project->slug) }}" 
                                                class="bg-dark/40 hover:bg-dark py-3 px-8 rounded-xl text-xs font-bold uppercase tracking-widest transition-all">
                                                DETAYLAR
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Slider Navigation -->
                <button class="swiper-prev absolute left-0 top-1/2 -translate-y-1/2 w-12 h-12 bg-white text-primary rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all z-20 shadow-xl -ml-2">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="swiper-next absolute right-0 top-1/2 -translate-y-1/2 w-12 h-12 bg-white text-primary rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all z-20 shadow-xl -mr-2">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="mt-16 reveal-up">
                <a href="{{ route('projects.index') }}" class="text-primary font-bold uppercase tracking-widest hover:underline whitespace-nowrap">
                    TÜM PROJELERİMİZİ GÖSTER <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Section 5: Stats -->
    <section class="py-16 bg-primary text-white border-y border-white/10">
        <div class="container mx-auto px-6 text-center">
            <p class="mb-16 text-lg opacity-90 max-w-3xl mx-auto uppercase tracking-widest">Yılların verdiği tecrübe ve
                yüzlerce projeyi başarıyla teslim etmenin haklı gururu.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 reveal-up">
                <div class="flex flex-col items-center">
                    <i class="fas fa-hammer text-4xl mb-6 text-white"></i>
                    <span class="text-6xl font-bold counter" data-target="12">0</span>
                    <span class="text-sm uppercase tracking-widest mt-4 font-bold">Devam Eden Projeler</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-check-double text-4xl mb-6 text-white"></i>
                    <span class="text-6xl font-bold counter" data-target="78">0</span>
                    <span class="text-sm uppercase tracking-widest mt-4 font-bold">Başarı ile Tamamlanan</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-users text-4xl mb-6 text-white"></i>
                    <span class="text-6xl font-bold counter" data-target="2340">0</span>
                    <span class="text-sm uppercase tracking-widest mt-4 font-bold">Mutlu Müşteriler</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: CTA and Stats Image -->
    <section class="relative py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="reveal-up">
                <img src="https://picsum.photos/seed/stats-img/800/800" class="w-full h-auto rounded-lg shadow-2xl"
                    alt="Stats Section">
            </div>
            <div class="reveal-up bg-white p-8 lg:p-16 border-l-4 border-primary">
                <h3 class="text-primary text-4xl mb-4 font-bold">45 YILLIK TECRÜBE, GÜVENLİ GELECEK</h3>
                <div class="w-20 h-1 bg-primary mb-8"></div>
                <p class="text-gray-600 mb-8 leading-relaxed">İmkan Geliştirme olarak kurulduğumuz günden bu yana, güvenli
                    ve modern yaşam alanları inşaa etmeyi görev edindik. Her projede daha iyiyi hedefleyerek sektöre öncülük
                    ediyoruz.</p>
            </div>
        </div>
    </section>

    <!-- Section 7: Final CTA -->
    <section class="bg-primary py-14 text-center text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 uppercase tracking-wider">Projenize Başlamaya Hazırız</h2>
            <a href="{{ route('contact.index') }}"
                class="inline-block border-2 border-white text-white px-10 py-3 font-bold uppercase tracking-widest hover:bg-white hover:text-primary transition-all rounded-xl">
                Bize Ulaşın
            </a>
        </div>
    </section>

    <!-- Section 8: İletişim + Harita -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 reveal-up">
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-4">BİZE MESAJ GÖNDERİN</h3>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto">Uzman ekibimiz en kısa sürede sizinle iletişime geçecektir.
                    Projeleriniz hakkında her türlü soruyu sorabilirsiniz.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 shadow-2xl reveal-up lg:min-h-[260px] rounded-[2rem] overflow-hidden bg-white">
                <!-- Map Side -->
                <div class="h-48 lg:h-full bg-gray-100 overflow-hidden lg:rounded-none">
                    <iframe title="İmkan Geliştirme Harita" class="w-full h-full"
                        src="https://www.google.com/maps?q=Marmara%2021.%20Sokak%2032/1,%20Nicosia&output=embed"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!-- Form Side -->
                <div
                    class="bg-white p-5 lg:p-6 flex flex-col justify-center h-full">
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" x-data="{ sending: false }"
                        @submit="sending = true">
                        @csrf
                        <div>
                            <label class="block text-primary text-xs font-bold uppercase mb-2 ml-1">Ad Soyad*</label>
                            <input type="text" name="name" required
                                class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl text-dark focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <label class="block text-primary text-xs font-bold uppercase mb-2 ml-1">Email</label>
                            <input type="email" name="email" required
                                class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl text-dark focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <label class="block text-primary text-xs font-bold uppercase mb-2 ml-1">Telefon</label>
                            <input type="tel" name="phone"
                                class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl text-dark focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <label class="block text-primary text-xs font-bold uppercase mb-2 ml-1">Mesaj</label>
                            <textarea name="message" rows="4" required
                                class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl text-dark focus:outline-none focus:border-primary transition-colors"></textarea>
                        </div>

                        @if(session('success'))
                            <div class="p-4 bg-green-500/10 border border-green-500 text-green-600 text-sm">
                                {{ session('success') }}
                            </div>
                        @endif

                        <button type="submit" :disabled="sending"
                            class="w-full bg-primary text-white py-4 font-bold uppercase tracking-widest hover:bg-primary-dark transition-all rounded-xl shadow-lg"
                            :class="{ 'opacity-50 cursor-not-allowed': sending }">
                            <span x-show="!sending">Gönder</span>
                            <span x-show="sending">Gönderiliyor...</span>
                        </button>
                    </form>
                </div>
            </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Hero title animation
            gsap.from('#hero-title', {
                y: 100,
                opacity: 0,
                duration: 1.5,
                ease: "power4.out",
                delay: 1.2
            });

            gsap.to('#hero-ctas', {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power2.out",
                delay: 1.8
            });

            // Projects Slider
            new Swiper('.projects-slider', {
                modules: [window.SwiperModules.Navigation, window.SwiperModules.Pagination, window.SwiperModules.Autoplay],
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: '.swiper-next',
                    prevEl: '.swiper-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    }
                }
            });
            gsap.to('.projects-slider', { opacity: 1, duration: 1, delay: 0.5 });

            // Counter Animation
            const counters = document.querySelectorAll('.counter');
            const observerOptions = {
                threshold: 0.5
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseInt(entry.target.getAttribute('data-target'));
                        const duration = 2000; // 2 seconds
                        const startTime = performance.now();

                        const updateCounter = (currentTime) => {
                            const elapsedTime = currentTime - startTime;
                            const progress = Math.min(elapsedTime / duration, 1);
                            const currentCount = Math.floor(progress * target);

                            entry.target.innerText = currentCount.toLocaleString();

                            if (progress < 1) {
                                requestAnimationFrame(updateCounter);
                            } else {
                                entry.target.innerText = target.toLocaleString();
                            }
                        };

                        requestAnimationFrame(updateCounter);
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
@endpush