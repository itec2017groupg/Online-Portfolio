<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Users;
use DB;
use App\skills;


class AdminSkillsController extends Controller
{
    public function index(){

      return view('adminside.pages.skills');
    }
    public function get_datatable(){
      $skills= Skills::all();

      return Datatables::of($skills)
          ->addColumn('action', function ($skills) {
              return '<a href="/skills/edit/'.$skills->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/skills/delete/'.$skills->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-delete"></i> Delete</a>';
          })

          ->make(true);
    }
    public function edit($id){
        $selected = Skills::where('id','=',$id)->get()->first();
        return view('adminside.pages.editskill',['skill'=>$selected]);
    }
    public function update(Request $request,$id){
      DB::table('skills')->where('id','=',$id) -> update(['name'=>$request->name]);
      return view('adminside.pages.skills');
    }
    public function delete($id){
      DB::table('skills')->where('id','=', $id)->delete();
      DB::table('skills_users')->where('skills_id','=', $id)->delete();
      return view('adminside.pages.skills');
    }
}
