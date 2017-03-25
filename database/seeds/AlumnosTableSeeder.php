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
        	'matricula' => 'A01321230',
            'nombre' => 'Julian',
            'apellido' => 'Beauregard',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321231',
            'nombre' => 'Guillermo',
            'apellido' => 'Jimenez',
            'prom_anterior' => 85.00,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321232',
            'nombre' => 'Maria',
            'apellido' => 'Gomez',
            'prom_anterior' => 92.00,
            'campus_id' => 1,
            'plan_id' => 3,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321233',
            'nombre' => 'Alejandra',
            'apellido' => 'Delgado',
            'prom_anterior' => 96.00,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321234',
            'nombre' => 'Jorge',
            'apellido' => 'Perez',
            'prom_anterior' => 100.00,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321235',
            'nombre' => 'Miguel',
            'apellido' => 'Sevilla',
            'prom_anterior' => 81.54,
            'campus_id' => 2,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321236',
            'nombre' => 'Fernanda',
            'apellido' => 'Morales',
            'prom_anterior' => 86.52,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321237',
            'nombre' => 'Martin',
            'apellido' => 'Ibarra',
            'prom_anterior' => 87.50,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

         DB::table('alumnos')->insert([
        	'matricula' => 'A01321238',
            'nombre' => 'Joel',
            'apellido' => 'Perez',
            'prom_anterior' => 90.32,
            'campus_id' => 3,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321239',
            'nombre' => 'Alejandro',
            'apellido' => 'Hernandez',
            'prom_anterior' => 70.52,
            'campus_id' => 3,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321240',
            'nombre' => 'Adrian',
            'apellido' => 'Hernandez',
            'prom_anterior' => 75.50,
            'campus_id' => 2,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321241',
            'nombre' => 'Ermenegilda',
            'apellido' => 'Ibarra',
            'prom_anterior' => 92.58,
            'campus_id' => 2,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321242',
            'nombre' => 'Walter',
            'apellido' => 'White',
            'prom_anterior' => 100.00,
            'campus_id' => 2,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321243',
            'nombre' => 'Jessie',
            'apellido' => 'Pinkman',
            'prom_anterior' => 70.21,
            'campus_id' => 3,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321244',
            'nombre' => 'Jimmy',
            'apellido' => 'Magil',
            'prom_anterior' => 82.69,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321245',
            'nombre' => 'Betsabe',
            'apellido' => 'Getsemani',
            'prom_anterior' => 100.00,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321246',
            'nombre' => 'Skyller',
            'apellido' => 'Whithbrown',
            'prom_anterior' => 93.76,
            'campus_id' => 3,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321247',
            'nombre' => 'Chuck',
            'apellido' => 'Rodriguez',
            'prom_anterior' => 69.69,
            'campus_id' => 3,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321248',
            'nombre' => 'Giselle',
            'apellido' => 'Borden',
            'prom_anterior' => 80.00,
            'campus_id' => 3,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321249',
            'nombre' => 'Pepe',
            'apellido' => 'Rosales',
            'prom_anterior' => 78.47,
            'campus_id' => 3,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321250',
            'nombre' => 'Ana',
            'apellido' => 'Delina',
            'prom_anterior' => 90.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321251',
            'nombre' => 'Noel',
            'apellido' => 'Claus',
            'prom_anterior' => 93.10,
            'campus_id' => 2,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321252',
            'nombre' => 'Sofia',
            'apellido' => 'Juarez',
            'prom_anterior' => 72.30,
            'campus_id' => 3,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321253',
            'nombre' => 'Gustavo',
            'apellido' => 'Castillo',
            'prom_anterior' => 96.01,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321254',
            'nombre' => 'Petra',
            'apellido' => 'Jonson',
            'prom_anterior' => 95.50,
            'campus_id' => 2,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321255',
            'nombre' => 'Miguel',
            'apellido' => 'Maus',
            'prom_anterior' => 82.14,
            'campus_id' => 2,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321256',
            'nombre' => 'Maria',
            'apellido' => 'Sol',
            'prom_anterior' => 76.85,
            'campus_id' => 3,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321257',
            'nombre' => 'Jack',
            'apellido' => 'Redfield',
            'prom_anterior' => 89.36,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321258',
            'nombre' => 'Carlota',
            'apellido' => 'Abella',
            'prom_anterior' => 100.00,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321259',
            'nombre' => 'Jesus',
            'apellido' => 'Vazquez',
            'prom_anterior' => 98.23,
            'campus_id' => 3,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321260',
            'nombre' => 'Martina',
            'apellido' => 'Martinez',
            'prom_anterior' => 83.99,
            'campus_id' => 3,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321261',
            'nombre' => 'Fransisco',
            'apellido' => 'Alfonsiano',
            'prom_anterior' => 72.65,
            'campus_id' => 3,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);
 
        DB::table('alumnos')->insert([
        	'matricula' => 'A01321262',
            'nombre' => 'Veronica',
            'apellido' => 'Toto',
            'prom_anterior' => 94.33,
            'campus_id' => 2,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321263',
            'nombre' => 'Fernando',
            'apellido' => 'Vargas',
            'prom_anterior' => 78.65,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321264',
            'nombre' => 'Marlene',
            'apellido' => 'Callado',
            'prom_anterior' => 82.25,
            'campus_id' => 3,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321265',
            'nombre' => 'Luis',
            'apellido' => 'Sol',
            'prom_anterior' => 83.25,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321266',
            'nombre' => 'Elizabeth',
            'apellido' => 'Windzord',
            'prom_anterior' => 20.35,
            'campus_id' => 2,
            'plan_id' => 3,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321267',
            'nombre' => 'Timon',
            'apellido' => 'Vela',
            'prom_anterior' => 77.69,
            'campus_id' => 3,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321268',
            'nombre' => 'Juana',
            'apellido' => 'Juarez',
            'prom_anterior' => 85.74,
            'campus_id' => 1,
            'plan_id' => 3,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321269',
            'nombre' => 'Oracio',
            'apellido' => 'Leyja',
            'prom_anterior' => 71.07,
            'campus_id' => 2,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321270',
            'nombre' => 'Beatriz',
            'apellido' => 'Borges',
            'prom_anterior' => 93.45,
            'campus_id' => 2,
            'plan_id' => 2,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321271',
            'nombre' => 'Ramon',
            'apellido' => 'Valdez',
            'prom_anterior' => 70.00,
            'campus_id' => 1,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321272',
            'nombre' => 'Andrea',
            'apellido' => 'Fernandez',
            'prom_anterior' => 76.89,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321273',
            'nombre' => 'Remus',
            'apellido' => 'Lupin',
            'prom_anterior' => 82.55,
            'campus_id' => 3,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321274',
            'nombre' => 'Mariana',
            'apellido' => 'Morales',
            'prom_anterior' => 77.88,
            'campus_id' => 3,
            'plan_id' => 3,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321275',
            'nombre' => 'Jaime',
            'apellido' => 'Knight',
            'prom_anterior' => 88.66,
            'campus_id' => 2,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321276',
            'nombre' => 'Maria Jose',
            'apellido' => 'Borja',
            'prom_anterior' => 85.23,
            'campus_id' => 2,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321277',
            'nombre' => 'Carlos',
            'apellido' => 'Gutierres',
            'prom_anterior' => 73.21,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321278',
            'nombre' => 'Victoria',
            'apellido' => 'Morelos',
            'prom_anterior' => 65.30,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321279',
            'nombre' => 'Rafael',
            'apellido' => 'Bustos',
            'prom_anterior' => 77.23,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);
    }
}
