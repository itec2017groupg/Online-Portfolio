<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Users;
use DB;


class AdminUsersController extends Controller
{
    public function index(){
      return view('adminside.pages.users');
    }
    public function get_datatable(){
      $users = Users::select(['id','name','idlife','adr','email','ulvl'])->with('listskill') ->with('listdegree')->with('listcompany')->with('listexp');

      return Datatables::of($users)
          ->addColumn('action', function ($users) {
              return '<a href="/users/edit/'.$users->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/users/delete/'.$users->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-delete"></i> Delete</a>';
          })

          ->make(true);
    }
    public function edit($id){
        $selected = Users::where('id','=',$id)->get()->first();
        return view('adminside.pages.edituser',['user'=>$selected]);
    }
    public function update(Request $request,$id){
      DB::table('users')->where('id','=',$id) -> update(['name'=>$request->name,'adr'=>$request->adr,'email'=>$request->email,'idlife'=>$request->idlife]);
      return view('adminside.pages.users');
    }
    public function delete($id){
      DB::table('users')->where('id','=', $id)->delete();
      DB::table('skills_users')->where('users_id','=', $id)->delete();
      DB::table('degrees_users')->where('users_id','=', $id)->delete();
      DB::table('companies_users')->where('users_id','=', $id)->delete();
      return view('adminside.pages.users');
    }
}
