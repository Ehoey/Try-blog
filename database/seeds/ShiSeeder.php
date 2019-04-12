<?php

use Illuminate\Database\Seeder;

class ShiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Shi::class ,10)->create();
    }
}
