<?php

namespace Database\Seeders;

use App\Models\Contato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $contato = new Contato();
        $contato-> nome = 'Jose Ricardo';
        $contato-> telefone = '(13) 98833-0356';
        $contato-> email = 'sac@spgweb.com.br';
        $contato-> motivo = 1;
        $contato-> mensagem = 'Olá, gostaria de saber mais sobre o app.';
        $contato->save();
        Contato::create([
            'nome'=>'Ricardo j. Peixoto',
            'telefone'=>'(13)98131-8569',
            'email'=>'suporte@crescer.tech',
            'motivo'=>2,
            'mensagem'=>'Estou sem internet.'
        ]);
        */
        Contato::factory(5000)->create();
    }
}
