<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamandetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamandetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('peminjaman_id')->nullable();
            $table->unsignedBigInteger('buku_id')->nullable();
            $table->date('tglkembali/buku');
            $table->double('denda')->default(0);
            $table->timestamps();


            $table->foreign('peminjaman_id')->references('id')->on('peminjaman')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamandetail');
    }
}
