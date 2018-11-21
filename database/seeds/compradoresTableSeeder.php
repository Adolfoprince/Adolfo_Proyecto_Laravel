<?php

use Illuminate\Database\Seeder;
use App\Compradores;

class compradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Compradores::class, 30)->create();
    }
}
