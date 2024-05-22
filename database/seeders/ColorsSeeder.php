<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')-> insert([
            [
                'colorId'=> 1,
                'colorNombre'=> 'negro',
                'colorImagen'=> '',
                'colorDescripcion'=> 'El negro es un símbolo del misterio, el poder, la elegancia y la sofisticación',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'colorId'=> 2,
                'colorNombre'=> 'blanco',
                'colorImagen'=> '',
                'colorDescripcion'=> 'Considerado el color de la pureza y la perfección.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'colorId'=> 3,
                'colorNombre'=> 'gris',
                'colorImagen'=> '',
                'colorDescripcion'=>'Este es un color que refleja mucha elegancia, dramatismo y misterio.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
