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
        // TABEL TEACHERS
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); // primary key
            $table->integer('id_pengajar')->unique(); // opsional, hanya sebagai penomoran tambahan
            $table->string('nama_pengajar');
            $table->string('username')->unique();

            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
