@extends('layouts.app')

@section('title', 'İletişim — İmkan Geliştirme A.Ş.')

@section('content')
    <!-- Header Section -->
    <section class="pt-40 pb-18 bg-[#006272] text-white overflow-hidden relative">
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(white 1px, transparent 0); background-size: 30px 30px;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl">
                <h1 class="text-3xl md:text-5xl font-bold tracking-tight mb-4 reveal-up uppercase">İLETİŞİM</h1>
                <div class="w-20 h-1 bg-white mb-6 reveal-up"></div>
                <p class="text-white/80 max-w-2xl text-base md:text-lg font-light reveal-up">
                    Projeniz, sorularınız veya iş birliği teklifleriniz için her zaman buradayız. Geleceği birlikte inşa edelim.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

                <!-- Left Side: Contact Info (Minimal Boxed) -->
                <div class="lg:col-span-5 reveal-up">
                    <div
                        class="bg-white p-8 md:p-12 rounded-[3rem] shadow-2xl h-full flex flex-col justify-between border border-gray-50">
                        <div class="space-y-10">
                            <!-- Headline -->
                            <div>
                                <h2 class="text-3xl font-bold text-dark mb-4 tracking-tight uppercase">İLETİŞİM <span
                                        class="text-primary italic">BİLGİLERİ</span></h2>
                                <p class="text-gray-500 text-sm leading-relaxed">
                                    Bize her türlü soru ve önerileriniz için aşağıdaki kanallar üzerinden ulaşabilirsiniz.
                                </p>
                            </div>

                            <!-- Info Items -->
                            <div class="space-y-8">
                                <div class="flex items-start group">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center text-primary/40 group-hover:text-primary transition-colors duration-300 mr-4">
                                        <i class="fas fa-map-marker-alt text-xl"></i>
                                    </div>
                                    <div>
                                        <p
                                            class="text-sm font-bold text-dark mb-1 underline decoration-primary/20 underline-offset-4">
                                            Genel Merkez</p>
                                        <p class="text-gray-400 text-sm leading-relaxed">Marmara 21. Sokak 32/1<br>Nicosia</p>
                                    </div>
                                </div>

                                <div class="flex items-center group">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center text-primary/40 group-hover:text-primary transition-colors duration-300 mr-4">
                                        <i class="fas fa-phone-alt text-xl"></i>
                                    </div>
                                    <a href="tel:+905488500850"
                                        class="text-sm font-medium text-dark hover:text-primary transition-all tracking-wide">+90
                                        548 850 08 50</a>
                                </div>

                                <div class="flex items-center group">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center text-primary/40 group-hover:text-primary transition-colors duration-300 mr-4">
                                        <i class="fas fa-envelope text-xl"></i>
                                    </div>
                                    <a href="mailto:info@imkandevelopment.com"
                                        class="text-sm font-medium text-dark hover:text-primary transition-all">info@imkandevelopment.com</a>
                                </div>
                            </div>
                        </div>

                        <!-- Social (Minimal) -->
                        <div class="pt-12 flex items-center space-x-6">
                            <a href="https://www.facebook.com/imkandevelopment" target="_blank"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/imkandevelopment/" target="_blank"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://wa.me/905488500850" target="_blank"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-whatsapp text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="lg:col-span-7 reveal-up">
                    <div class="bg-white p-8 md:p-12 rounded-[3rem] shadow-2xl relative overflow-hidden">
                        <!-- Decorative Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl font-bold text-dark mb-4 uppercase tracking-tight">Hızlı <span
                                    class="text-primary italic">İletişim</span></h2>
                            <p class="text-gray-500">Aşağıdaki formu doldurarak bize mesaj bırakabilirsiniz. Ekibimiz en geç
                                24 saat içinde size geri dönüş yapacaktır.</p>
                        </div>

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6"
                            x-data="{ sending: false }" @submit="sending = true">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label
                                        class="block text-primary text-[10px] font-bold uppercase tracking-widest mb-3 ml-2">Ad
                                        Soyad</label>
                                    <input type="text" name="name" placeholder="Örn: Ahmet Yılmaz" required
                                        class="w-full bg-gray-50 border-2 border-transparent focus:border-primary/20 focus:bg-white p-4 rounded-2xl text-dark focus:outline-none transition-all duration-300">
                                </div>
                                <div>
                                    <label
                                        class="block text-primary text-[10px] font-bold uppercase tracking-widest mb-3 ml-2">E-posta
                                        Adresi</label>
                                    <input type="email" name="email" placeholder="example@company.com" required
                                        class="w-full bg-gray-50 border-2 border-transparent focus:border-primary/20 focus:bg-white p-4 rounded-2xl text-dark focus:outline-none transition-all duration-300">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label
                                        class="block text-primary text-[10px] font-bold uppercase tracking-widest mb-3 ml-2">Telefon
                                        (Opsiyonel)</label>
                                    <input type="tel" name="phone" placeholder="+90 (___) ___ __ __"
                                        class="w-full bg-gray-50 border-2 border-transparent focus:border-primary/20 focus:bg-white p-4 rounded-2xl text-dark focus:outline-none transition-all duration-300">
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-primary text-[10px] font-bold uppercase tracking-widest mb-3 ml-2">Mesajınız</label>
                                <textarea name="message" rows="5" placeholder="Size nasıl yardımcı olabiliriz?" required
                                    class="w-full bg-gray-50 border-2 border-transparent focus:border-primary/20 focus:bg-white p-4 rounded-2xl text-dark focus:outline-none transition-all duration-300 resize-none"></textarea>
                            </div>

                            @if(session('success'))
                                <div
                                    class="p-4 bg-green-500/10 border border-green-500/20 text-green-600 rounded-xl font-bold flex items-center">
                                    <i class="fas fa-check-circle mr-3"></i>
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="pt-4">
                                <button type="submit" :disabled="sending"
                                    class="group relative w-full bg-primary text-white py-5 rounded-2xl font-bold uppercase tracking-[0.2em] shadow-lg hover:shadow-primary/30 transition-all duration-300 overflow-hidden">
                                    <span class="relative z-10 flex items-center justify-center">
                                        <span x-show="!sending">Mesajı Gönder</span>
                                        <span x-show="sending">İşleniyor...</span>
                                        <i class="fas fa-paper-plane ml-3 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300"
                                            x-show="!sending"></i>
                                    </span>
                                    <div
                                        class="absolute inset-0 bg-primary-dark translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="py-20 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4 uppercase tracking-tighter">Lokasyonumuz</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="h-[400px] w-full shadow-2xl rounded-[3rem] overflow-hidden border-8 border-white reveal-up">
                <iframe title="İmkan Geliştirme Harita" class="w-full h-full"
                    src="https://www.google.com/maps?q=Marmara%2021.%20Sokak%2032/1,%20Nicosia&output=embed"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection