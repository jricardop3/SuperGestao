<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //cria a tabela motivos contatos id na tabela contatos.
        Schema::table('contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_id');
            
        });
        //migra os dados das colunas motivo contato para a nova tabela motivo contato id.
        DB::statement('update contatos set motivo_id = motivo');

        //criação da chave estrangeira (fk).
        Schema::table('contatos', function (Blueprint $table) {
            $table-> foreign ('motivo_id')->references('id')->on('motivo_contatos');
            //remover coluna motivo_contato
            $table->dropColumn('motivo');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //reversão FK e remoção de coluna
        Schema::table('contatos', function (Blueprint $table) {
            
            //cria coluna motivo_contato
            $table->integer('motivo');
            //remove FK
            $table-> dropForeign('contatos_motivo_id_foreign');
            
        });
        //migra os dados das colunas motivo contato id para a nova tabela motivo contato.
        DB::statement('update contatos set motivo = motivo_id');
        Schema::table('contatos', function (Blueprint $table) {
            //remove coluna motivo_contato_id
            $table->dropColumn('motivo_id');
            
        });
    }
};
