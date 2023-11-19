<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;

class SubjectsController extends Controller
{
	public function index(){
		$rs=Subjects::select('id','name','description','credits','knowledge_area','type')->orderBy('id')->get();
		return response()->json(['data'=>$rs]);
	}
	public function create(Request $request){
		Subjects::create($request->all());
		return response()->json(['status' => 'success']);
	}
	public function read($id){
		$rs=Subjects::find($id);
		return response()->json($rs);
	}
	public function update($id, Request $request){
		Subjects::where('id',$id)->update($request->all());
		return response()->json(['status' => 'success']);
	}
	public function delete($id){
		Subjects::find($id)->delete();
		return response()->json(['status' => 'success']);
	}
}
