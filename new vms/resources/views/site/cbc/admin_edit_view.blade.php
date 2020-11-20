@extends('site.layouts.app')
@section('content')
<div style="margin-left: 2%; margin-right: 3%">   
    @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
    @endif
<table class="table table-bordered">
         <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Username</td>
            <td>User Level</td>
            <td>Email Address</td>
            <td>Edit</td>
            <td>View</td>
         </tr>
         
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->usertype }}</td>
            <td>{{ $user->email }}</td>
            <td><a class="btn btn-primary" href = 'edit{{ $user->id }}'>Edit</a></td>
            <td><a class="btn btn-primary" href = 'show{{ $user->id }}'>View</a></td>
         </tr>
         @endforeach
      </table>

      
</div>
@endsection