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
        // Adicionar duas novas tabelas, Schema::create para > table 
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('fornecedores', function (Blueprint $table) {
            //$table->dropColumn('uf');//remover colunas indididualmente
            $table->dropColumn(['uf','email']);//remover todas as colunas com array
        });
    }
};
