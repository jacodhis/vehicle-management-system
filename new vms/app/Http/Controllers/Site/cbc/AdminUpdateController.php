<?php

namespace App\Http\Controllers\Site\cbc;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminUpdateController extends Controller {

public function __construct()
    {
        $this->middleware('auth');
    }

   public function index() {
      $users = DB::select('select * from users');
      return view('site.cbc.admin_edit_view',['users'=>$users]);
   }
   public function show($id) {
      $userr = DB::select('select * from users where id = ?',[$id]);
      return view('site.cbc.admin_update',['users'=>$userr]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('admin_name');
      $utype = $request->input('admin_type');
      DB::update('update users set  first_name = ? where id = ?',[$name,$id]);

      DB::update('update users set  usertype = ? where id = ?',[$utype,$id]);

      return redirect()->action('Site\cbc\AdminUpdateController@index');
   }
}