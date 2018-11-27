<?php

use Illuminate\Database\Seeder;
use App\Pagos;

class pagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pagos::class, 8)->create();
    }
}
