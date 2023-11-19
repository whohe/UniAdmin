<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeachersController extends Controller
{
	public function index(){
		$rs=Teachers::select('id', 'dni','name','phone','email','address','city')->orderBy('id')->get();
		return response()->json(['data'=>$rs]);
	}
	public function create(Request $request){
		Teachers::create($request->all());
		return response()->json(['status' => 'success']);
	}
	public function read($id){
		$rs=Teachers::find($id);
		return response()->json($rs);
	}
	public function update($id, Request $request){
		Teachers::where('id',$id)->update($request->all());
		return response()->json(['status' => 'success']);
	}
	public function delete($id){
		Teachers::find($id)->delete();
		return response()->json(['status' => 'success']);
	}
}
