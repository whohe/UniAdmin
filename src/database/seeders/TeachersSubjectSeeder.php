<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 1,
				'subject_id' => 1,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 1,
				'subject_id' => 2,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 1,
				'subject_id' => 3,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 2,
				'subject_id' => 3,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 2,
				'subject_id' => 4,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 2,
				'subject_id' => 5,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 2,
				'subject_id' => 6,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 3,
				'subject_id' => 5,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 3,
				'subject_id' => 6,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 3,
				'subject_id' => 7,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 3,
				'subject_id' => 8,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 4,
				'subject_id' => 8,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 4,
				'subject_id' => 9,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 4,
				'subject_id' => 10,
    	]);
			\DB::table('teachers_subjects')->insert([
				'teacher_id' => 5,
				'subject_id' => 8,
    	]);
    }
}
