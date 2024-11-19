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
        Schema::create('petugas', function (Blueprint $table) {
           $table->id('id_petugas');
           $table->sting('nama_petugas', 35);
           $table->string('usename', 25)->unique();
           $table->string('password');
           $table->string('telp', 13);
           $table->enum('level', ['admin', 'petugas']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
