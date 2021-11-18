<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestbookmgrtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guestbookmgrts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',50)->default('-');
            $table->string('notelp',20)->nullable();
            $table->string('email');
            $table->string('kritik-saran');
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
        Schema::dropIfExists('guestbookmgrts');
    }
}
