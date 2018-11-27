<?php

use Illuminate\Database\Seeder;
use App\Productos;

class productosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Productos::class, 8)->create();
    }
}
