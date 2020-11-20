@extends('site.layouts.app')
 
@section('content')

<div style="margin-left: 2%; margin-right: 5%">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 @if(Auth::check())

<div class="row">
         <div class="col-md-12">
  <div style="text-align: center; margin-top: 40px;">
      <form action = "/edit<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td></td>
               <td>
                  <input type = 'text' name = 'admin_name' 
                     value = '<?php echo$users[0]->first_name; ?>'/>
               </td>
</tr>
<tr> <td></td><td></td><td></td></tr>
            <tr style="margin-top: 20px;">
               <td>User Type</td>
               <td></td>
               <td>
                  <input type = 'text' name = 'admin_type' 
                     value = '<?php echo$users[0]->usertype; ?>'/>
               </td>
            </tr>
            <tr> <td></td><td></td><td></td></tr>
            <tr style="margin-top: 20px;">
               <td colspan = '3'>
                  <input type = 'submit' value = "Update User Type" />
               </td>
            </tr>
         </table>
      
      </form>

      </div>
   </div>
      </div>

        @endif
@if(Auth::guest())
                    <h4>You need to login! </h4>
              <a href="{{ route('login') }}" class="btn btn-info"> log in now </a>
            @endif

</div>
@endsection