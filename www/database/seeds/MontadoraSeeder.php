<?php

use Illuminate\Database\Seeder;

class MontadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Montadora::class,10)->create();
    }
}
