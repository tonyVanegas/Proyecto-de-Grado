<?php

namespace Database\Seeders;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      ModelsUsuario::factory(3)->create();
    }
}
 