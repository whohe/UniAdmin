<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersSubjects;
use App\Models\Subjects;

class TeachersSubjectsController extends Controller
{
	public function create($id, Request $request){
		TeachersSubjects::where('teacher_id',$id)->delete();
		foreach ($request->all() as $val){
			TeachersSubjects::create(["teacher_id"=>$id,"subject_id"=>$val]);
		}
		return response()->json(['status' => 'success']);
	}
	public function read($id){
		$rs=TeachersSubjects::where('teacher_id',$id)->get()->toArray();
		$rs=array_column($rs,'subject_id');
		return response()->json($rs);
	}
	public function enrolled(){
		$rs=Subjects::select(
				'teachers_subjects.id',
				'subjects.name as subject',
				'teachers.name as teacher',
				'subjects.credits'
			)
			->leftJoin('teachers_subjects', function($join){
				$join->on('subjects.id',"=",'teachers_subjects.subject_id');
			})
			->leftJoin('teachers', function($join){
				$join->on('teachers.id',"=",'teachers_subjects.teacher_id');
			})
			->whereNotNull('teachers.name')
			->whereNotNull('subjects.name')
			->get()->toArray();
		return response()->json($rs);
	}
}
