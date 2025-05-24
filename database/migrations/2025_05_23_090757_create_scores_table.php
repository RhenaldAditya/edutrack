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
        // TABEL SCORES
        Schema::create('scores', function (Blueprint $table) {
            $table->id(); // primary key

            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');

            $table->float('nilai_tugas');
            $table->float('nilai_ujian');
            $table->float('nilai_partisipasi');
            $table->float('nilai_total');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
