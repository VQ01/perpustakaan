<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kodebuku',50)->default('-');
            $table->string('judul',100)->default('-');
            $table->string('pengarang',50)->default('-');
            $table->string('penerbit',50)->default('-');
            $table->string('tahun',4)->default('2021');
            $table->string('cover',50)->default('react.jpg');
            $table->enum('status',['ada','dipinjam','rusak','dimusnahkan'])->default('ada');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
