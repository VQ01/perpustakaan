<?php

use Illuminate\Database\Seeder;
use App\buku;
class databuku extends Seeder
{
    
    public function run()
    {
        DB::table('buku')->delete();
        buku::create([
            'kodebuku' => '001',
            'judul' => 'Judul Buku 1',
            'pengarang' => 'Pengarang Buku 1',
            'penerbit' => 'Penerbit Buku 1',
            'tahun' => '2021',
            'cover' => 'Cover Buku 1',
            'status' => 'Ada'
        ]);
        buku::create([
            'kodebuku' => '002',
            'judul' => 'Judul Buku 2',
            'pengarang' => 'Pengarang Buku 2',
            'penerbit' => 'Penerbit Buku 2',
            'tahun' => '2022',
            'cover' => 'Cover Buku 2',
            'status' => 'Dipinjam'
        ]);
        buku::create([
            'kodebuku' => '003',
            'judul' => 'Judul Buku 3',
            'pengarang' => 'Pengarang Buku 3',
            'penerbit' => 'Penerbit Buku 3',
            'tahun' => '2023',
            'cover' => 'Cover Buku 3',
            'status' => 'Ada'
        ]);
        buku::create([
            'kodebuku' => '004',
            'judul' => 'Judul Buku 4',
            'pengarang' => 'Pengarang Buku 4',
            'penerbit' => 'Penerbit Buku 4',
            'tahun' => '2024',
            'cover' => 'Cover Buku 4',
            'status' => 'Ada'
        ]);
        buku::create([
            'kodebuku' => '005',
            'judul' => 'Judul Buku 5',
            'pengarang' => 'Pengarang Buku 5',
            'penerbit' => 'Penerbit Buku 5',
            'tahun' => '2025',
            'cover' => 'Cover Buku 5',
            'status' => 'Dimusnahkan'
        ]);
    }
}
