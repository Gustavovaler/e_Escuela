<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'name' => 'mat3fin',
           'apellido' => 'Lousf3tou',
           'is_profesor' => 0,
           'password' => 'paska3sflksalk',
           'email' => 'asdma23f2sd@ga.com',
           'telefono' => '45454f3545',
           'dni' => '324234f332',



       ]);

       $arrays = range(0, 100);
       foreach ($arrays as $valor) {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'apellido' => Str::random(10),
            'is_profesor' => rand(0, 1),
            'password' => Str::random(10),
            'email' => Str::random(10),
            'telefono' => Str::random(10),
            'dni' => Str::random(10),
           
        ]);
       }


    }
}
