@extends('layouts.app')

@section('title', 'Projelerimiz — İmkan Geliştirme A.Ş.')

@section('content')
    <section class="pt-40 pb-18 bg-[#006272] text-white overflow-hidden relative">
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(white 1px, transparent 0); background-size: 30px 30px;"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight mb-4 reveal-up uppercase">PROJELERİMİZ</h1>
            <div class="w-20 h-1 bg-white mb-6 reveal-up"></div>
            <p class="text-white/80 max-w-2xl text-base md:text-lg font-light reveal-up">
                Modern mimari, üstün mühendislik ve kusursuz işçilikle hayata geçirdiğimiz projelerimizi inceleyin.
                Devam eden ve tamamlanmış tüm projelerimizi burada bulabilirsiniz.
            </p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 reveal-up">
                @foreach($projects as $project)
                    <div
                        class="bg-white rounded-[2.5rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group border border-gray-100 flex flex-col h-full">
                        <!-- Image Cover -->
                        <div class="h-[280px] relative overflow-hidden">
                            <img src="{{ Str::startsWith($project->image, 'http') ? $project->image : asset('storage/' . $project->image) }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="{{ $project->title }}">
                            @if($project->status == 'ongoing')
                                <div
                                    class="absolute top-6 left-6 bg-warning text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-lg">
                                    Devam Ediyor</div>
                            @elseif($project->status == 'completed')
                                <div
                                    class="absolute top-6 left-6 bg-success text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-lg">
                                    Tamamlandı</div>
                            @endif
                        </div>

                        <!-- Teal Content -->
                        <div class="bg-primary p-8 flex-grow flex flex-col text-left text-white relative">
                            <h3 class="text-xl font-bold mb-4 tracking-tight uppercase">{{ $project->title }}</h3>
                            <div class="w-full h-px bg-white/20 mb-6"></div>

                            <div class="space-y-4 mb-8">
                                <div class="flex items-center text-sm">
                                    <i class="fas fa-map-marker-alt w-6 text-white/60"></i>
                                    <span class="font-medium">{{ $project->location ?? 'Kıbrıs' }}</span>
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
                @endforeach
            </div>
        </div>
    </section>
@endsection