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
            $table->id();
            $table->integer('nis');
            $table->string('name');
            $table->foreignId('tujuan_id')->constrained('tujuan')->cascadeOnDelete();
            $table->foreignId('mapel_pilihan_id')->constrained('mapel_pilihan')->cascadeOnDelete();
            $table->enum('jenis_kelamin', ["Pria", "Perempuan"]);
            $table->timestamps();
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
