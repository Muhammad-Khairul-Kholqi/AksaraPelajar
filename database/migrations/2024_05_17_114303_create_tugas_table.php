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
        Schema::create('tugas', function (Blueprint $table) {
            $table->bigIncrements('tugas_id');
            $table->unsignedBigInteger('guru_id');
            $table->string('nama_tugas');
            $table->text('deskripsi');
            $table->dateTime('tanggal_pembuatan');
            $table->timestamps();

            $table->foreign('guru_id')->references('guru_id')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
