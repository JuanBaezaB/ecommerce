<?php

namespace Database\Seeders;

use App\Models\Address\Commune;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $communes = [
            ['Arica', 15, 1],
            ['Camarones', 15, 1],
            ['General Lagos', 15, 2],
            ['Putre', 15, 2],
            ['Alto Hospicio', 1, 3],
            ['Iquique', 1, 3],
            ['Camiña', 1, 4],
            ['Colchane', 1, 4],
            ['Huara', 1, 4],
            ['Pica', 1, 4],
            ['Pozo Almonte', 1, 4],
            ['Antofagasta', 2, 5],
            ['Mejillones', 2, 5],
            ['Sierra Gorda', 2, 5],
            ['Taltal', 2, 5],
            ['Calama', 2, 6],
            ['Ollague', 2, 6],
            ['San Pedro de Atacama', 2, 6],
            ['María Elena', 2, 7],
            ['Tocopilla', 2, 7],
            ['Chañaral', 3, 8],
            ['Diego de Almagro', 3, 8],
            ['Caldera', 3, 8],
            ['Copiapó', 3, 9],
            ['Tierra Amarilla', 3, 9],
            ['Alto del Carmen', 3, 10],
            ['Freirina', 3, 10],
            ['Huasco', 3, 10],
            ['Vallenar', 3, 10],
            ['Canela', 4, 11],
            ['Illapel', 4, 11],
            ['Los Vilos', 4, 11],
            ['Salamanca', 4, 11],
            ['Andacollo', 4, 11],
            ['Coquimbo', 4, 11],
            ['La Higuera', 4, 12],
            ['La Serena', 4, 12],
            ['Paihuaco', 4, 12],
            ['Vicuña', 4, 12],
            ['Combarbalá', 4, 13],
            ['Monte Patria', 4, 13],
            ['Ovalle', 4, 13],
            ['Punitaqui', 4, 13],
            ['Río Hurtado', 4, 13],
            ['Isla de Pascua', 5, 14],
            ['Calle Larga', 5, 15],
            ['Los Andes', 5, 15],
            ['Rinconada', 5, 15],
            ['San Esteban', 5, 15],
            ['La Ligua', 5, 17],
            ['Papudo', 5, 17],
            ['Petorca', 5, 17],
            ['Zapallar', 5, 17],
            ['Hijuelas', 5, 18],
            ['La Calera', 5, 18],
            ['La Cruz', 5, 18],
            ['Limache', 5, 16],
            ['Nogales', 5, 18],
            ['Olmué', 5, 16],
            ['Quillota', 5, 18],
            ['Algarrobo', 5, 19],
            ['Cartagena', 5, 19],
            ['El Quisco', 5, 19],
            ['El Tabo', 5, 19],
            ['San Antonio', 5, 19],
            ['Santo Domingo', 5, 19],
            ['Catemu', 5, 20],
            ['Llaillay', 5, 20],
            ['Panquehue', 5, 20],
            ['Putaendo', 5, 20],
            ['San Felipe', 5, 20],
            ['Santa María', 5, 20],
            ['Casablanca', 5, 21],
            ['Concón', 5, 21],
            ['Juan Fernández', 5, 21],
            ['Puchuncaví', 5, 21],
            ['Quilpué', 5, 16],
            ['Quintero', 5, 21],
            ['Valparaíso', 5, 21],
            ['Villa Alemana', 5, 16],
            ['Viña del Mar', 5, 21],
            ['Colina', 13, 22],
            ['Lampa', 13, 22],
            ['Tiltil', 13, 22],
            ['Pirque', 13, 23],
            ['Puente Alto', 13, 23],
            ['San José de Maipo', 13, 23],
            ['Buin', 13, 24],
            ['Calera de Tango', 13, 24],
            ['Paine', 13, 24],
            ['San Bernardo', 13, 24],
            ['Alhué', 13, 25],
            ['Curacaví', 13, 25],
            ['María Pinto', 13, 25],
            ['Melipilla', 13, 25],
            ['San Pedro', 13, 25],
            ['Cerrillos', 13, 26],
            ['Cerro Navia', 13, 26],
            ['Conchalí', 13, 26],
            ['El Bosque', 13, 26],
            ['Estación Central', 13, 26],
            ['Huechuraba', 13, 26],
            ['Independencia', 13, 26],
            ['La Cisterna', 13, 26],
            ['La Granja', 13, 26],
            ['La Florida', 13, 26],
            ['La Pintana', 13, 26],
            ['La Reina', 13, 26],
            ['Las Condes', 13, 26],
            ['Lo Barnechea', 13, 26],
            ['Lo Espejo', 13, 26],
            ['Lo Prado', 13, 26],
            ['Macul', 13, 26],
            ['Maipú', 13, 26],
            ['Ñuñoa', 13, 26],
            ['Pedro Aguirre Cerda', 13, 26],
            ['Peñalolén', 13, 26],
            ['Providencia', 13, 26],
            ['Pudahuel', 13, 26],
            ['Quilicura', 13, 26],
            ['Quinta Normal', 13, 26],
            ['Recoleta', 13, 26],
            ['Renca', 13, 26],
            ['San Miguel', 13, 26],
            ['San Joaquín', 13, 26],
            ['San Ramón', 13, 26],
            ['Santiago', 13, 26],
            ['Vitacura', 13, 26],
            ['El Monte', 13, 27],
            ['Isla de Maipo', 13, 27],
            ['Padre Hurtado', 13, 27],
            ['Peñaflor', 13, 27],
            ['Talagante', 13, 27],
            ['Codegua', 6, 28],
            ['Coínco', 6, 28],
            ['Coltauco', 6, 28],
            ['Doñihue', 6, 28],
            ['Graneros', 6, 28],
            ['Las Cabras', 6, 28],
            ['Machalí', 6, 28],
            ['Malloa', 6, 28],
            ['Mostazal', 6, 28],
            ['Olivar', 6, 28],
            ['Peumo', 6, 28],
            ['Pichidegua', 6, 28],
            ['Quinta de Tilcoco', 6, 28],
            ['Rancagua', 6, 28],
            ['Rengo', 6, 28],
            ['Requínoa', 6, 28],
            ['San Vicente de Tagua Tagua', 6, 28],
            ['La Estrella', 6, 29],
            ['Litueche', 6, 29],
            ['Marchihue', 6, 29],
            ['Navidad', 6, 29],
            ['Paredones', 6, 29],
            ['Pichilemu', 6, 29],
            ['Chépica', 6, 30],
            ['Chimbarongo', 6, 30],
            ['Lolol', 6, 30],
            ['Nancagua', 6, 30],
            ['Palmilla', 6, 30],
            ['Peralillo', 6, 30],
            ['Placilla', 6, 30],
            ['Pumanque', 6, 30],
            ['San Fernando', 6, 30],
            ['Santa Cruz', 6, 30],
            ['Cauquenes', 7, 31],
            ['Chanco', 7, 31],
            ['Pelluhue', 7, 31],
            ['Curicó', 7, 32],
            ['Hualañé', 7, 32],
            ['Licantén', 7, 32],
            ['Molina', 7, 32],
            ['Rauco', 7, 32],
            ['Romeral', 7, 32],
            ['Sagrada Familia', 7, 32],
            ['Teno', 7, 32],
            ['Vichuquén', 7, 32],
            ['Colbún', 7, 33],
            ['Linares', 7, 33],
            ['Longaví', 7, 33],
            ['Parral', 7, 33],
            ['Retiro', 7, 33],
            ['San Javier', 7, 33],
            ['Villa Alegre', 7, 33],
            ['Yerbas Buenas', 7, 33],
            ['Constitución', 7, 34],
            ['Curepto', 7, 34],
            ['Empedrado', 7, 34],
            ['Maule', 7, 34],
            ['Pelarco', 7, 34],
            ['Pencahue', 7, 34],
            ['Río Claro', 7, 34],
            ['San Clemente', 7, 34],
            ['San Rafael', 7, 34],
            ['Talca', 7, 34],
            ['Bulnes', 16, 35],
            ['Chillán', 16, 35],
            ['Chillán Viejo', 16, 35],
            ['Cobquecura', 16, 36],
            ['Coelemu', 16, 36],
            ['Coihueco', 16, 37],
            ['El Carmen', 16, 35],
            ['Ninhue', 16, 36],
            ['Ñiquen', 16, 37],
            ['Pemuco', 16, 35],
            ['Pinto', 16, 35],
            ['Portezuelo', 16, 36],
            ['Quirihue', 16, 36],
            ['Ránquil', 16, 36],
            ['Treguaco', 16, 36],
            ['Quillón', 16, 35],
            ['San Carlos', 16, 37],
            ['San Fabián', 16, 37],
            ['San Ignacio', 16, 35],
            ['San Nicolás', 16, 37],
            ['Yungay', 16, 35],
            ['Arauco', 8, 38],
            ['Cañete', 8, 38],
            ['Contulmo', 8, 38],
            ['Curanilahue', 8, 38],
            ['Lebu', 8, 38],
            ['Los Álamos', 8, 38],
            ['Tirúa', 8, 38],
            ['Alto Biobío', 8, 39],
            ['Antuco', 8, 39],
            ['Cabrero', 8, 39],
            ['Laja', 8, 39],
            ['Los Ángeles', 8, 39],
            ['Mulchén', 8, 39],
            ['Nacimiento', 8, 39],
            ['Negrete', 8, 39],
            ['Quilaco', 8, 39],
            ['Quilleco', 8, 39],
            ['San Rosendo', 8, 39],
            ['Santa Bárbara', 8, 39],
            ['Tucapel', 8, 39],
            ['Yumbel', 8, 39],
            ['Chiguayante', 8, 40],
            ['Concepción', 8, 40],
            ['Coronel', 8, 40],
            ['Florida', 8, 40],
            ['Hualpén', 8, 40],
            ['Hualqui', 8, 40],
            ['Lota', 8, 40],
            ['Penco', 8, 40],
            ['San Pedro de La Paz', 8, 40],
            ['Santa Juana', 8, 40],
            ['Talcahuano', 8, 40],
            ['Tomé', 8, 40],
            ['Carahue', 9, 41],
            ['Cholchol', 9, 41],
            ['Cunco', 9, 41],
            ['Curarrehue', 9, 41],
            ['Freire', 9, 41],
            ['Galvarino', 9, 41],
            ['Gorbea', 9, 41],
            ['Lautaro', 9, 41],
            ['Loncoche', 9, 41],
            ['Melipeuco', 9, 41],
            ['Nueva Imperial', 9, 41],
            ['Padre Las Casas', 9, 41],
            ['Perquenco', 9, 41],
            ['Pitrufquén', 9, 41],
            ['Pucón', 9, 41],
            ['Saavedra', 9, 41],
            ['Temuco', 9, 41],
            ['Teodoro Schmidt', 9, 41],
            ['Toltén', 9, 41],
            ['Vilcún', 9, 41],
            ['Villarrica', 9, 41],
            ['Angol', 9, 42],
            ['Collipulli', 9, 42],
            ['Curacautín', 9, 42],
            ['Ercilla', 9, 42],
            ['Lonquimay', 9, 42],
            ['Los Sauces', 9, 42],
            ['Lumaco', 9, 42],
            ['Purén', 9, 42],
            ['Renaico', 9, 42],
            ['Traiguén', 9, 42],
            ['Victoria', 9, 42],
            ['Corral', 14, 43],
            ['Lanco', 14, 43],
            ['Los Lagos', 14, 43],
            ['Máfil', 14, 43],
            ['Mariquina', 14, 43],
            ['Paillaco', 14, 43],
            ['Panguipulli', 14, 43],
            ['Valdivia', 14, 43],
            ['Futrono', 14, 44],
            ['La Unión', 14, 44],
            ['Lago Ranco', 14, 44],
            ['Río Bueno', 14, 44],
            ['Ancud', 10, 45],
            ['Castro', 10, 45],
            ['Chonchi', 10, 45],
            ['Curaco de Vélez', 10, 45],
            ['Dalcahue', 10, 45],
            ['Puqueldón', 10, 45],
            ['Queilén', 10, 45],
            ['Quemchi', 10, 45],
            ['Quellón', 10, 45],
            ['Quinchao', 10, 45],
            ['Calbuco', 10, 46],
            ['Cochamó', 10, 46],
            ['Fresia', 10, 46],
            ['Frutillar', 10, 46],
            ['Llanquihue', 10, 46],
            ['Los Muermos', 10, 46],
            ['Maullín', 10, 46],
            ['Puerto Montt', 10, 46],
            ['Puerto Varas', 10, 46],
            ['Osorno', 10, 47],
            ['Puero Octay', 10, 47],
            ['Purranque', 10, 47],
            ['Puyehue', 10, 47],
            ['Río Negro', 10, 47],
            ['San Juan de la Costa', 10, 47],
            ['San Pablo', 10, 47],
            ['Chaitén', 10, 48],
            ['Futaleufú', 10, 48],
            ['Hualaihué', 10, 48],
            ['Palena', 10, 48],
            ['Aisén', 11, 49],
            ['Cisnes', 11, 49],
            ['Guaitecas', 11, 49],
            ['Cochrane', 11, 50],
            ['O\'higgins', 11, 50],
            ['Tortel', 11, 50],
            ['Coihaique', 11, 51],
            ['Lago Verde', 11, 51],
            ['Chile Chico', 11, 52],
            ['Río Ibáñez', 11, 52],
            ['Antártica', 12, 53],
            ['Cabo de Hornos', 12, 53],
            ['Laguna Blanca', 12, 54],
            ['Punta Arenas', 12, 54],
            ['Río Verde', 12, 54],
            ['San Gregorio', 12, 54],
            ['Porvenir', 12, 55],
            ['Primavera', 12, 55],
            ['Timaukel', 12, 55],
            ['Natales', 12, 56],
            ['Torres del Paine', 12, 56],
            ['Cabildo', 5, 17],
        ];

        foreach ($communes as $commune) {
            Commune::create([
                'name' => $commune[0],
                'province_id' => $commune[2],
            ]);
        }


    }
}
