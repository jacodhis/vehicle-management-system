<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
Use Exception;
use Brian2694\Toastr\Facades\Toastr;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new User([
            'first_name'    => $row['first_name'],
            'last_name'     => $row['last_name'],
            'username'    => $row['username'], 
            'email'    => $row['email'],
            'password' => \Hash::make($row['password']),
        ]);
        
    }
}
