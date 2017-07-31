<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Users;
use DB;
use App\Degrees;


class AdminDegreesController extends Controller
{
    public function index(){
      
      return view('adminside.pages.degrees');
    }
    public function get_datatable(){
      $degrees= Degrees::all();

      return Datatables::of($degrees)
          ->addColumn('action', function ($degrees) {
              return '<a href="/degrees/edit/'.$degrees->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/degrees/delete/'.$degrees->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-delete"></i> Delete</a>';
          })

          ->make(true);
    }
    public function edit($id){
        $selected = Degrees::where('id','=',$id)->get()->first();
        return view('adminside.pages.editdegree',['degree'=>$selected]);
    }
    public function update(Request $request,$id){
      DB::table('degrees')->where('id','=',$id) -> update(['name'=>$request->name]);
      return view('adminside.pages.degrees');
    }
    public function delete($id){
      DB::table('degrees')->where('id','=', $id)->delete();
      DB::table('degrees_users')->where('degrees_id','=', $id)->delete();
      return view('adminside.pages.degrees');
    }
}
