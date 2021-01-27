<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Walter de Araujo Silva',
            'email' => 'admin@user.com.br'
        ]);

        factory(\App\User::class)->create([
            'name' => 'Suzana de Araujo Silva',
            'email' => 'client@user.com.br'
        ]);
        factory(\App\User::class, 10)->create();
    }
}
