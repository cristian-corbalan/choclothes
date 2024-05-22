<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tienda')-> insert([
            [
                'catalogoId'=> 1,
                'categoria'=> 'Top',
                'modelo'=> 'Top Lara',
                'descripcion'=> 'Top fabricado con materiales transpirables y de secado rápido.',
                'imagen'=> 'productos/top01.jpg',
                'codigo'=> 'TOP01',
                'precio'=> 5200,
                'fechaEntrada'=> '2024-05-22',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'catalogoId'=> 2,
                'categoria'=> 'Campera',
                'modelo'=> 'Campera Slim',
                'descripcion'=> 'Campera con amplia capucha te protege del frío, mientras que los prácticos bolsillos mantienen tus objetos personales seguros. Combinalo con tus prendas favoritas y sentí la diferencia desde el primer momento.',
                'imagen'=> 'productos/cam01.jpg',
                'codigo'=> 'CAM01',
                'precio'=> 35000,
                'fechaEntrada'=> '2024-05-22',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'catalogoId'=> 3,
                'categoria'=> 'Calza',
                'modelo'=> 'Calza Kiara',
                'descripcion'=> 'Confeccionada en poliéster para una mayor resistencia y durabilidad, además del máximo confort diario.',
                'imagen'=> 'productos/cal02.jpg',
                'codigo'=> 'CAL01',
                'precio'=> 15000,
                'fechaEntrada'=> '2024-05-22',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'catalogoId'=> 4,
                'categoria'=> 'Calza',
                'modelo'=> 'Calza Loto',
                'descripcion'=> 'calza confeccionada en tela elastizada y transpirable.',
                'imagen'=> 'productos/cal01.jpg',
                'codigo'=> 'CAL02',
                'precio'=> 18000,
                'fechaEntrada'=> '2024-05-22',
                'created_at' => now(),
                'updated_at' => now(),


            ],
            [
                'catalogoId'=> 5,
                'categoria'=> 'Campera',
                'modelo'=> 'Campera Lotto Speed',
                'descripcion'=> 'Campera con cierre en la parte frontal y cuello alto para proteger tu garganta los días más fríos. Sus estampas laterales y el logo de la marca en el frente son el detalle final de esta prenda.',
                'imagen'=> 'productos/cam02.jpg',
                'codigo'=> 'CAM02',
                'precio'=> 38000,
                'fechaEntrada'=> '2024-05-22',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'catalogoId'=> 6,
                'categoria'=> 'Conjunto',
                'modelo'=> 'Conjunto Dual Lotto',
                'descripcion'=> 'Conjunto de entrenamiento Lotto Dual de tela de poliéster duradera y resistente y su cuello alto con cierre completo',
                'imagen'=> 'productos/con01.jpeg',
                'codigo'=> 'CON01',
                'precio'=> 36000,
                'fechaEntrada'=> '2024-05-10',
                'created_at' => now(),
                'updated_at' => now(),

            ],


        ]);
    }
}
