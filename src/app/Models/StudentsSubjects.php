<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsSubjects extends Model
{
    use HasFactory;
		protected $fillable = [
			'student_id',
			'teachers_subjects_id'
		];
}
