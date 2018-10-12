<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Soporte Tecnico',
            'ape_paterno' => str_random(10),
            'ape_materno' => str_random(10),
            'email' => 'soporte@gmail.com',
            'password' => bcrypt('123'),
            'apikey' => 'soporte'
        ]);
    }
}
