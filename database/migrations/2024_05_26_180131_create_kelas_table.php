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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id(); // Primary key bertipe big integer auto-increment
            $table->string('nama');
            $table->unsignedBigInteger('user_id'); // Foreign key dari tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('tingkat'); // Misal: SMP, SMA, Perguruan Tinggi, dll
            $table->text('deskripsi');
            $table->string('gambar')->nullable(); // Nama file gambar (path)
            $table->string('warna')->nullable(); // Pilihan warna card kelas
            $table->timestamps(); // Timestamps created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
