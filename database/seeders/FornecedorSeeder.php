<?php

namespace Database\Seeders;

use App\Models\Contato;
use App\Models\Fornecedor;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $fornecedor = new Fornecedor(); //instanciando o objeto fornecedor, recebendo Model Fornecedor
        $fornecedor->nome = 'Ricardo J. Peixoto'; //item a ser add.
        $fornecedor->site = 'crescer.tech';//item a ser add.
        $fornecedor->uf = 'RS';//item a ser add.
        $fornecedor->email = 'suporte@crescer.tech';//item a ser add.
        $fornecedor->save(); // recuperar objeto preenchido e persistir os dados. salvar.

       Fornecedor::create([ //usar o metodo create com array associativo, liberado no fillable
        'nome'=>'Jose Ricardo',
        'site'=>'spgweb.com.br',
        'uf'=>'SP',
        'email'=>'sac@spgweb.com.br'
       ]);

       DB::table('fornecedores')->insert([
        'nome'=>'Jose Ricardo 2',
        'site'=>'cursos.spgweb.com.br',
        'uf'=>'SC',
        'email'=>'atendimento@spgweb.com.br'
       ]);
       */
      
      Fornecedor::factory(5000)->create();
       
    }
}
