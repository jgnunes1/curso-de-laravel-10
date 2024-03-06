<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create(

            [
                'nome' => 'NOTEBOOK LG',
                'valor' => '2000.00'
            ]

        );
    }
}
