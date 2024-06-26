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
        Schema::create('tenagapengajar', function (Blueprint $table) {
            $table->increments('id_tenagapengajar');
            $table->string('nama_tenagapengajar');
            $table->string('jabatan');
            $table->string('nip')->unique();
            $table->string('alamat');
            $table->string('gambar_tenagapengajar')->nullable();
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
        Schema::dropIfExists('tenagapengajar');
    }
};
