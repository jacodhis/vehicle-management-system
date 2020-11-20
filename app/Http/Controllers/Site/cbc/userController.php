<?php

namespace App\Http\Controllers\Site\cbc;

use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profile()
    {
        $uid = auth()->id();
        $users = DB::select('select * from users where id = ?',[$uid]);
        return view('site.cbc.profile',['users'=>$users]);
        // return view('profile');
    }

    // public function edit(User $user)
    // {   
    //     $user = Auth::user();
    //     return view('users.edit', compact('user'));
    // }

    public function edits(Request $request,$id) {

      $name = $request->input('name');
      $mname = $request->input('mname');
      $lastname = $request->input('lastname');
      $username = $request->input('username');
      $utype = $request->input('utype');
      $email = $request->input('email');
      $phonenumber = $request->input('phonenumber');
      $gender = $request->input('gender');
      $dob = $request->input('dob');
      $address = $request->input('address');
      $pname = $request->input('pname');
      $pphonenumber = $request->input('pphonenumber');
      $scode = $request->input('scode');
      $sname = $request->input('sname');
      $sphonenumber = $request->input('sphonenumber');
      $saddress = $request->input('saddress');
      $grade = $request->input('grade');
      $country = $request->input('country');
      $county = $request->input('county');
      $subcounty = $request->input('subcounty');
      $location = $request->input('location');
      $slocation = $request->input('slocation');
      $village = $request->input('village');

      
      DB::update('update users set  name = ? where id = ?',[$name,$id]);
      DB::update('update users set  mname = ? where id = ?',[$mname,$id]);
      DB::update('update users set  lastname = ? where id = ?',[$lastname,$id]);
      DB::update('update users set  username = ? where id = ?',[$username,$id]);
      DB::update('update users set  utype = ? where id = ?',[$utype,$id]);
      DB::update('update users set  email = ? where id = ?',[$email,$id]);
      DB::update('update users set  phonenumber = ? where id = ?',[$phonenumber,$id]);
      DB::update('update users set  gender = ? where id = ?',[$gender,$id]);
      DB::update('update users set  dob = ? where id = ?',[$dob,$id]);
      DB::update('update users set  address = ? where id = ?',[$address,$id]);
      DB::update('update users set  pname = ? where id = ?',[$pname,$id]);
      DB::update('update users set  pphonenumber = ? where id = ?',[$pphonenumber,$id]);
      DB::update('update users set  scode = ? where id = ?',[$scode,$id]);
      DB::update('update users set  sname = ? where id = ?',[$sname,$id]);
      DB::update('update users set  sphonenumber = ? where id = ?',[$sphonenumber,$id]);
      DB::update('update users set  saddress = ? where id = ?',[$saddress,$id]);
      DB::update('update users set  grade = ? where id = ?',[$grade,$id]);
      DB::update('update users set  country = ? where id = ?',[$country,$id]);
      DB::update('update users set  county = ? where id = ?',[$county,$id]);
      DB::update('update users set  subcounty = ? where id = ?',[$subcounty,$id]);
      DB::update('update users set  location = ? where id = ?',[$location,$id]);
      DB::update('update users set  slocation = ? where id = ?',[$slocation,$id]);
      DB::update('update users set  village = ? where id = ?',[$village,$id]);


      // return redirect()->route('topics');
      return redirect()->action('userController@profile');
      // echo "Record updated successfully.<br/>";
      // echo '<a href = "/edit-records">Click Here</a> to go back.';
   }

    


 //    public function store(Request $request){
 //        $request->validate([
 //            'name' => 'required|max:255', 
 //            'fruits' => 'required'
 //        ]);

 //      //Further logic
 // }



    public function update(User $user)
    { 

        if(Auth::user()->email == request('email')) {
        
            $this->validate(request(), [
            'name' => 'required',
          //  'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
            ]);

            $user->name = request('name');
            // $user->email = request('email');
            $user->password = bcrypt(request('password'));

            $user->save();

            return back();
        
            }
                else{
        
            $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
            ]);

            $user->name = request('name');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));

            $user->save();

            return back();  
        
        }



        }
    }