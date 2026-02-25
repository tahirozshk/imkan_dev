@extends('layouts.app')

@section('title', $service->title . ' — İmkan Geliştirme A.Ş.')

@section('content')
    <section class="pt-40 pb-18 bg-[#006272] text-white overflow-hidden relative">
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(white 1px, transparent 0); background-size: 30px 30px;"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="reveal-up">
                <nav class="flex mb-6 text-[10px] md:text-xs font-bold uppercase tracking-widest text-white/60">
                    <a href="{{ route('home') }}" class="hover:text-white">Anasayfa</a>
                    <span class="mx-3">/</span>
                    <a href="{{ route('services.index') }}" class="hover:text-white">Hizmetlerimiz</a>
                    <span class="mx-3">/</span>
                    <span class="text-white">{{ $service->title }}</span>
                </nav>
                <h1 class="text-3xl md:text-5xl font-bold tracking-tight mb-4 uppercase">{{ $service->title }}</h1>
                <div class="w-20 h-1 bg-white mb-4"></div>
                @if($service->description)
                    <p class="text-white/80 max-w-2xl text-sm md:text-base font-light">
                        {{ Str::limit(strip_tags($service->description), 180) }}
                    </p>
                @endif
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Content -->
                <div class="order-2 lg:order-1 reveal-up">
                    <h2 class="text-2xl font-bold text-primary mb-6 uppercase tracking-wider">HİZMET DETAYLARI</h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed mb-8">
                        {!! $service->content ?? $service->description !!}
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                            <h4 class="font-bold text-dark mb-2 uppercase text-sm tracking-widest">Planlama</h4>
                            <p class="text-xs text-gray-500">Her projeyi sizin ihtiyaçlarınıza ve bütçenize göre titizlikle
                                planlıyoruz.</p>
                        </div>
                        <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                            <h4 class="font-bold text-dark mb-2 uppercase text-sm tracking-widest">Uygulama</h4>
                            <p class="text-xs text-gray-500">Alanında uzman ekiplerimizle projeyi zamanında ve kusursuz
                                teslim ediyoruz.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="order-1 lg:order-2 reveal-up">
                    <div class="relative group">
                        <div
                            class="absolute -inset-3 bg-primary/5 rounded-[3rem] transform rotate-3 transition-transform group-hover:rotate-0">
                        </div>
                        <img src="{{ Str::startsWith($service->image, 'http') ? $service->image : asset('storage/' . $service->image) }}"
                            class="relative w-full h-[480px] object-cover rounded-[2.5rem] shadow-2xl z-10"
                            alt="{{ $service->title }}">

                        <!-- Floating Badge -->
                        <div
                            class="absolute -bottom-8 -left-8 bg-white p-8 rounded-3xl shadow-2xl z-20 border border-gray-100 max-w-[240px] hidden md:block">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-white">
                                    <i class="fas fa-check-circle text-2xl"></i>
                                </div>
                                <span class="text-sm font-bold text-primary uppercase leading-tight tracking-wider">Garanti
                                    & Güven</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Segment -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 reveal-up">
                <h2 class="text-2xl font-bold text-primary uppercase tracking-[0.2em]">NEDEN BİZİ SEÇMELİSİNİZ?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                        ['icon' => 'fas fa-shield-alt', 'title' => 'GÜVENİLİRLİK', 'desc' => '45 yıllık tecrübemizle sektörde güvenin simgesi halindeyiz.'],
                        ['icon' => 'fas fa-clock', 'title' => 'SÖZÜMÜZ SÖZ', 'desc' => 'Projelerimizi söz verdiğimiz tarihte, eksiksiz teslim ediyoruz.'],
                        ['icon' => 'fas fa-hand-holding-usd', 'title' => 'ŞEFFAF MALİYET', 'desc' => 'Tüm süreçte maliyetleri açık ve dürüst şekilde paylaşıyoruz.']
                    ] as $item)
                    <div class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-500 text-center reveal-up">
                        <div class="w-20 h-20 bg-primary/5 rounded-3xl flex items-center justify-center mx-auto mb-8 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <i class="{{ $item['icon'] }} text-3xl"></i>
                            </div>
                            <h4 class="text-lg font-bold text-dark mb-4 tracking-widest">{{ $item['title'] }}</h4>
                            <p class="text-gray-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Final CTA -->
    <section class="bg-primary py-24 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 flex items-center justify-center">
            <i class="fas fa-tools text-[40rem] transform -rotate-12 translate-x-1/2"></i>

                   </div>
        <div class="container mx-auto px-6 relative z-
                   10">
            <h2 class="text-4xl font-bold mb-8 uppercase tracking-widest">PROJENİZ İÇİN TEKLİF ALIN</h2>
            <p class="text-white/80 max-w-xl mx-auto mb-10 text-lg">Alanında uzman ekibimizle hayalinizdeki projeyi hayata geçirelim.</p>
            <div class="flex flex-col md:fl
                   ex-row gap-6 justify-center">
                <a href="{{ route('contact.index') }}" class="px-12 py-4 bg-white text-primary font-bold uppercase tracking-widest rounded-2xl shadow-xl hover:scale-105 transition-transform">
                    İLETİŞİME GEÇİN
                </a>
                <a href="tel:+902120000000" class="px-12 py-4 border-2 border-white text-white font-bold uppercase tracking-widest rounded-2xl hover:bg-white hover:text-primary transition-all">
                    HEMEN ARAYIN
                    </a>
                </div>
            </div>
        </section>
@endsection