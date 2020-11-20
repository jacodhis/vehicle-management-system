<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Support\EmailList;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Brian2694\Toastr\Facades\Toastr;

class maillistController extends Controller {
   public function insertform() {
      return view('/');
   }
	
   public function insert(Request $request) {
      $rules = [
			'username' => 'required',
			'email' => 'required'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$emaillist = new EmailList;
                $emaillist->first_name = $data['username'];
                $emaillist->email = $data['email'];
				$emaillist->save();
				Toastr::success('Email added successfully :)','Success');
				return back();
			}
			catch(Exception $e){
				Toastr::success('Operation failed :)','Error');
				return back();
			}
		}
   }
}