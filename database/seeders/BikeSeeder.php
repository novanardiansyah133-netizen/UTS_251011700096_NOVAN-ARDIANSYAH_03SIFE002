<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BikeSeeder extends Seeder
{
    public function run(): void
    {
        $bikes = [
            [
                'brand' => 'Polygon',
                'type' => 'Mountain Bike',
                'rent_price' => 75000,
                'gear_count' => 21,
                'image' => 'pixi.jpg',
                'description' => 'Sepeda gunung Polygon untuk jalur berbatu dan medan menantang.',
                'available' => true,
            ],
            [
                'brand' => 'United',
                'type' => 'City Bike',
                'rent_price' => 50000,
                'gear_count' => 7,
                'image' => 'sepeda-united.jpg',
                'description' => 'Sepeda United yang nyaman untuk berkeliling kota.',
                'available' => true,
            ],
            [
                'brand' => 'Trek',
                'type' => 'Road Bike',
                'rent_price' => 100000,
                'gear_count' => 18,
                'image' => 'sepeda-ontel-jogja.jpg',
                'description' => 'Sepeda jalan raya untuk perjalanan di jalan beraspal.',
                'available' => true,
            ],
            [
                'brand' => 'Giant',
                'type' => 'Mountain Bike',
                'rent_price' => 85000,
                'gear_count' => 24,
                'image' => 'giant-hybrid.svg',
                'description' => 'Sepeda Giant untuk berbagai jenis medan.',
                'available' => true,
            ],
            [
                'brand' => 'Pacific',
                'type' => 'Folding Bike',
                'rent_price' => 60000,
                'gear_count' => 7,
                'image' => 'pacific-fold.svg',
                'description' => 'Sepeda lipat yang praktis untuk perjalanan harian.',
                'available' => true,
            ],
            [
                'brand' => 'Wimcycle',
                'type' => 'City Bike',
                'rent_price' => 45000,
                'gear_count' => 6,
                'image' => 'wimcycle-kids.svg',
                'description' => 'Sepeda untuk perjalanan santai di lingkungan perkotaan.',
                'available' => false,
            ],
        ];

        foreach ($bikes as $bike) {
            $now = now();

            DB::table('bikes')->updateOrInsert(
                [
                    'brand' => $bike['brand'],
                    'type' => $bike['type'],
                ],
                array_merge($bike, [
                    'created_at' => $now,
                    'updated_at' => $now,
                ])
            );
        }
    }
}
