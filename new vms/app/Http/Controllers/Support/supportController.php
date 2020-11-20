<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Support\SupportRequest;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Brian2694\Toastr\Facades\Toastr;

class supportController extends Controller
{
    public function insertform() {
      return view('/');
   		}
	
    public function insert(Request $request) {
        $rules = [
			'name' => 'required|string|min:2|max:255',
			'email' => 'required|string|email|max:255',
			'phonenumber' => 'required|min:9',
			'notes' => 'required|min:10|max:555'
		    ];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}else{
            $data = $request->input();
            $support_id = rand();
            try{
				$SupportRequest = new SupportRequest;
				$SupportRequest->support_id = $support_id;
                $SupportRequest->name = $data['name'];
                $SupportRequest->email = $data['email'];
                $SupportRequest->phonenumber = $data['phonenumber'];
                $SupportRequest->country = $data['country'];
                $SupportRequest->school = $data['school'];
                $SupportRequest->title = $data['title'];
                $SupportRequest->notes = $data['notes'];
				$SupportRequest->save();
				$msg = 'Request submitted successfully :) Your Support request id : '.$support_id;
				Toastr::success($msg,'Success');
				return back();
			}catch(Exception $e){
				Toastr::success('Operation failed :)','Error');
				return back();
			}
		}
   }
}
