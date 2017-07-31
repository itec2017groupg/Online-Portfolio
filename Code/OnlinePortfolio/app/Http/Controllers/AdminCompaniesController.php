<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Users;
use DB;
use App\Companies;


class AdminCompaniesController extends Controller
{
  public function index(){

    return view('adminside.pages.companies');
  }
  public function get_datatable(){
    $companies= Companies::all();
    return Datatables::of($companies)
        ->addColumn('action', function ($companies) {
            return '<a href="/companies/edit/'.$companies->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/companies/delete/'.$companies->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-delete"></i> Delete</a>';
        })

        ->make(true);
  }
  public function edit($id){
      $selected = Companies::where('id','=',$id)->get()->first();
      return view('adminside.pages.editcompany',['company'=>$selected]);
  }
  public function update(Request $request,$id){
    DB::table('companies')->where('id','=',$id) -> update(['name'=>$request->name]);
    return view('adminside.pages.companies');
  }
  public function delete($id){
    DB::table('companies')->where('id','=', $id)->delete();
    DB::table('companies_users')->where('companies_id','=', $id)->delete();
    return view('adminside.pages.companies');
  }

}
