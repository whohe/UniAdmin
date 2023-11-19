<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teachers;

class StudentsController extends Controller
{
	public function index(){
		$rs=Students::select('id', 'dni','name','phone','email','address','city', 'semester')->orderBy('id')->get();
		return response()->json(['data'=>$rs]);
	}
	public function create(Request $request){
		Students::create($request->all());
		return response()->json(['status' => 'success']);
	}
	public function read($id){
		$rs=Students::find($id);
		return response()->json($rs);
	}
	public function update($id, Request $request){
		Students::where('id',$id)->update($request->all());
		return response()->json(['status' => 'success']);
	}
	public function delete($id){
		Students::find($id)->delete();
		return response()->json(['status' => 'success']);
	}
	public function report(){
		$rs=Teachers::select('students.dni', 'students.name as student','teachers.name as teacher','subjects.name as subject','subjects.credits')
			->leftJoin('teachers_subjects', function($join){
					$join->on('teachers.id','=','teachers_subjects.teacher_id');
				})
			->leftJoin('subjects', function($join){
					$join->on('subjects.id','=','teachers_subjects.subject_id');
				})
			->leftJoin('students_subjects', function($join){
					$join->on('students_subjects.teachers_subjects_id','=','teachers_subjects.id');
				})
			->leftJoin('students', function($join){
					$join->on('students.id','=','students_subjects.student_id');
				})
			->whereNotNull('students.id')
			->get()->toArray();
		foreach ($rs as $val){
			$_[$val['dni'].'-'.$val['student']][]=$val['subject']." - ".$val['teacher']." - ".$val['credits']." Creditos";
		}
		foreach($_ as $key => $val){
			$__=explode('-',$key);
			$out[]=array($__[0],$__[1],implode("<br>",$val));
		}
		return response()->json(['data'=>$out]);
	}
}
