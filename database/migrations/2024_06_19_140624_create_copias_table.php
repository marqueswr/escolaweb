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
        Schema::create('copias', function (Blueprint $table) {
            $table->id();
            $table->string('mes');
            $table->text('descricao');
            $table->integer('quantidade');
            $table->date('dtasolicitacao');
            $table->string('tipo');
            $table->integer('setores_id');
            $table->integer('disciplina_id');
            $table->integer('solicitante_id');
            $table->integer('serie_id');
            $table->integer('user_id');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('copias');
    }
};
