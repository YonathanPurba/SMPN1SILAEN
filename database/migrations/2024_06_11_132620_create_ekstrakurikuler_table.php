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
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->increments('id_ekstrakurikuler');
            $table->string('judul_ekstrakurikuler');
            $table->string('gambar_ekstrakurikuler')->nullable();
            $table->string('deskripsi_ekstrakurikuler');
            $table->string('slug')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('update_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
};
