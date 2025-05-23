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
        // TABEL SUBJECTS (INDUK untuk teachers dan scores)
        Schema::create('subjects', function (Blueprint $table) {
            $table->id(); // id -> digunakan sebagai foreign key
            $table->string('nama_mata_pelajaran');
            $table->text('deskripsi_pelajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
