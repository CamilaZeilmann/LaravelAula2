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
            'title' => 'Mensagem1',
            'texto' => 'aaaaaaaaa',
            'autor' => 'Heibes',
            'user_id' => 1
        ]);

        Mensagem::create([
            'title' => 'Mensagem2',
            'texto' => 'bbbbbbbbbb',
            'autor' => 'Screibes',
            'user_id' => 1

        ]);

    }
}
