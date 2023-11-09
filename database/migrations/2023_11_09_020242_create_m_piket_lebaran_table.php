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
        Schema::create('m_piket_lebaran', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('jabatan');
            $table->string('jadwal');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_skpd')->references('id')->on('m_skpd');
            $table->foreignId('id_shift')->references('id')->on('m_shift');
            $table->foreignId('id_event')->references('id')->on('m_event');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_piket_lebaran');
    }
};
