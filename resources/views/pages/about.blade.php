@extends('layouts.app')

@section('title', 'Hakkımızda — İmkan Geliştirme A.Ş.')

@section('content')
    <section class="pt-60 pb-32 bg-[#006272] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(white 1px, transparent 0); background-size: 30px 30px;"></div>
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-7xl font-bold mb-8 reveal-up uppercase tracking-tight">45 YILLIK GÜVEN HİKAYESİ
                </h1>
                <div class="w-32 h-1.5 bg-white mx-auto mb-10 rounded-full reveal-up"></div>
                <p class="text-xl md:text-2xl text-white/90 leading-relaxed font-light reveal-up">1981 yılında başladığımız
                    mühendislik yolculuğumuza, bugün modern yapılar ve ödüllü projelerle devam ediyoruz.</p>
            </div>
        </div>
    </section>

    <section class="py-32 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="reveal-up relative group">
                    <div
                        class="absolute -inset-4 bg-primary/5 rounded-[3rem] transform -rotate-3 transition-transform group-hover:rotate-0">
                    </div>
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070&auto=format&fit=crop"
                        alt="Hakkımızda" class="relative rounded-[2.5rem] shadow-2xl z-10">
                </div>
                <div class="space-y-12 stagger-reveal">
                    <div class="reveal-up">
                        <span class="text-xs font-bold text-primary uppercase tracking-[0.3em] mb-4 block">Hakkımızda</span>
                        <h2 class="text-4xl font-bold text-primary mb-6 uppercase">MİSYONUMUZ</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">Gelecek nesillere, modern, güvenli ve estetik
                            değeri yüksek yaşam alanları bırakmak. Mühendislik etik değerlerinden ödün vermeden, en yeni
                            teknolojileri projelerimize entegre etmek.</p>
                    </div>
                    <div class="reveal-up">
                        <h2 class="text-4xl font-bold text-primary mb-6 uppercase uppercase">VİZYONUMUZ</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">İnşaat sektöründe sürdürülebilirlik ve
                            modernizasyonun öncüsü kalarak, ulusal ve uluslararası arenada güvenin simgesi olmaya devam
                            etmek.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-8 reveal-up">
                        <div
                            class="p-10 bg-gray-50 rounded-[2.5rem] border border-gray-100 hover:shadow-xl transition-all duration-500 text-center">
                            <div class="text-5xl font-bold text-primary mb-3 tracking-tighter">45+</div>
                            <div class="text-[10px] uppercase tracking-widest font-bold text-gray-400">Yıllık Tecrübe</div>
                        </div>
                        <div
                            class="p-10 bg-gray-50 rounded-[2.5rem] border border-gray-100 hover:shadow-xl transition-all duration-500 text-center">
                            <div class="text-5xl font-bold text-primary mb-3 tracking-tighter">100+</div>
                            <div class="text-[10px] uppercase tracking-widest font-bold text-gray-400">Teslim Proje</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection