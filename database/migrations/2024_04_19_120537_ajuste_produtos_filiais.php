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
        // Criando tabela filiais.
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial');
            $table->timestamps();
        });

        // Criando tabela produtos_filiais.
        Schema::create('produtos_filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial');
            $table->unsignedBigInteger('filial_id');           
            $table->unsignedBigInteger('produto_id');            
            $table->float('preco_venda', 8, 2)->default(0.01);
            $table->integer('estoque_min')->default(1);
            $table->integer('estoque_max')->default(1);
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->timestamps();
        });

        // Removendo colunas da tabela produtos.
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn([
                'preco_venda',
                'estoque_min',
                'estoque_max'
            ]);
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revertendo criação de colunas e drops.
        Schema::table('produtos', function (Blueprint $table) {
            $table->float('preco_venda', 8, 2)->default(0.01);
            $table->integer('estoque_min')->default(1);
            $table->integer('estoque_max')->default(1);
        });

        // Revertendo criação das tabelas filiais e produtos_filiais.
        Schema::dropIfExists('produtos_filiais');

        Schema::dropIfExists('filiais');
    }
};
