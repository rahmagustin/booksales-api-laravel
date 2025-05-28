<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert([
            [
                'name' => 'Fiksi',
                'description' => 'Cerita imajinatif atau khayalan, sering kali tidak berdasarkan kejadian nyata',
            ],
            [
                'name' => 'Romansa',
                'description' => 'Berfokus pada cerita hubungan cinta antara karakter-karakter utama',
            ],
            [
                'name' => 'Horor',
                'description' => 'Bertujuan untuk menakut-nakuti pembaca, dengan unsur ketegangan dan ketakutan',
            ],
            [
                'name' => 'Ilmiah',
                'description' => 'Cerita yang mengandung unsur sains dan teknologi sebagai dasar alurnya',
            ],
            [
                'name' => 'Fantasi',
                'description' => 'Mengandung unsur magis, dunia fantasi, dan makhluk mitologi',
            ],
        ]);
    }
}
