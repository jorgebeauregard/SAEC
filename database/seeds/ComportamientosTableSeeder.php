<?php

use Illuminate\Database\Seeder;

class ComportamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comportamientos')->insert([
			'pregunta' => '¿Tuvo buena disposición?',
			'descripcion' => 'Mostró interés por el trabajo y tuvo disponibilidad de tiempo para realizar la actividad.',
		]);

		DB::table('comportamientos')->insert([
			'pregunta' => '¿Su actitud contribuyó a la correcta realización de la actividad?',
			'descripcion' => 'Sus comportamientos fomentaron una buena colaboración entre compañeros.',
		]);

		DB::table('comportamientos')->insert([
			'pregunta' => '¿Aportó ideas, perspectivas u opiniones útiles?',
			'descripcion' => 'Sus aportaciones fueron significativas.',
		]);

		DB::table('comportamientos')->insert([
			'pregunta' => '¿Fomentó el pensamiento crítico en torno a la actividad?',
			'descripcion' => 'Sus opiniones y puntos de vista estaban fundados en conocimiento obtenido de fuentes fiables.',
		]);

		DB::table('comportamientos')->insert([
			'pregunta' => '¿Mostró respeto a sus compañeros en todo momento?',
			'descripcion' => 'Es decir, no se excluyó o denigró de ninguna forma a alguno de sus compañeros.',
		]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Fue cordial con sus compañeros?',
        	'descripcion'=>'Fue amable con sus compañeros y buscó crear un ambiente agradable',
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿El alumno fue ordenado con su trabajo?',
        	'descripcion'=>'Realizó su trabajo de manera metódica y ordenada',
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Fue responsable con su trabajo?',
        	'descripcion'=>'Realizó lo que le correspondía y asumió responsabilidad de los errores que pudiera tener su trabajo',
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Investigó información necesaria?',
        	'descripcion'=>'Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad',
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Ayudó a compañeros con dificultades?',
        	'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
        ]);

    }
}
