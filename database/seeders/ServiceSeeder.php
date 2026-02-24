<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            'Alt Yapı ve Üst Yapı Hizmetleri' => 'https://images.unsplash.com/photo-1541888946425-d81bb19480c5?q=80&w=2070&auto=format&fit=crop',
            'Deprem Güçlendirme Çalışmaları' => 'https://images.unsplash.com/photo-1590644365607-1c5a519a7a37?q=80&w=2070&auto=format&fit=crop',
            'Renovasyon Projeleri' => 'https://images.unsplash.com/photo-1503387762-592dea58ef23?q=80&w=2070&auto=format&fit=crop',
            'Arsa Parselizasyonu' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2070&auto=format&fit=crop',
            'Yapılarda Yenilenebilir Enerji Sistemleri' => 'https://images.unsplash.com/photo-1509391366360-fe5bb58583bb?q=80&w=2070&auto=format&fit=crop',
            'Otel İnşaatları' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop',
            'Sanayi ve Fabrika İnşaatları' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070&auto=format&fit=crop',
            'Konut İnşaatları' => 'https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=2070&auto=format&fit=crop',
            'Mühendislik ve Müteahhitlik Hizmetleri' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070&auto=format&fit=crop',
            'Akıllı Ev Sistemleri' => 'https://images.unsplash.com/photo-1558002038-1055907df827?q=80&w=2070&auto=format&fit=crop',
        ];

        Service::truncate();

        foreach ($services as $title => $image) {
            Service::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => $title . ' alanında uzman kadromuz ve modern ekipmanlarımızla en yüksek kalitede hizmet sunmaktayız.',
                'content' => 'Geleceği inşa ederken güven ve kaliteyi ön planda tutuyoruz. ' . $title . ' sürecinde projelendirmeden anahtar teslime kadar her aşamada titizlikle çalışıyoruz.',
                'image' => $image,
            ]);
        }
    }
}
