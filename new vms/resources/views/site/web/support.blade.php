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
                                <h2 class="text-white mb-3"> </h2>
                                <p class="lead text-white"> </p>
                            </div>
                        </div>      
                        <div class="ftco-cover-1 overlay" style="background-color: rgba(68, 114, 196, 0.8);">
                        
                        </div>
                    </div>

  
    <div id="join" class="site-section" style="background-color: #fff; margin-bottom: 20px;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 20px;">
                <h4 style="  color: #000;">Technical support</h4> 
            </div>

            <div style="text-align: left; margin-bottom: 20px;">
                <h6 style="color: #000;">
                   </h6>

        <form action="/supportrequest"  method = "post">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="row"> 

                <div class="col-md-6">
                    <div class="form-group  required">
                      <label control-label>Name</label>
                      <input id="name" type="text" class="form-control" name="name" placeholder="Enter your name" aria-label="Enter your name"  value="{{ old('name') }}" required autocomplete="name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Email Address</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" aria-label="Enter Email"  value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="254729314341" pattern="[0-9]{8-12}" aria-label="Enter your phonenumber"  value="{{ old('phonenumber') }}" required autocomplete="phonenumber">
                    <span><small>Format: 254712345678</small></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Country</label>
                      <input id="country" type="text" class="form-control" name="country" placeholder="Enter your country" aria-label="Enter your country"  value="{{ old('country') }}" autocomplete="country">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Name of School</label>
                      <input id="school" type="text" class="form-control" name="school" placeholder="Enter your school" aria-label="Enter your school"  value="{{ old('school') }}" autocomplete="school">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Job Title</label>
                      <input id="title" type="text" class="form-control" name="title" placeholder="Enter your title" aria-label="Enter your title"  value="{{ old('title') }}" autocomplete="title">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control" name="notes" rows="6" required></textarea>
                    </div>
                </div>
              
                <div class="col-md-12">
                    <div class="input-group-append">
                      <input type = 'submit' class="btn btn-primary" value = "Submit Request"/>
                    </div>  
                </div>
              
              </div>
              </form>
        </div>
    </div>
</div>
</div>

 </div></div></section>
@stop
