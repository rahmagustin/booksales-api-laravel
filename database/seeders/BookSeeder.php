<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Bumi Manusia',
                'description' => 'Novel sejarah tentang perjuangan bangsa Indonesia di masa penjajahan.',
                'price' => 80000,
                'stock' => 50,
                'cover_photo' => 'covers/bumi_manusia.jpg',
                'genre_id' => null, 
                'author_id' => 1,
            ]]);
        Book::insert([
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah anak-anak dari Belitung yang penuh semangat dan harapan.',
                'price' => 70000,
                'stock' => 100,
                'cover_photo' => 'covers/laskar_pelangi.jpg',
                'genre_id' => null,
                'author_id' => 2,
            ]]);
        Book::insert([
            [
                'title' => 'Supernova: Ksatria, Puteri dan Bintang Jatuh',
                'description' => 'Novel fiksi ilmiah yang filosofis dan futuristik.',
                'price' => 85000,
                'stock' => 70,
                'cover_photo' => 'covers/supernova.jpg',
                'genre_id' => null,
                'author_id' => 3,
            ]]);
        Book::insert([
            [
                'title' => 'Rindu',
                'description' => 'Sebuah kisah perjalanan spiritual dan penantian dalam cinta.',
                'price' => 65000,
                'stock' => 40,
                'cover_photo' => 'covers/rindu.jpg',
                'genre_id' => null,
                'author_id' => 4,
            ]]);
        Book::insert([
            [
                'title' => 'Senja, Hujan, dan Cerita yang Telah Usai',
                'description' => 'Kumpulan kisah romantis yang menyentuh hati.',
                'price' => 60000,
                'stock' => 80,
                'cover_photo' => 'covers/senja_hujan.jpg',
                'genre_id' => null,
                'author_id' => 5,
            ]]);
    }
}
