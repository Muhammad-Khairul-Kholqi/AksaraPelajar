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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->bigIncrements('penilaian_id');
            $table->unsignedBigInteger('pengumpulan_id');
            $table->float('nilai');
            $table->timestamps();

            $table->foreign('pengumpulan_id')->references('pengumpulan_id')->on('pengumpulan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian');
    }
};
