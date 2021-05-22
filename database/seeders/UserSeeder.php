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
        $user = User::create([
            'name' => 'Jeans Jeysons Cuba Ceperian',
            'email' => 'jeans.cuba6@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        $user->assignRole('Admin');

        $user1 = User::create([
            'name' => 'Instructor',
            'email' => 'instructor@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        $user1->assignRole('Instructor');

        User::factory(48)->create();
    }
}
