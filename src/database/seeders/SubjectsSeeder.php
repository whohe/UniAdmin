<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			\DB::table('subjects')->insert([
				'name' => 'Algebra Lineal',
				'description' => 'Rama del álgebra que se encarga del estudio de matrices, vectores, espacios vectoriales y ecuaciones de tipo lineal',
        'credits' => 3,
        'knowledge_area' => 'Matematicas',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Calculo diferencial',
				'description' => 'xxxxxxx xxxxxxxxxx xxxxxxxxxxx',
        'credits' => 3,
        'knowledge_area' => 'Matematicas',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Biologia',
				'description' => '',
        'credits' => 2,
        'knowledge_area' => 'Ciencias naturales',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Etica',
				'description' => 'xxxxxxxx xxxxxxx',
        'credits' => 1,
        'knowledge_area' => 'Ciencias Humanas',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Estadistica',
				'description' => 'xxxxxxx xxxxxxxxxx xxxxxxxx',
        'credits' => 2,
        'knowledge_area' => 'Matematicas',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Geometria',
				'description' => 'xxxxxxx xxxxxxxx xxxxxxx',
        'credits' => 2,
        'knowledge_area' => 'Matematicas',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Ciencias politicas',
				'description' => 'xxxxxxxx xxxxxxxxxxxx',
        'credits' => 1,
        'knowledge_area' => 'Ciencias Humanas',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Religion',
				'description' => 'xxxxxxx xxxxxxxx xxxx',
        'credits' => 1,
        'knowledge_area' => 'Teologia',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Educacion Fisica',
				'description' => 'xxxxxx xxxxxxxxx xxxxxxx',
        'credits' => 1,
        'knowledge_area' => 'Deportes',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Programacion Orientada a Objetos',
				'description' => 'Programacion',
        'credits' => 3,
        'knowledge_area' => 'Tecnologia',
        'type' => 'mandatory',
    	]);
			\DB::table('subjects')->insert([
				'name' => 'Robotica',
				'description' => 'xxxxxxxxxxx xxxxxxxxxx xxxxxxx',
        'credits' => 3,
        'knowledge_area' => 'Tecnologia',
        'type' => 'mandatory',
    	]);
    }
}
