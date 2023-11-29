<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Subjects;

class DashboardController extends Controller
{
	public function dashboard(){
		$rs=Students::count();
		$indicators[]=$rs;
		$rs=Teachers::count();
		$indicators[]=$rs;
		$rs=Subjects::count();
		$indicators[]=$rs;
		$rs=Teachers::selectRaw('count(*)')
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
		$indicators[]=$rs[0]['count'];
		$out=array($indicators,[20,10,70]);
		//$out=[[1,2,3,4],[80,30,50]];
		return response()->json($out);
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
		if (!isset($_)){
			$out=[];
		}else{
			foreach($_ as $key => $val){
				$__=explode('-',$key);
				$out[]=array($__[0],$__[1],implode("<br>",$val));
			}
		}
		return response()->json(['data'=>$out]);
	}
}
