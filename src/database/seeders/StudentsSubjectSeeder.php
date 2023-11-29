<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			\DB::table('students_subjects')->insert([
				'student_id' => 1,
				'teachers_subjects_id' => 1,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 1,
				'teachers_subjects_id' => 2,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 1,
				'teachers_subjects_id' => 3,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 2,
				'teachers_subjects_id' => 2,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 2,
				'teachers_subjects_id' => 5,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 2,
				'teachers_subjects_id' => 7,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 2,
				'teachers_subjects_id' => 10,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 2,
				'teachers_subjects_id' => 11,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 4,
				'teachers_subjects_id' => 11,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 4,
				'teachers_subjects_id' => 12,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 4,
				'teachers_subjects_id' => 13,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 4,
				'teachers_subjects_id' => 14,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 4,
				'teachers_subjects_id' => 15,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 5,
				'teachers_subjects_id' => 5,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 5,
				'teachers_subjects_id' => 6,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 5,
				'teachers_subjects_id' => 7,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 5,
				'teachers_subjects_id' => 8,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 5,
				'teachers_subjects_id' => 9,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 5,
				'teachers_subjects_id' => 10,
    	]);
			\DB::table('students_subjects')->insert([
				'student_id' => 5,
				'teachers_subjects_id' => 11,
    	]);
    }
}
