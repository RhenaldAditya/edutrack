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
        // TABEL ACADEMY_REPORTS
        Schema::create('academy_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('id_laporan')->nullable(); // opsional

            $table->unsignedBigInteger('student_id');
            $table->float('rata_rata_nilai');
            $table->string('peringkat');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_reports');
    }
};
