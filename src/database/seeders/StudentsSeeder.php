<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			\DB::table('students')->insert([
				'dni' => '1010101010',
				'name' => 'Agustin Marcial',
				'phone' => '555-55-555',
        'email' => 'correo@gmail.com',
        'address' => 'AV 100 - pre viva',
        'city' => 'Bogota',
        'semester' => 1,
    	]);
			\DB::table('students')->insert([
				'dni' => '121212',
				'name' => 'Miguel Murcia',
				'phone' => '555-55-555',
        'email' => 'correo@gmail.com',
        'address' => 'AV 100 - pre viva',
        'city' => 'Bogota',
        'semester' => 1,
    	]);
			\DB::table('students')->insert([
				'dni' => '111111111',
				'name' => 'Santiago Perez',
				'phone' => '555-55-555',
        'email' => 'correo@gmail.com',
        'address' => 'AV 100 - pre viva',
        'city' => 'Bogota',
        'semester' => 1,
    	]);
			\DB::table('students')->insert([
				'dni' => '23232323',
				'name' => 'Carlos Quinto',
				'phone' => '555-55-555',
        'email' => 'correo@gmail.com',
        'address' => 'AV 100 - pre viva',
        'city' => 'Bogota',
        'semester' => 1,
    	]);
			\DB::table('students')->insert([
				'dni' => '9898989',
				'name' => 'Felipe Guzman',
				'phone' => '555-55-555',
        'email' => 'correo@gmail.com',
        'address' => 'AV 100 - pre viva',
        'city' => 'Bogota',
        'semester' => 1,
    	]);
    }
}
