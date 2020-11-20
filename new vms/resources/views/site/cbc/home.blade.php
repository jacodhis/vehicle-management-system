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
          
      <div class ="row">
        <section class="col-lg-12 connectedSortable">
          <div class="col-md-6">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="{{ url('/pp1') }}" title="Click to access content"  style="color: currentColor; opacity: 1.9; text-decoration: blink;" class="small-box-footer">
                  <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/pp1.png') }}">
              </a>
            </div>
          </div>

          <div class="col-md-6">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="{{ url('/pp1') }}" title="Click to access content"  style="color: currentColor; opacity: 1.9; text-decoration: blink;" class="small-box-footer">
                <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/pp2.png') }}">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="#"  title="Content Currently not Available" class="small-box-footer"  style="color: currentColor; opacity: 0.4; text-decoration: none;">
                <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/g1.png') }}">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="#"  title="Content Currently not Available" class="small-box-footer"  style="color: currentColor; opacity: 0.4; text-decoration: none;">
                <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/g2.png') }}">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="{{ url('/pp1') }}" title="Click to access content"  style="color: currentColor; opacity: 1.9; text-decoration: blink;" class="small-box-footer">
              <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/g3.png') }}">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="{{ url('/pp1') }}" title="Click to access content" class="small-box-footer"  style="color: currentColor; opacity: 1.9; text-decoration: blink;">
                <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/g4.png') }}">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="#" title="Content Currently not Available" style="color: currentColor; opacity: 0.4; text-decoration: none;"  class="small-box-footer">
                <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/g5.png') }}">
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div style="margin-top:10px; margin-bottom: 10px;">
              <a href="#" title="Content Currently not Available" style="color: currentColor; opacity: 0.4; text-decoration: none;" class="small-box-footer">
                <img width="100%" height="100%" src="{{ asset('frontend/images/icons/cover/g6.png') }}">
              </a>
            </div>
          </div>

       </section> 
           
    </div>

    


 
  </div>


@endsection