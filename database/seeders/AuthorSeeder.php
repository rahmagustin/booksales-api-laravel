<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::insert([
            [
                'name' => 'Pramoedya Ananta Toer',
                'bio' => 'Sastrawan besar Indonesia, terkenal dengan Tetralogi Buru. Pejuang kebebasan berekspresi.'
            ]]);
        Author::insert([
            [
                'name' => 'Andrea Hirata',
                'bio' => 'Penulis novel Laskar Pelangi, kisah inspiratif dari Belitung.'
            ]]);
        Author::insert([
            [
                'name' => 'Dee Lestari',
                'bio' => 'Penulis novel Supernova, dikenal dengan gaya penulisan yang filosofis dan futuristik.'
            ]]);
        Author::insert([
            [
                'name' => 'Tere Liye',
                'bio' => 'Penulis produktif dengan banyak karya best-seller bertema cinta dan kehidupan.'
            ]]);
        Author::insert([
            [
                'name' => 'Boy Candra',
                'bio' => 'Penulis populer dengan karya-karya bertema cinta dan kehidupan remaja, banyak digemari generasi muda.'
            ]]);
    }
}
