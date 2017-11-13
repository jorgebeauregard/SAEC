<?php

use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
        	'matricula' => 'A00399773',
            'nombre' => 'Irina',
            'apellido_paterno' => 'Rojí',
            'apellido_materno'=> 'Novelo',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 1,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01154613',
            'nombre' => 'Michelle Estrella',
            'apellido_paterno' => 'Martínez ',
            'apellido_materno'=> 'Moctezuma',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 2,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01172074',
            'nombre' => 'Luis Rodrigo ',
            'apellido_paterno' => 'López ',
            'apellido_materno'=> 'González',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 3,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01172831',
            'nombre' => 'Gabriela ',
            'apellido_paterno' => 'Díaz ',
            'apellido_materno'=> 'Lucio',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 4,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01173444',
            'nombre' => 'William Humberto ',
            'apellido_paterno' => 'Solis ',
            'apellido_materno'=> 'Chanona',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 5,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01173766',
            'nombre' => 'Javier Patricio',
            'apellido_paterno' => 'Zepeda ',
            'apellido_materno'=> 'Monroy',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 6,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01272063',
            'nombre' => 'Alberto ',
            'apellido_paterno' => 'Calderon ',
            'apellido_materno'=> 'Amador',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 7,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01274509',
            'nombre' => 'Luis Ángel ',
            'apellido_paterno' => 'Oliver ',
            'apellido_materno'=> 'Gómez',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 8,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01322098',
            'nombre' => 'Nancy ',
            'apellido_paterno' => 'Cue ',
            'apellido_materno'=> 'Castro',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 9,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01322755',
            'nombre' => 'Mario Alberto ',
            'apellido_paterno' => 'Martínez ',
            'apellido_materno'=> 'Villanueva',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 10,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01323309',
            'nombre' => 'Ivonne ',
            'apellido_paterno' => 'Mora ',
            'apellido_materno'=> 'Morales',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 11,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01323311',
            'nombre' => 'Marcela ',
            'apellido_paterno' => 'Juarez ',
            'apellido_materno'=> 'Aranda',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 12,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01323682',
            'nombre' => 'Mary Jose ',
            'apellido_paterno' => 'Ramírez ',
            'apellido_materno'=> 'Zarate',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 13,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01323884',
            'nombre' => 'José Pablo ',
            'apellido_paterno' => 'Marin ',
            'apellido_materno'=> 'Camberos',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 14,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01326686',
            'nombre' => 'Isaac ',
            'apellido_paterno' => 'Ortega ',
            'apellido_materno'=> 'Contreras',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 15,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01327298',
            'nombre' => 'Antonio ',
            'apellido_paterno' => 'Islas ',
            'apellido_materno'=> 'Vazquez',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 16,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01327442',
            'nombre' => 'Germán ',
            'apellido_paterno' => 'Murias ',
            'apellido_materno'=> 'Bobis',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 17,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01327852',
            'nombre' => 'Miguel Ángel ',
            'apellido_paterno' => 'Herrera ',
            'apellido_materno'=> 'Rodríguez',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 18,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01328150',
            'nombre' => 'Barbara',
            'apellido_paterno' => ' Gutiérrez ',
            'apellido_materno'=> 'Peña',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 19,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01328159',
            'nombre' => 'Jose Roberto ',
            'apellido_paterno' => 'Ramírez ',
            'apellido_materno'=> 'Rivera',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 20,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01328282',
            'nombre' => 'Cesar ',
            'apellido_paterno' => 'Frias ',
            'apellido_materno'=> 'Ortega',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 21,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01329116',
            'nombre' => 'Ricardo ',
            'apellido_paterno' => 'Roost ',
            'apellido_materno'=> 'Díaz',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 22,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01329559',
            'nombre' => 'Karol Aranza ',
            'apellido_paterno' => 'Valdés ',
            'apellido_materno'=> 'Zavala',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 23,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01329876',
            'nombre' => 'Rosario Andrea ',
            'apellido_paterno' => 'Rodríguez ',
            'apellido_materno'=> 'Montiel',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 24,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01329877',
            'nombre' => 'Marcelo ',
            'apellido_paterno' => 'Velasco ',
            'apellido_materno'=> 'Cuevas',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 25,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01329961',
            'nombre' => 'Fanny Vianey ',
            'apellido_paterno' => 'Rivera ',
            'apellido_materno'=> 'García',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 26,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01329982',
            'nombre' => 'Martha del Carmen ',
            'apellido_paterno' => 'Ramiro ',
            'apellido_materno'=> 'López',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 27,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01363086',
            'nombre' => 'Julia María ',
            'apellido_paterno' => 'Castorena ',
            'apellido_materno'=> 'Estefan',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 28,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01420953',
            'nombre' => 'Emmanuel ',
            'apellido_paterno' => 'Fernández ',
            'apellido_materno'=> 'Maldonado',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 29,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01421900',
            'nombre' => 'Grecia ',
            'apellido_paterno' => 'Villegas ',
            'apellido_materno'=> 'Delgado',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 30,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01550759',
            'nombre' => 'Guadalupe Monserrat ',
            'apellido_paterno' => 'Basilio ',
            'apellido_materno'=> 'Corona',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 31,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01730341',
            'nombre' => 'Lourdes ',
            'apellido_paterno' => 'Figueroa ',
            'apellido_materno'=> 'Reyes',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 32,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01730538',
            'nombre' => 'Alberto Jesús ',
            'apellido_paterno' => 'Hernández ',
            'apellido_materno'=> 'García',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 33,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01731124',
            'nombre' => 'César Jesús ',
            'apellido_paterno' => 'Vega ',
            'apellido_materno'=> 'Medina',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 34,
    	]);

       DB::table('alumnos')->insert([
            'matricula' => 'A01731255',
            'nombre' => 'Diego Enrique Rivas',
            'apellido_paterno' => 'Sánchez ',
            'apellido_materno'=> 'Rangel',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 35,
        ]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01270395',
            'nombre' => 'Nydia Ingrid',
            'apellido_paterno' => 'Islas ',
            'apellido_materno'=> 'Vazquez',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 36,
    	]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01322299',
            'nombre' => 'Jesús Daniel',
            'apellido_paterno' => 'Hernández',
            'apellido_materno'=> 'Hernández',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 37,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01325073',
            'nombre' => 'Juan Francisco',
            'apellido_paterno' => 'Martínez',
            'apellido_materno'=> 'Molina',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 38,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01328327',
            'nombre' => 'Karina',
            'apellido_paterno' => 'Carmona',
            'apellido_materno'=> 'Núñez',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 39,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01328828',
            'nombre' => 'Omar',
            'apellido_paterno' => 'Dorantes ',
            'apellido_materno'=> 'Herrera',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 40,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01329057',
            'nombre' => 'Lilian Mariel',
            'apellido_paterno' => 'Acevedo  ',
            'apellido_materno'=> 'Bernal',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 41,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01329388',
            'nombre' => 'Victor Alejandro',
            'apellido_paterno' => 'Ruiz  ',
            'apellido_materno'=> 'Martell',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 42,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01329410',
            'nombre' => 'Rodolfo Isaí ',
            'apellido_paterno' => 'Ramos  ',
            'apellido_materno'=> 'Moreno',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 43,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01329822',
            'nombre' => 'Elisa Paulina',
            'apellido_paterno' => 'Lara  ',
            'apellido_materno'=> 'Ramírez',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 44,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01329862',
            'nombre' => 'Boris Igor',
            'apellido_paterno' => 'Hernández',
            'apellido_materno'=> 'Almendra',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 45,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01329872',
            'nombre' => 'Manuel Alejandro',
            'apellido_paterno' => 'Neri',
            'apellido_materno'=> 'Reyes',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 46,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01550174',
            'nombre' => 'José Gustavo',
            'apellido_paterno' => 'Lara ',
            'apellido_materno'=> 'Ortega',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 47,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01551482',
            'nombre' => 'Dana Marlem',
            'apellido_paterno' => 'Dinorín ',
            'apellido_materno'=> 'Santiago',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 48,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01730943',
            'nombre' => 'Elia Ivonn',
            'apellido_paterno' => 'González ',
            'apellido_materno'=> 'Guevara',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 49,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01730946',
            'nombre' => 'Eduardo ',
            'apellido_paterno' => 'Cortés ',
            'apellido_materno'=> 'Calderón',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 50,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01731161',
            'nombre' => 'Javier Alonso',
            'apellido_paterno' => 'Dzib ',
            'apellido_materno'=> 'Rodríguez',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 51,
        ]);

        DB::table('alumnos')->insert([
            'matricula' => 'A01731215',
            'nombre' => 'Cecilia ',
            'apellido_paterno' => 'Sánchez  ',
            'apellido_materno'=> 'Buendía',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 2,
            'user_id' => 52,
        ]);


    }
}
