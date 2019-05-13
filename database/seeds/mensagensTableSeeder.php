<?php

use Illuminate\Database\Seeder;
use App\mensagens;


class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mensagens::create([
            'titulo' => 'Bom dia',
            'autor' => 'Lammel',
            
        ]);

        mensagens::create([
            'titulo' => 'Bom noite',
            'autor' => 'Lammel',
        ]);
    }
}
