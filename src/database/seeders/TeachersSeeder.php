<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			\DB::table('teachers')->insert([
				'dni' => '2020202020',
				'name' => 'Martin Rosero',
				'phone' => '555-55-555',
        'email' => 'email@gmail.com',
        'address' => 'KR 14 - 12',
        'city' => 'Medellin',
    	]);
			\DB::table('teachers')->insert([
				'dni' => '111111',
				'name' => 'Gustavo Restrepo',
				'phone' => '555-55-555',
        'email' => 'email@gmail.com',
        'address' => 'KR 14 - 12',
        'city' => 'Bogota',
    	]);
			\DB::table('teachers')->insert([
				'dni' => '22222',
				'name' => 'Andres Sandoval',
				'phone' => '555-55-555',
        'email' => 'email@gmail.com',
        'address' => 'KR 14 - 12',
        'city' => 'Cartagena',
    	]);
			\DB::table('teachers')->insert([
				'dni' => '333333',
				'name' => 'Pedro Sanchez',
				'phone' => '555-55-555',
        'email' => 'email@gmail.com',
        'address' => 'KR 14 - 12',
        'city' => 'Leticia',
    	]);
			\DB::table('teachers')->insert([
				'dni' => '4444444444',
				'name' => 'Maria Paz',
				'phone' => '555-55-555',
        'email' => 'email@gmail.com',
        'address' => 'KR 14 - 12',
        'city' => 'Ibague',
    	]);
    }
}
