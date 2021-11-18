<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tglpinjam');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('admin_id')->nullable();
            $table->date('tglhrskembali');
            $table->enum('statuspinjam',['belum selesai','selesai'])->default('belum selesai');

            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
