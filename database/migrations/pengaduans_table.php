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
        Schema::create('pengaduan', function (Blueprint $table) {
          $table->id('id_pengaduan');
          $table->dateTime('tgl_pengaduan');
          $table->char('nik', 16);
          $table->string('judul_laporan');
          $table->text('isi_laporan');
          $table->dateTime('tgl_kejadian');
          $table->text('lokasi_kejadian');
          $table->enum('kategori_kejadian', ['agama', 'hukum', 'lingkungan', 'sosial']);
          $table->string('foto');
          $tbale->enum('status', ['0', 'proses', 'selesai']);
          $table->timestamps();

            
            $table->foreign('NIK')->references('NIK')->on('masyarakat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
