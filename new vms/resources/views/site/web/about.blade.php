@extends('site.app')
@section('title', 'Homepage')
@section('content')
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-green">
                        <div class="row">                        
                            <div style="width: 90%; margin-left: 5%; margin-right: 5%;">
                                <h1 class="text-white mb-3"> </h1>
                                <p class="lead text-white"> </p>
                                <p><a href="#" class="btn btn-primary py-3 px-4 "></a></p>
                            </div>
                        </div>      
                        <div class="ftco-cover-1 overlay" style="background-color: rgba(68, 114, 196, 0.8);">
                        
                        </div>
                    </div> 




                    <div class="ftco-cover-1 overlay" style="background-color: rgba(68, 114, 196, 0.8);">
                        
                    </div>    
  
        
                    <div style="margin-bottom: 10px; margin-top: 20px;">
                      <h4 style="color: #000;">Who we are</h4> 
                    </div>
                    <div style="margin-bottom: 20px;">
                      <h6 style="  color: #000; font-weight: 20; font-size: larger; font-family: serif; text-align: center;">
                        </h6>
                      <h6 style="text-align: justify;  color: #000; font-weight: 10; font-size: larger; font-family: serif;">
                        </h6> 
                    </div>

     
            <div class="row">
              <div class="col-md-4">
                <figure class="card card-product">
                <div style="text-align: center;margin-bottom: 10px;"><img src="{{ asset('frontend/images/icons/mission.png') }}" style="width: 100px; height: 100px; margin-top: 20px; ">
                  <h3 style="color: #000;">Our Mission</h3>
                </div>
                <div class="text">
                  <p style="margin: 20px; text-align: center;"> </p>
                </div>
              </figure>
              </div>

              <div class="col-md-4 ">
                <figure class="card card-product">
                <div style="text-align: center;margin-bottom:  10px;"><img src="{{ asset('frontend/images/icons/vision.png') }}" style="width: 100px; height: 100px;  margin-top: 20px;  ">
                  <h3 style="color: #000;">Our Vision</h3>
                </div>
                <div class="text">
                  <p style="margin: 20px; text-align: center;"> </p>              
                </div>
              </figure>
              </div>

              <div class="col-md-4">
                <figure class="card card-product">
                <div style="text-align: center;margin-bottom:  10px;">
                  <img src="{{ asset('frontend/images/icons/goal.png') }}" style="width: 100px; height: 100px;  margin-top: 20px; ">
                  <h3 style="color: #000;">Our Goal</h3>
                </div>
                <div class="text">
                  <p style="margin: 20px; text-align: center;"></p> 
                </div>
              </figure>
              </div>   
            </div>

              <div style="text-align: center;margin-bottom: 50px;">
              </div>

    </div>

    </div></div></section>
@stop
