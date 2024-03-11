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
        Produto::create([
            'nome' => 'Monitor Samsung 20',
            'valor' => '100.00'
        ]);

        Produto::create([
            'nome' => 'Teclado mecânico RGB',
            'valor' => '80.00'
        ]);

        Produto::create([
            'nome' => 'Mouse sem fio Logitech',
            'valor' => '30.00'
        ]);

        Produto::create([
            'nome' => 'Fone de ouvido Sony',
            'valor' => '50.00'
        ]);

        Produto::create([
            'nome' => 'Impressora HP DeskJet',
            'valor' => '120.00'
        ]);

        Produto::create([
            'nome' => 'HD externo 1TB',
            'valor' => '60.00'
        ]);

        Produto::create([
            'nome' => 'Cadeira Gamer',
            'valor' => '200.00'
        ]);

        Produto::create([
            'nome' => 'Mesa para computador',
            'valor' => '150.00'
        ]);

        Produto::create([
            'nome' => 'Webcam Logitech',
            'valor' => '40.00'
        ]);

        Produto::create([
            'nome' => 'Roteador Wi-Fi TP-Link',
            'valor' => '70.00'
        ]);

        Produto::create([
            'nome' => 'Placa de vídeo GeForce GTX 1650',
            'valor' => '250.00'
        ]);

        Produto::create([
            'nome' => 'SSD 500GB',
            'valor' => '90.00'
        ]);

        Produto::create([
            'nome' => 'Smartphone Xiaomi',
            'valor' => '300.00'
        ]);

        Produto::create([
            'nome' => 'Tablet Samsung',
            'valor' => '180.00'
        ]);

        Produto::create([
            'nome' => 'Caixa de som Bluetooth JBL',
            'valor' => '70.00'
        ]);
    }
}
