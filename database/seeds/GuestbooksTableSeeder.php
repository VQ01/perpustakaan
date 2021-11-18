<?php

use Illuminate\Database\Seeder;
use App\guestbooks;
class GuestbooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guestbooks')->delete();
        guestbooks::create([
            'email' => 'aku@gmail.com',
            'nama' => 'yoibro',
            'pesan' => 'gass'
        ]);
        guestbooks::create([
            'email' => 'kamu@gmail.com',
            'nama' => 'okebro',
            'pesan' => 'gass poolll'
        ]);
    }
}
