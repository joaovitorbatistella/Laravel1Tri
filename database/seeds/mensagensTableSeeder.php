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
            'mensagem' => 'oi'
        ]);

        Mensagem::create([
            'titulo' => 'Bom noite',
            'autor' => 'Lammel',
            'mensagem' => 'oi'
        ]);
    }
}
