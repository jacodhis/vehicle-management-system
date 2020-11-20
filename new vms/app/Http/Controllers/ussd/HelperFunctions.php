<?php
namespace App\Http\Controllers\ussd;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait HelperFunctions{

    /**
     * Handles USSD Registration Request
    */
    public function ussdRegister($details, $phone)
    {
        $input = explode(",",$details);//store input values in an array
        $full_name = $input[0];//store full name
        $pin = $input[1];
        $username = "ussd";
        $email = "ussd@gmail.com";       
       
        $user = new User;
        $user->first_name = $full_name;
        $user->last_name = $full_name;
        $user->username = $username;
        $user->email = $email;
        $user->phone = $phone;
        $user->password = Hash::make($pin);
        // You should encrypt the pin
        $user->pin = $pin;
        $user->save();
 
        return "success";
    }
 
    /**
     * Handles Login Request
     */
    public function ussdLogin($details, $phone)
    {
        $user = User::where('phone', $phone)->first();

        if ($user->pin == $details ) {
            return "Success";           
        } else {
            return $this->ussd_stop("Login was unsuccessful!");
        }
    }

    public function ussdBal($details, $phone)
    {
        $user = User::where('phone', $phone)->first();

        if ($user->pin == $details ) {
            return "Success";           
        } else {
            return $this->ussd_stop("Login was unsuccessful!");
        }
    }
    public function ussdPay($details, $phone)
    {
        $user = User::where('phone', $phone)->first();

        if ($user->pin == $details ) {
            return "Success";           
        } else {
            return $this->ussd_stop("Login was unsuccessful!");
        }
    }
}