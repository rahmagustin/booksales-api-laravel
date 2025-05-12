<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => '1',
            'name' => 'Pramoedya Ananta Toer',
            'bio' => 'Sastrawan besar Indonesia, terkenal dengan Tetralogi Buru. Pejuang kebebasan berekspresi.'
        ],
        [
            'id' => '2',
            'name' => 'Andrea Hirata',
            'bio' => 'Penulis novel Laskar Pelangi, kisah inspiratif dari Belitung.'
        ],
        [
            'id' => '3',
            'name' => 'Dee Lestari',
            'bio' => 'Penulis novel Supernova, dikenal dengan gaya penulisan yang filosofis dan futuristik.'
        ],
        [
            'id' => '4',
            'name' => 'Tere Liye',
            'bio' => 'Penulis produktif dengan banyak karya best-seller bertema cinta dan kehidupan.'
        ],
        [
            'id' => '5',
            'name' => 'Boy Candra',
            'bio' => 'Penulis populer dengan karya-karya bertema cinta dan kehidupan remaja, banyak digemari generasi muda.'
        ],
    ];

    public function getAuthor() {
        return $this->authors;
    } 
}
