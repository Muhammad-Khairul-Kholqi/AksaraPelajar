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
        Schema::create('absen', function (Blueprint $table) {
            $table->bigIncrements('kehadiran_id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('guru_id');
            $table->dateTime('tanggal');
            $table->enum('kehadiran', ['Hadir', 'Sakit', 'Izin'])->default('Hadir');
            $table->timestamps();

            $table->foreign('siswa_id')->references('siswa_id')->on('siswa');
            $table->foreign('guru_id')->references('guru_id')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absen');
    }
};
