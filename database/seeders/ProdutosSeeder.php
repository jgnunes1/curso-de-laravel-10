<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto; // Importe a classe Produto aqui

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create(

            [
                'nome' => 'Teclado Multilaser Bletooh',
                'valor' => '100.00'
            ]

        );
    }
}
