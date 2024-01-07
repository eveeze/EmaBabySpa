<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'name' => 'Baby Swim',
            'description' => 'Layanan Baby Swim kami memberikan kesempatan bagi bayi untuk berinteraksi dengan air dalam suasana yang aman dan nyaman.',
            'image' => 'path/to/baby_swim_image.jpg',
            'price' => 50.00,
        ]);

        Service::create([
            'name' => 'Terapi Batuk Pilek',
            'description' => 'Kami menyediakan terapi batuk pilek menggunakan infra red dan chest therapy untuk membantu proses pemulihan.',
            'image' => 'path/to/terapi_batuk_pilek_image.jpg',
            'price' => 60.00,
        ]);

        // Tambahkan data untuk 7 layanan lainnya
        Service::create([
            'name' => 'Message Baby',
            'description' => 'Deskripsi layanan 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 70.00,
        ]);
        Service::create([
            'name' => 'Message Kids',
            'description' => 'Deskripsi layanan 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 70.00,
        ]);
        Service::create([
            'name' => 'Pijat Laktasi',
            'description' => 'Deskripsi layanan 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 70.00,
        ]);
        Service::create([
            'name' => 'Terapi Tumbuh Kembang',
            'description' => 'Deskripsi layanan 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 70.00,
        ]);
        Service::create([
            'name' => 'Message Sembelit',
            'description' => 'Deskripsi layanan 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 70.00,
        ]);
        Service::create([
            'name' => 'Nebulizer',
            'description' => 'Deskripsi layanan 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 70.00,
        ]);
        Service::create([
            'name' => 'Potong Kuku',
            'description' => 'Deskripsi layanan 3.',
            'image' => 'path/to/image3.jpg',
            'price' => 70.00,
        ]);

        // Lanjutkan sampai layanan ke-9
    }
}
