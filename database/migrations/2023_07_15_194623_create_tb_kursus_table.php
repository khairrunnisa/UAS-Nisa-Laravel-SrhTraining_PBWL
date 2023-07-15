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
        Schema::create('tb_kursus', function (Blueprint $table) {
            $table->increments('kursus_id');
            $table->string('kursus_nama', 100);
            $table->string('kursus_kategori', 100);
            $table->string('kursus_id_sekolah', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kursus');
    }
};
