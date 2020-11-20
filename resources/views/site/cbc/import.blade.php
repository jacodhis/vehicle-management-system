@extends('site.layouts.app')

@section('content')
<div style="margin-left: 1%; margin-right: 1%">
    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{ url('/home') }}"><small>Courses</small></a></li>
        <!-- <li class="active"><a href="{{ url('pp1') }}"><small>Results</small></a></li> -->
</ol> 


<section class="section-main bg padding-top-sm">
        <div class="container">
@include('site.cbc.flash-message')
			<div class="row">
				<div class="col-md-2">
				</div>
                <div class="col-md-4">
			        <h3>Import new users from .csv file to Dals Database</h3>
			        Download sample .csv file <a href="">here</a> to see data sample
			    
			        <div class="card-body">
			            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
			                @csrf
			                <input type="file" name="file" class="form-control">
			                <br>
			                <button class="btn btn-success">Import User Data</button>
			                
			            </form>
			        </div>
				</div>
				<div class="col-md-4">
					<h3>Click below button to export users as .csv file</h3>
			        <div class="card-body">
			            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
			                @csrf
			                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
			            </form>
			        </div>
				</div>
				<div class="col-md-2">
				</div>
			</div>

		</div>
    </section>





</div>


@endsection