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
        Schema::create('prestasi', function (Blueprint $table) {
            $table->increments('id_prestasi');
            $table->string('judul_prestasi');
            $table->string('gambar_prestasi')->nullable();
            $table->string('deskripsi_prestasi');
            $table->date('tanggal_prestasi');
            $table->bigInteger('user_id')->nullable();
            $table->string('created_by');
            $table->string('update_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
