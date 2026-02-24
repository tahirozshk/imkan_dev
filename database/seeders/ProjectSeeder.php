<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Marmara 4. Sk Aldinc',
                'slug' => Str::slug('Marmara 4 Sk Aldinc'),
                'description' => 'Lefkoşa\'nın kalbinde modern yaşamın kapılarını aralayan lüks villa ve penthouse projesi.',
                'content' => 'Bu proje, estetik ve fonksiyonelliği bir araya getirerek konforlu bir yaşam sunuyor. Geniş teraslar, modern iç mekan tasarımı ve yüksek kaliteli malzeme seçimi ile standartları yeniden belirliyor.',
                'category' => 'Villa, Penthouse, Daire',
                'location' => 'Lefkoşa',
                'status' => 'ongoing',
                'client' => 'Aldinc Construction',
                'completion_date' => '2026-12-31',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop',
            ],
            [
                'title' => 'Panayia Homes',
                'slug' => Str::slug('Panayia Homes'),
                'description' => 'Girne\'nin eşsiz manzarasına sahip, havuzlu ve modern mimarili konut kompleksi.',
                'content' => 'Deniz ve dağ manzarasını aynı anda sunan Panayia Homes, sakinlerine huzurlu bir yaşam vaat ediyor. Proje içerisinde ortak yüzme havuzu, geniş peyzaj alanları ve akıllı ev sistemleri bulunmaktadır.',
                'category' => 'Penthouse, Daire',
                'location' => 'Girne',
                'status' => 'ongoing',
                'client' => 'Panayia Development',
                'completion_date' => '2026-06-30',
                'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop',
            ],
            [
                'title' => 'Girnede Lüks Apartman Dairesi',
                'slug' => Str::slug('Girnede Lüks Apartman Dairesi'),
                'description' => 'Modern mimari ile tamamlanmış, şehir merkezine yakın prestijli yaşam alanı.',
                'content' => 'Tamamlanmış olan bu projemiz, Girne merkezde ulaşım kolaylığı ve lüks donanımları ile dikkat çekmektedir. Her detay titizlikle planlanmış ve en iyi işçilikle uygulanmıştır.',
                'category' => 'Apartman',
                'location' => 'Girne',
                'status' => 'completed',
                'client' => 'Özel Yatırımcı',
                'completion_date' => '2024-01-01',
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop',
            ],
        ];

        Project::truncate();

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
