@extends('layouts.app')

@section('title', 'Deprem Dayanıklılık Testi — İmkan Geliştirme A.Ş.')

@section('content')
    <section class="pt-44 pb-24 bg-[#006272] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(white 1px, transparent 0); background-size: 30px 30px;"></div>
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl md:text-5xl font-bold mb-6 reveal-up uppercase tracking-tight">BİNANIZ GÜVENDE Mİ?</h1>
                <div class="w-28 h-1.5 bg-white mx-auto mb-8 rounded-full reveal-up"></div>
                <p class="text-lg md:text-xl text-white/90 leading-relaxed font-light reveal-up">Deprem gerçeğiyle
                    yüzleşin, binanızın risk analizini uzman mühendislerimizle bilimsel yöntemlerle yapın.</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50 relative">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div
                    class="bg-white p-8 md:p-12 rounded-[3rem] shadow-2xl reveal-up border border-gray-100 flex flex-col lg:flex-row gap-12">
                    <div class="lg:w-1/2">
                        <h2 class="text-2xl font-bold text-primary mb-6 uppercase tracking-wider">TEST BAŞVURU FORMU</h2>
                        <p class="text-gray-500 mb-8 leading-relaxed">Aşağıdaki formu doldurarak binanız için ücretsiz ön
                            analiz talebinde bulunabilirsiniz. Uzmanlarımız 24 saat içinde sizinle iletişime geçecektir.</p>

                        <div class="space-y-6">
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-10 h-10 bg-primary/5 rounded-2xl flex items-center justify-center text-primary">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <span class="font-bold text-dark text-sm md:text-base">+90 548 850 08 50</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-10 h-10 bg-primary/5 rounded-2xl flex items-center justify-center text-primary">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span class="font-bold text-dark text-sm md:text-base">info@imkandevelopment.com</span>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/2">
                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label class="block text-primary text-xs font-bold uppercase mb-2 ml-1">Ad Soyad*</label>
                                <input type="text" name="name" required
                                    class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl text-dark focus:outline-none focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-primary text-xs font-bold uppercase mb-2 ml-1">Telefon*</label>
                                <input type="tel" name="phone" required
                                    class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl text-dark focus:outline-none focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-primary text-xs font-bold uppercase mb-2 ml-1">Bina Bilgileri /
                                    Adres*</label>
                                <textarea name="message" required rows="4"
                                    class="w-full bg-gray-50 border border-gray-200 p-4 rounded-xl text-dark focus:outline-none focus:border-primary transition-all"
                                    placeholder="Kat sayısı, bina yaşı ve açık adresi belirtiniz..."></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-primary text-white py-5 font-bold uppercase tracking-widest rounded-xl shadow-lg hover:bg-primary-dark transition-all">
                                ANALİZ TALEBİ GÖNDER
                            </button>
                        </form>
                    </div>
                </div>

                <div class="mt-24 grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div
                        class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-500 text-center reveal-up">
                        <div
                            class="w-16 h-16 bg-primary/5 rounded-2xl flex items-center justify-center mx-auto mb-8 text-primary text-3xl">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 uppercase">DETAYLI ANALİZ</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Karot örneği ve demir taraması ile binanızın
                            röntgenini çekiyoruz.</p>
                    </div>
                    <div
                        class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-500 text-center reveal-up">
                        <div
                            class="w-16 h-16 bg-primary/5 rounded-2xl flex items-center justify-center mx-auto mb-8 text-primary text-3xl">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 uppercase">STATİK RAPOR</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Elde edilen verilerle bilgisayar ortamında deprem
                            simülasyonu yapıyoruz.</p>
                    </div>
                    <div
                        class="bg-white p-10 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-500 text-center reveal-up">
                        <div
                            class="w-16 h-16 bg-primary/5 rounded-2xl flex items-center justify-center mx-auto mb-8 text-primary text-3xl">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4 uppercase">GÜÇLENDİRME</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Binanızı en modern mühendislik teknikleriyle
                            depreme hazır hale getiriyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection