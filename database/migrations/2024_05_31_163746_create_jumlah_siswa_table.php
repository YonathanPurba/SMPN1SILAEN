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
        Schema::create('jumlah_siswa', function (Blueprint $table) {
            $table->increments('id_jumlah_siswa');
            $table->integer('id_kelas');
            $table->integer('jumlah_siswa_laki_laki');
            $table->integer('jumlah_siswa_perempuan');
            $table->integer('total');
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
        Schema::dropIfExists('jumlah_siswa');
    }
};