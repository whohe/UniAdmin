<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsSubjects;
use App\Models\TeachersSubjects;

class StudentsSubjectsController extends Controller
{
	public function create($id, Request $request){
		StudentsSubjects::where('student_id',$id)->delete();
		foreach ($request->all() as $val){
			StudentsSubjects::create(["student_id"=>$id,"teachers_subjects_id"=>$val]);
		}
		return response()->json(['status' => 'success']);
	}
	public function read($id){
		$rs=StudentsSubjects::select('teachers_subjects_id')->where('student_id',$id)->get()->toArray();
		$rs=array_column($rs,'teachers_subjects_id');
		return response()->json($rs);
	}
	public function ruleValidator(Request $request){

		$msg='error desconocido.';
		if (empty($request->all())){
			$msg='Es obligatorio registrar minimo 7 creditos';
			return response()->json(['status'=>'error','msg'=>$msg],500);
		}else{
			$rs=TeachersSubjects::leftJoin('subjects', function($join){
					$join->on('teachers_subjects.subject_id','=','subjects.id');
				})
			->whereIn('teachers_subjects.id',$request->all())->sum('subjects.credits');
			if ($rs<7){
				$msg='Es obligatorio registrar minimo 7 creditos';
				return response()->json(['status'=>'error','msg'=>$msg],401);
			}else{
				$rs=TeachersSubjects::select('subjects.name',\DB::raw('count(teachers_subjects.teacher_id)'))
				->leftJoin('subjects', function($join){
					$join->on('teachers_subjects.subject_id','=','subjects.id');
				})->whereIn('teachers_subjects.id',$request->all())->groupBy('subjects.name')->get()->toArray();
				foreach ($rs as $val){
					if($val['count']>1){
						$msg='No se puede registrar <b>'.$val['name'].'</b> mas de una vez con diferente profesor.';
						return response()->json(['status'=>'error','msg'=>$msg],401);
						break;
					}
					$msg='Registro aceptado';
					return response()->json(['status'=>'success','msg'=>$msg],200);
				}
			}
		}
	}
}
