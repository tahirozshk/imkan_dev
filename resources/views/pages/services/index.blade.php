@extends('layouts.app')

@section('title', 'Hizmetlerimiz — İmkan Geliştirme A.Ş.')

@section('content')
    <section class="pt-48 pb-24 bg-[#006272] text-white overflow-hidden relative">
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(white 1px, transparent 0); background-size: 30px 30px;"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-4 reveal-up uppercase">HİZMETLERİMİZ</h1>
            <div class="w-24 h-1 bg-white mb-8 reveal-up"></div>
            <p class="text-white/80 max-w-2xl text-lg font-light reveal-up">İmkan Geliştirme olarak, inşaatın her aşamasında
                en yüksek kalite standartlarını ve modern mühendislik çözümlerini sunuyoruz.</p>
        </div>
    </section>

    <section class="py-24 bg-gray-50 relative">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 reveal-up">
                @foreach($services as $service)
                    <div
                        class="group bg-white rounded-[2.5rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col h-full transform hover:-translate-y-2">
                        <!-- Image Section -->
                        <div class="h-[240px] relative overflow-hidden">
                            <img src="{{ Str::startsWith($service->image, 'http') ? $service->image : asset('storage/' . $service->image) }}"
                                alt="{{ $service->title }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary/10 group-hover:bg-primary/0 transition-all duration-500">
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-10 flex-grow flex flex-col">
                            <h3
                                class="text-xl font-bold mb-6 text-primary tracking-tight uppercase leading-tight min-h-[3.5rem]">
                                {{ $service->title }}
                            </h3>
                            <div
                                class="w-12 h-0.5 bg-gray-200 mb-6 group-hover:w-24 group-hover:bg-primary transition-all duration-500">
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-8 line-clamp-3">
                                {{ $service->description }}
                            </p>

                            <div class="mt-auto">
                                <a href="{{ route('services.show', $service->slug) }}"
                                    class="inline-flex items-center text-primary font-bold uppercase tracking-widest text-[11px] hover:text-dark transition-colors group/link">
                                    DETAYLI BİLGİ <i
                                        class="fas fa-arrow-right ml-3 transform group-hover/link:translate-x-2 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Professional Standards -->
    <section class="py-24 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="reveal-up">
                    <div class="w-20 h-20 bg-primary/5 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <i class="fas fa-certificate text-primary text-3xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-dark mb-4 uppercase tracking-wider">Yüksek Kalite</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Projelerimizde yalnızca uluslararası standartlara
                        uygun, sertifikalı ve güvenilir malzemeler kullanıyoruz.</p>
                </div>
                <div class="reveal-up" style="transition-delay: 100ms">
                    <div class="w-20 h-20 bg-primary/5 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <i class="fas fa-microchip text-primary text-3xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-dark mb-4 uppercase tracking-wider">Modern Teknoloji</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">İnşaat süreçlerimizde en güncel dijital takip
                        sistemlerini ve modern ekipmanları tercih ediyoruz.</p>
                </div>
                <div class="reveal-up" style="transition-delay: 200ms">
                    <div class="w-20 h-20 bg-primary/5 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <i class="fas fa-user-tie text-primary text-3xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-dark mb-4 uppercase tracking-wider">Uzmank Ekip</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Mühendislerimizden sahaya kadar tüm çalışma
                        arkadaşlarımız alanında uzman ve tecrübelidir.</p>
                </div>
            </div>
        </div>
    </section>
@endsection