<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('siswa_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->enum('kelas', ['PPLG X-2']);
            $table->dateTime('tanggal_lahir');
            $table->text('alamat');
            $table->string('email');
            $table->string('telepon');
            $table->integer('nis');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
