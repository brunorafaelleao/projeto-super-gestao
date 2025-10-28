<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //criar a coluna nome na tabela site_contatos
            $table->string('nome', 50);
            //criar a coluna email na tabela site_contatos
            $table->string('email', 80);
            //criar a coluna motivo do contato
            $table->integer('motivo_contato');
            //criar a coluna mensagem mensagem site_contatos
            $table->text('mensagem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contatos');
    }
};
