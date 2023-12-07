<?php

namespace Database\Seeders;

use App\Models\Address\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincias = [
            [1, 'Arica', 15],
            [2, 'Parinacota', 15],
            [3, 'Iquique', 1],
            [4, 'Tamarugal', 1],
            [5, 'Antofagasta', 2],
            [6, 'El Loa', 2],
            [7, 'Tocopilla', 2],
            [8, 'Chañaral', 3],
            [9, 'Copiapó', 3],
            [10, 'Huasco', 3],
            [11, 'Choapa', 4],
            [12, 'Elqui', 4],
            [13, 'Limarí', 4],
            [14, 'Isla De Pascua', 5],
            [15, 'Los Andes', 5],
            [16, 'Marga Marga', 5],
            [17, 'Petorca', 5],
            [18, 'Quillota', 5],
            [19, 'San Antonio', 5],
            [20, 'San Felipe', 5],
            [21, 'Valparaíso', 5],
            [22, 'Chacabuco', 13],
            [23, 'Cordillera', 13],
            [24, 'Maipo', 13],
            [25, 'Melipilla', 13],
            [26, 'Santiago', 13],
            [27, 'Talagante', 13],
            [28, 'Cachapoal', 6],
            [29, 'Cardenal Caro', 6],
            [30, 'Colchagua', 6],
            [31, 'Cauquenes', 7],
            [32, 'Curicó', 7],
            [33, 'Linares', 7],
            [34, 'Talca', 7],
            [35, 'Diguillín', 16],
            [36, 'Itata', 16],
            [37, 'Punilla', 16],
            [38, 'Arauco', 8],
            [39, 'Bío-Bío', 8],
            [40, 'Concepción', 8],
            [41, 'Cautín', 9],
            [42, 'Malleco', 9],
            [43, 'Valdivia', 14],
            [44, 'Ranco', 14],
            [45, 'Chiloé', 10],
            [46, 'Llanquihue', 10],
            [47, 'Osorno', 10],
            [48, 'Palena', 10],
            [49, 'Aisén', 11],
            [50, 'Capitán Prat', 11],
            [51, 'Coihayque', 11],
            [52, 'General Carrera', 11],
            [53, 'Antártica Chilena', 12],
            [54, 'Magallanes', 12],
            [55, 'Tierra del Fuego', 12],
            [56, 'Última Esperanza', 12],
        ];

        foreach ($provincias as $provincia) {
            Province::create([
                'id' => $provincia[0],
                'name' => $provincia[1],
                'region_id' => $provincia[2],
            ]);
        }
    }
}
