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
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('m_role');
            $table->string('as_role')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('as_user')->nullable();
            $table->integer('sort')->nullable();
            $table->boolean('view')->default('f');
            $table->boolean('insert')->default('f');
            $table->boolean('update')->default('f');
            $table->boolean('delete')->default('f');
            $table->boolean('import')->default('f');
            $table->boolean('export')->default('f');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
