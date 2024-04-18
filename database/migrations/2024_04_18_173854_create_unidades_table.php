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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade');
            $table->string('descricao');

            $table->timestamps();
        });
        //adicionar chaves estrangeiras nas tabelas produtos e produtos detalhes:
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('cascade');
        });
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('cascade');
        });
    }
    
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         //adicionar chaves estrangeiras nas tabelas produtos e produtos detalhes:
         Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });
    
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });
        Schema::dropIfExists('unidades');
    }
};
