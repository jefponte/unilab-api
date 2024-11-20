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
        Schema::create('vw_usuarios_autenticacao_catraca', function (Blueprint $table) {
            $table->integer('id_usuario')->primary();
            $table->string('login')->unique();
            $table->string('senha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vw_usuarios_autenticacao_catraca');
    }
};
