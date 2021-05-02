<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voids
     */
    public function run()
    {
        Level::create([
            'name' => 'nivel básico',
        ]);

        Level::create([
            'name' => 'nivel intermedio',
        ]);

        Level::create([
            'name' => 'nivel avanzado',
        ]);
    }
}
