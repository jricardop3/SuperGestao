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
        //criando coluna em produtos para receber fk de fornecedores
        Schema::table('produtos', function(Blueprint $table){
            // inserir manualmente um registro.
           $fornecedor_id = DB::table('fornecedores')->insert([
                'nome'=>'Fornecedor Padrão', 
                'site'=>'fornecedorpradrao.com.br', 
                'uf'=>'AC', 
                'email'=>'sac@padrao.com.br'       
            ]);
            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function(Blueprint $table){
        $table->dropForeign('produtos_fornecedor_id_foreign');
        $table->dropColumn('fornecedor_id');
        });
    }
};
