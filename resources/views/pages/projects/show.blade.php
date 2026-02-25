@extends('layouts.app')

@section('title', $project->title . ' — İmkan Geliştirme A.Ş.')

@section('content')
    <!-- Hero Slider Segment -->
    <section class="relative h-[60vh] w-full overflow-hidden bg-dark">
        <div class="absolute inset-0">
            <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://picsum.photos/seed/p-' . $project->id . '/1920/1080' }}"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="container mx-auto px-6 relative h-full flex flex-col justify-end pb-20">
            <div class="reveal-up">
                <span
                    class="inline-block bg-primary text-white px-5 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-[0.25em] mb-4 shadow-xl">
                    {{ $project->status == 'ongoing' ? 'Devam Eden Proje' : 'Tamamlanan Proje' }}
                </span>
                <h1 class="text-3xl md:text-5xl font-bold text-white mb-3 uppercase tracking-tight">{{ $project->title }}
                </h1>
                <div class="flex items-center text-white/80 space-x-6 text-sm md:text-base font-medium">
                    <span class="flex items-center"><i class="fas fa-map-marker-alt mr-3 text-primary"></i>
                        {{ $project->location ?? 'Kıbrıs' }}</span>
                    <span class="opacity-30">|</span>
                    <span class="flex items-center"><i class="fas fa-building mr-3 text-primary"></i>
                        {{ $project->category }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="py-20 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                <!-- Left: Content -->
                <div class="lg:col-span-2 reveal-up">
                    <h2 class="text-2xl font-bold text-primary mb-6 uppercase tracking-wider">PROJE HAKKINDA</h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed">
                        {!! $project->content ?? $project->description !!}
                    </div>
                </div>

                <!-- Right: Details Sidebar -->
                <div class="lg:col-span-1 reveal-up">
                    <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 shadow-sm">
                        <h3 class="text-lg font-bold text-primary mb-6 border-b border-gray-200 pb-3 uppercase">DETAYLAR
                        </h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-center text-sm">
                                <span class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Teslim
                                    Tarihi</span>
                                <span
                                    class="font-bold text-dark">{{ $project->completion_date ? $project->completion_date->format('d.m.Y') : '2026' }}</span>
                            </li>
                            <li class="flex justify-between items-center text-sm">
                                <span class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Müşteri</span>
                                <span class="font-bold text-dark">{{ $project->client ?? 'İmkan Yatırım' }}</span>
                            </li>
                            <li class="flex justify-between items-center text-sm">
                                <span class="text-gray-500 font-bold uppercase tracking-widest text-[10px]">Lokasyon</span>
                                <span class="font-bold text-dark">{{ $project->location ?? 'Lefkoşa' }}</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact.index') }}"
                            class="mt-10 w-full bg-primary text-white py-4 rounded-xl font-bold uppercase tracking-widest text-xs text-center block hover:bg-primary-dark transition-all shadow-lg">
                            BİLGİ TALEP ET
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floor Plan Section (Image 4 Style) -->
    <section class="py-24 bg-gray-50" x-data="{ tab: '1+1' }">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 reveal-up">
                <h2 class="text-4xl font-bold text-primary mb-4">KAT PLANI</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>

            <!-- Tab Buttons -->
            <div class="flex flex-wrap justify-center gap-2 mb-12 reveal-up">
                @foreach(['1+1', '2+1', '3+1', '4+1 DUPLEX VILLA', 'STUDYO'] as $roomType)
                    <button @click="tab = '{{ $roomType }}'"
                        :class="tab === '{{ $roomType }}' ? 'bg-primary text-white shadow-xl scale-105' : 'bg-white text-gray-500 hover:bg-gray-100'"
                        class="px-8 py-4 rounded-2xl text-xs font-bold uppercase tracking-widest transition-all duration-300">
                        {{ $roomType }}
                    </button>
                @endforeach
            </div>

            <!-- Tab Content -->
            <div class="bg-white rounded-[3rem] p-8 md:p-16 shadow-2xl border border-gray-100 reveal-up">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left: Plan Image -->
                    <div class="relative group cursor-zoom-in">
                        <img src="https://builder-assets.filamentphp.com/sample-assets/floor-plan.png"
                            class="w-full h-auto transition-transform duration-500 group-hover:scale-105" alt="Kat Planı">
                    </div>

                    <!-- Right: Features -->
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-[0.3em] mb-8 italic">ÖZELLİKLER</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
                            @foreach(['Lüks Asma Mutfak', 'Banyo', 'Mutfak ve Oturma Odası', 'Lüks WC - Banyo Fayans ve Seramikleri', 'Zemin Katta Misafir Tuvaleti', 'Stüdyo Yatak Odası'] as $feature)
                                <div
                                    class="bg-gray-50 p-6 rounded-2xl border border-gray-100 flex items-center group hover:bg-white hover:shadow-md transition-all duration-300">
                                    <i
                                        class="fas fa-chevron-right text-[10px] text-gray-400 mr-4 group-hover:text-primary transition-colors"></i>
                                    <span class="text-sm font-bold text-dark tracking-tight">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>

                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-[0.3em] mb-8 italic">EKSTRALAR</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div
                                class="bg-gray-50 p-6 rounded-2xl border border-gray-100 flex items-center hover:bg-white hover:shadow-md transition-all duration-300">
                                <i class="fas fa-plus text-[10px] text-gray-400 mr-4"></i>
                                <span class="text-sm font-bold text-dark tracking-tight">Jakuzi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Segment -->
    @if($project->gallery && count($project->gallery) > 0)
        <section class="py-24 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-primary mb-12 uppercase tracking-wider text-center">GALERİ</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($project->gallery as $img)
                        <div
                            class="aspect-square overflow-hidden rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 group">
                            <img src="{{ asset('storage/' . $img) }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="bg-primary py-20 text-center text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 uppercase tracking-wider">BU PROJE İLGİNİZİ Mİ ÇEKTİ?</h2>
            <p class="text-white/80 max-w-xl mx-auto mb-10 text-lg">Hemen detaylı bilgi almak ve randevu oluşturmak için
                bizimle iletişime geçin.</p>
            <a href="{{ route('contact.index') }}"
                class="inline-block border-2 border-white text-white px-12 py-4 font-bold uppercase tracking-widest hover:bg-white hover:text-primary transition-all rounded-2xl shadow-xl">
                ŞİMDİ BİZE ULAŞIN
            </a>
        </div>
    </section>
@endsection