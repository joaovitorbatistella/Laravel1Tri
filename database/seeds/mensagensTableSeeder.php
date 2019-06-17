<?php

use Illuminate\Database\Seeder;
use App\Mensagem;


class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Bom dia',
            'autor' => 'Lammel',
            'mensagem' => 'oi',
            'user_id' => 1,
            'atividade_id' => 1
        ]);

        Mensagem::create([
            'titulo' => 'Bom noite',
            'autor' => 'Lammel',
            'mensagem' => 'oi',
            'user_id' => 1,
            'atividade_id' => 1
        ]);
    }
}
