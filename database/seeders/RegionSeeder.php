<?php

namespace Database\Seeders;

use App\Models\Address\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $regions = [
            [1, 'Región de Tarapacá', 'Tarapacá', 'I'],
            [2, 'Región de Antofagasta', 'Antofagasta', 'II'],
            [3, 'Región de Atacama', 'Atacama', 'III'],
            [4, 'Región de Coquimbo', 'Coquimbo', 'IV'],
            [5, 'Región de Valparaíso', 'Valparaiso', 'V'],
            [6, 'Región del Libertador General Bernardo O\'Higgins', 'O\'Higgins', 'VI'],
            [7, 'Región del Maule', 'Maule', 'VII'],
            [8, 'Región del Biobío', 'Biobío', 'VIII'],
            [9, 'Región de La Araucanía', 'Araucanía', 'IX'],
            [10, 'Región de Los Lagos', 'Los Lagos', 'X'],
            [11, 'Región de Aisén del General Carlos Ibáñez del Campo', 'Aisén', 'XI'],
            [12, 'Región de Magallanes y de la Antártica Chilena', 'Magallanes', 'XII'],
            [13, 'Región Metropolitana de Santiago', 'Metropolitana', 'RM'],
            [14, 'Región de Los Ríos', 'Los Ríos', 'XIV'],
            [15, 'Región de Arica y Parinacota', 'Arica y Parinacota', 'XV'],
            [16, 'Región de Ñuble', 'Ñuble', 'XVI'],
        ];

        foreach ($regions as $region) {
            Region::create([
                'id' => $region[0],
                'name' => $region[1],
                'short_name' => $region[2],
                'rom' => $region[3],
            ]);
        }


    }
}
