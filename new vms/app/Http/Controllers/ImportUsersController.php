<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;

Use Exception;
use Brian2694\Toastr\Facades\Toastr;
  
class ImportUsersController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.csv');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        try{
        Excel::import(new UsersImport,request()->file('file'));
        
        Toastr::success('Data imported successfully','success');
        return back() ->with('success','Username/Email-Address or Password is wrong.');
        }
        catch(Exception $e)
        {
           // $erromsg = dd($e->getMessage());

           Toastr::success('Some data already exist','Error');
           return back()->with('error','Some user data already exist. Check your file to remove the duplicate data');
        }
           
        
    }
}