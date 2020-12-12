<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class insertar_poets extends Seeder
{
   
    public function run()
    {
        DB::table('poets')->insert([
            'firstname' => 'Pablo',
            'surname' => 'Neruda',
            'address' => 'CLL LEONOR SANCHEZ 1',
            'postCode' => '33800',
            'telephoneNumber' => '(627)5270929'
        ]);
        DB::table('poets')->insert([
            'firstname' => 'Ali',
            'surname' => 'Calderon',
            'address' => 'CLL CARLOS A GOMEZ 145',
            'postCode' => '95830',
            'telephoneNumber' => '(294)947 0422'
        ]);
        DB::table('poets')->insert([
            'firstname' => 'Carmen',
            'surname' => 'Boullosa',
            'address' => 'CLL FELIPE CARRILLO PUERTO 65',
            'postCode' => '96180',
            'telephoneNumber' => '(924)247 3031'
        ]);
        DB::table('poets')->insert([
            'firstname' => 'David',
            'surname' => 'Huerta',
            'address' => 'CRT COSTERA DEL GOLFO 451968',
            'postCode' => '91020',
            'telephoneNumber' => '(924)245 2201'
        ]);
        DB::table('poets')->insert([
            'firstname' => 'Mario',
            'surname' => 'Bojorquez',
            'address' => 'CLL P TOLLOCAN 306, UNIVERSIDAD',
            'postCode' => '50010',
            'telephoneNumber' => '(722)212 2989'
        ]);
    }
}
