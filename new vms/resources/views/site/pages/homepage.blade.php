@extends('site.app')
@section('title', 'Homepage')
@section('content')
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- ================= main slide ================= -->
                    <div class="owl-init slider-main owl-carousel" data-items="3" data-dots="false" data-nav="true">
                        <div class="item-slide">
                        	<img  src="{{ asset('frontend/images/icons/cover/v1.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img  src="{{ asset('frontend/images/icons/cover/v2.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/icons/cover/v3.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/icons/cover/v4.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/icons/cover/v5.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/icons/cover/v6.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/icons/cover/v7.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/icons/cover/v8.jpg') }}">
                        </div>
                    </div>
                

                    <!-- ============== main slidesow .end // ============= -->


                <div id="join" class="site-section" style="background-color:  #fff;margin-top: 40px; margin-bottom: 20px;">
                    <div class="container">
                        <div style="text-align: center; margin-bottom: 10px;">
                            <h4 style="color: #000;" >Our Model</h4> 
                        </div>

    
                        <div class="row">
                            <div class="col-md-4" style="font-size: 18px; color: #000; margin-bottom: 20px;">
                                <figure class="card card-product">
                                <p style="text-align: center;"><img src="{{ asset('frontend/images/icons/logical.png') }}" style="width: 100px; height: 100px; margin-top: 30px;  "></p>
                                <p style="color: #000;text-align: center;"> Model 1</p>
                                </figure>
                            </div>

                            <div class="col-md-4" style="font-size: 18px; color: #000;  margin-bottom: 20px;">
                                <figure class="card card-product">
                                <p style="text-align: center;"><img src="{{ asset('frontend/images/icons/compre.png') }}" style="width: 100px; height: 100px; margin-top: 30px;  "></p>
                                <p style="color: #000;text-align: center;">Model 3</p>
                            </figure>
                            </div>

                            <div class="col-md-4" style="font-size: 18px; color: #000;  margin-bottom: 20px;">         <figure class="card card-product">              
                                <p style="text-align: center;"><img src="{{ asset('frontend/images/icons/lprog.png') }}" style="width: 100px; height: 100px; margin-top: 30px; "></p>
                                <p style="color: #000;text-align: center;">Model 4</p>
                            </figure>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="join" class="site-section" style="background-color:  #fff;margin-top: 40px; margin-bottom: 20px;">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6" style="font-size: 18px; color: #000; margin-bottom: 20px;">
                                <div style="text-align: center; margin-bottom: 10px;">
                                    <h4 style="color: #000;" >How it booking works</h4> 
                                </div>
                                <figure class="card card-product">
                                 
                                </figure>
                            </div>

                            <div class="col-md-6" style="font-size: 18px; color: #000;  margin-bottom: 20px;"> 
                            <div style="text-align: center; margin-bottom: 10px;">
                                    <h4 style="color: #000;" >Register with us</h4> 
                                </div>        
                                <figure class="card card-product">              
                                <p style="text-align: center; padding: 10%;"><a href="{{ route('register') }}" class="btn btn-primary py-3 px-4 ">click here to register</a></p>
                            </figure>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div id="join" class="site-section" style="background-color:  #fff; margin-bottom: 20px;">
                    <div class="container">
                        <div style="text-align: center; margin-bottom: 10px;">
                            <h4  style="color: #000;">Why choose our Service?</h4> 
                        </div> 

                        <div class="row">
                            <div class="col-md-4 content-boxes-v6 md-margin-bottom-50" style="  font-size: 18px; color: #000;">
                                <figure class="card card-product">
                                <div style="text-align: center; margin-top: 30px;"><img src="{{ asset('frontend/images/icons/curri.png') }}" style="width: 100px; height: 100px;  ">
                                </div>
                                
                                    <h5 style="text-align: center; color: #000;" class="title-v3-md margin-bottom-10">Convinient
                                    </h5>
                                    <p style="margin-left: 10px; margin-right: 10px; text-align: center;"><small>reason  </small></p>
                                </figure>
                            </div>
                            <div class="col-md-4 content-boxes-v6 md-margin-bottom-50" style=" font-size: 18px; color: #000;">
                                <figure class="card card-product">
                                <div style="text-align: center; margin-top: 30px;"> <img src="{{ asset('frontend/images/icons/easyto.png') }}" style="width: 100px; height: 100px;">
                                </div>
                                
                                    <h5 style="text-align: center; color: #000;"  class="title-v3-md  margin-bottom-10">Affordable</h5>
                                    <p style="margin-left: 10px; margin-right: 10px; text-align: center;"><small>reason </small>
                                </p>
                            </figure>
                            </div>
                            <div class="col-md-4 content-boxes-v6 md-margin-bottom-50" style=" font-size: 18px; color: #000;">
                                <figure class="card card-product">
                                <div style="text-align: center; margin-top: 30px;"> <img src="{{ asset('frontend/images/icons/robust.png') }}" style="width: 100px; height: 100px; ">
                                </div>
                                
                                    <h5 style="text-align: center; color: #000;" class="title-v3-md margin-bottom-10">Available</h5>
                                    <p style="margin-left: 10px; margin-right: 10px; text-align: center;"><small>reason</small>
                                </p>
                            </figure>
                            </div>
                        </div> 
                    </div>
                </div>


</div>
 </div></div></section>
@stop
