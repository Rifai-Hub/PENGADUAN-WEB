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
        Schema::create('tanggapan', function (Blueprint $table) {
           
            $table->id('id_tanggapan');
            $table->unsignedBigInteger('id_pengaduan');
            $table->dateTime('tgl-tanggapan');
            $table->text('tanggapan');
            $table->unsignedBigInteger('id_petugas');

            $table->timestamps();

            $table->foreign('id_pengaduan')->references('id')->on('pengaduan');
            $table->foreign('id_petugas')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapans');
    }
};
