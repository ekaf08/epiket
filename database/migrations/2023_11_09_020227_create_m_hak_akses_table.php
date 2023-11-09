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
        Schema::create('m_hak_akses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_menu')->references('id')->on('m_menu');
            $table->string('level_hak_akses');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_hak_akses');
    }
};
