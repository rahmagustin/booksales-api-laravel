<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => '1',
            'name' => 'Fiksi',
            'description' => 'Berisi cerita imajinatif atau khayalan, sering kali tidak berdasarkan kejadian nyata'
        ],
        [
            'id' => '2',
            'name' => 'Romansa',
            'description' => 'Berfokus pada cerita hubungan cinta antara karakter-karakter utama'
        ],
        [
            'id' => '3',
            'name' => 'Horor',
            'description' => 'Bertujuanuntuk menakut-nakuti pembaca, dengan unsur ketegangan dan ketakutan'
        ],
        [
            'id' => '4',
            'name' => 'Ilmiah',
            'description' => 'Berisi cerita imajinatif atau khayalan, sering kali tidak berdasarkan kejadian nyata'
        ],
        [
            'id' => '5',
            'name' => 'Fantasi',
            'description' => 'Mengandung unsur magis, dunia fantasi, dan makhluk mitologi'
        ],
        ];
        
        public function getGenre() {
            return $this->genres;
        }
}
