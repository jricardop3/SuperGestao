<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contato>
 */
class ContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ //faker com codigos de áreas possíveis e números celulares br.
            'nome' => $this->faker->name(),
            'telefone' => '+55 ' . $this->faker->randomElement([
                '11', '12', '13', '14', '15', '16', '17', '18', '19', 
                '21', '22', '24', '27', '28', 
                '31', '32', '33', '34', '35', '37', '38', 
                '41', '42', '43', '44', '45', '46', '47', '48', '49', 
                '51', '53', '54', '55', 
                '61', '62', '63', '64', '65', '66', '67', '68', '69', 
                '71', '73', '74', '75', '77', '79', 
                '81', '82', '83', '84', '85', '86', '87', '88', '89', 
                '91', '92', '93', '94', '95', '96', '97', '98', '99']) . ' ' . $this->faker->numerify('9########'),
            'email' => $this->faker->email(),
            'motivo' => $this->faker->numberBetween(1,3),
            'mensagem' => $this->faker->text(199)
        ];
    }
}
