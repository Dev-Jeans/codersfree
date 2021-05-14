<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jeans Jeysons Cuba Ceperian',
            'email' => 'jeans.cuba6@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        User::factory(49)->create();
    }
}
