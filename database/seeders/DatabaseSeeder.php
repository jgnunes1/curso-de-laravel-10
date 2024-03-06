<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto; // Adicione este use statement

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call([
            ProdutosSeeder::class,
        ]);
    }
}
