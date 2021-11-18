<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('-');
            $table->string('firstname')->default('-');
            $table->string('lastname')->default('-');
            $table->string('address')->default('Malang');
            $table->string('city')->default('Kota Malang');
            $table->string('country')->default('Indonesia');
            $table->string('postalcode')->default('63121');
            $table->enum('status',['anggota','admin'])->default('anggota');
            $table->string('aboutme')->default('whats up');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
