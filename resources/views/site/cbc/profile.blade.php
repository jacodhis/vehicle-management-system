@extends('site.layouts.app')
@section('content')

<div style="margin-left: 2%; margin-right: 3%">   
    @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
    @endif
                    
          <form action = "/editProfile<?php echo $users[0]->id; ?>" method = "post">
            <div class="row">
            	<div class="col-md-12">
            		<h3 class="btn-primary" style="text-align: center; height: 40px;padding-top: 5px;"> Personal Information</h3>
            	</div>
            </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>FirstName</label>
                <input type="text" name = 'name' value="<?php echo$users[0]->first_name; ?>" class="form-control" placeholder="First Name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name = 'mname' value="<?php echo$users[0]->last_name; ?>" class="form-control" placeholder="Middle name">
              </div>
            </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name = 'lastname' value="<?php echo$users[0]->last_name; ?>" class="form-control" placeholder="Last Name">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>UserName</label>
                  <input type="text" readonly="readonly" name = 'username' value="<?php echo$users[0]->username; ?>" class="form-control" placeholder="username">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>User Level</label>
                  <input type="text"  readonly="readonly" name = 'utype' value="<?php echo$users[0]->usertype; ?>" class="form-control" placeholder="Organization">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" readonly="readonly" name = 'email' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="Job">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" name = 'phonenumber' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="Type">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Gender</label><br />

                  		<div class="row">
          				<div class="col-md-4">
                  		
                        <label for="Male" >{{ __('Male') }}</label>

                    </div>
          			<div class="col-md-4">

                        
                        <label for="Female"  >{{ __('Female') }}</label>
					
					</div>
          			<div class="col-md-4">

                       
                        <label for="Other">{{ __('Other') }}</label>

                     </div>
                 </div>

                  
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input  name="dob" id="dob" type="date" class="form-control" placeholder="Date of birth" value="<?php echo date('d-m-Y ', strtotime($users[0]->email)); ?>">


                  

                </div>
               </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name = 'address' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="address">
                </div>
                </div> 

            </div>

			<div class="row">
          	<div class="col-md-12">
          		<h3 class="btn-primary" style="text-align: center; height: 40px;padding-top: 5px;"> Parent/Guardian Information</h3>
          	</div>

          	<div class="col-md-6">
                <div class="form-group">
                  <label>Parent/Guardian Full Name</label>
                  <input type="text" name = 'pname' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="Parent/guardian name">
                </div>
               </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Parent/Guardian Phone Number</label>
                  <input type="text" name = 'pphonenumber' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="pphonenumber">
                </div>
                </div>


          	</div>



          	<div class="row">
          	<div class="col-md-12">
          		<h3 class="btn-primary" style="text-align: center; height: 40px;padding-top: 5px;"> School Information</h3>
          	</div>

          	<div class="col-md-4">
                <div class="form-group">
                  <label>School Code</label>
                  <input type="text" name = 'scode' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="scode">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>School name</label>
                  <input type="text" name = 'sname' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="school name">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>School Name Phone Number</label>
                  <input type="text" name = 'sphonenumber' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="school phone number">
                </div>
               </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>School Address</label>
                  <input type="text" name = 'saddress' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="saddress">
                </div>
                </div>


          	</div>

          	<div class="row">
          	<div class="col-md-12">
          		<h3 class="btn-primary" style="text-align: center; height: 40px;padding-top: 5px;"> Residential Information</h3>
          	</div>

          	<div class="col-md-4">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" name = 'country' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="country">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>County</label>
                  <input type="text" name = 'county' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="county">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Sub County</label>
                  <input type="text" name = 'subcounty' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="sub county">
                </div>
               </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Location</label>
                  <input type="text" name = 'location' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="location">
                </div>
                </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label>Sub Location</label>
                  <input type="text" name = 'slocation' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="sub location">
                </div>
                </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label>Villages</label>
                  <input type="text" name = 'village' value="<?php echo$users[0]->email; ?>" class="form-control" placeholder="village">
                </div>
                </div>  



          	</div>


          	<div class="row">
          	<div class="col-md-12">
          		<h3 class="btn-primary" style="text-align: center; height: 50px;padding-top: 5px;"> Grade/Class Subscription Information</h3>
          	</div>

			<div class="col-md-12">
                <div class="btn-secondary" style="text-align: center;padding-top: 5px; background-color: rgba(5,255,255,0.9);">
                  <h4 class="btn-secondary" style="text-align: center; height: 30px;padding-top: 5px; background-color: rgba(5,255,255,0.9);">Please mark the grade or class you want to subscribed to</h4>

                  <h4 class="btn-secondary" style="text-align: center; height: 30px;padding-top: 5px;background-color: rgba(5,255,255,0.9);">Pre-Primary School Content</h4>
               </div>
            </div>
			<!-- <div class="col-md-12">
                
                  <h4 class="btn-secondary" style="text-align: center; height: 30px;padding-top: 5px;">Pre-Primary School Content</h4>
                
            </div> -->
        </div>
        <div class="row">
			<div class="col-md-6">

			<input type="checkbox" name="grade[]" id="pp1" value="pp1">
    		<label for="pp1">Pre-Primary 1</label>

			</div>
			<div class="col-md-6">
		    <input type="checkbox" name="grade[]" id="pp2" value="pp2">
		    <label for="pp2">Pre-Primary 2</label>

		    </div>
		    <div class="col-md-12">
                <div class="btn-secondary" style="text-align: center;padding-top: 5px; background-color: rgba(5,255,255,0.9);">
                  <h4 class="btn-secondary" style="text-align: center; height: 30px;padding-top: 5px;">Grade 1, 2 and 3 Content</h4>
                </div>
            </div>
			<div class="col-md-4">

		    <input type="checkbox" name="grade[]" id="grade1" value="grade1">
		    <label for="grade1">Grade 1</label>

		    </div>
			<div class="col-md-4">

		    <input type="checkbox" name="grade[]" id="grade2" value="grade2">
    		<label for="grade2">Grade 2</label>

    		</div>
    		<div class="col-md-4">

		    <input type="checkbox" name="grade[]" id="grade3" value="grade3">
		    <label for="grade3">Grade 3</label>

		    </div>
    		<div class="col-md-12">
                <div class="btn-secondary" style="text-align: center;padding-top: 5px; background-color: rgba(5,255,255,0.9);">
                  <h4 class="btn-secondary" style="text-align: center; height: 30px;padding-top: 5px;">Grade 4, 5 and 6 Content</h4>
                </div>
            </div>
			
			<div class="col-md-4">

		    <input type="checkbox" name="grade[]" id="grade4" value="grade4">
		    <label for="grade4">Grade 4</label>

		    </div>
			<div class="col-md-4">

		    <input type="checkbox" name="grade[]" id="grade5" value="grade5">
		    <label for="grade5">Grade 5</label>

		    </div>
			<div class="col-md-4">

		    <input type="checkbox" name="grade[]" id="grade6" value="grade6">
		    <label for="grade6">Grade 6</label>
           
		</div>

      </div>

<div class="row">
          	<div class="col-md-12">
          		<h3 class="btn-primary" style="text-align: center; height: 40px;padding-top: 5px;"> Payment Information</h3>
          	</div>

          	<!-- <div class="col-md-4">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" name = 'country' value="" class="form-control" placeholder="country">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>County</label>
                  <input type="text" name = 'county' value="" class="form-control" placeholder="county">
                </div>
                </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Sub County</label>
                  <input type="text" name = 'subcounty' value="" class="form-control" placeholder="sub county">
                </div>
               </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Location</label>
                  <input type="text" name = 'location' value="" class="form-control" placeholder="location">
                </div>
                </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label>Sub Location</label>
                  <input type="text" name = 'slocation' value="" class="form-control" placeholder="sub location">
                </div>
                </div>
               <div class="col-md-4">
                <div class="form-group">
                  <label>Villages</label>
                  <input type="text" name = 'village' value="" class="form-control" placeholder="village">
                </div>
                </div>  --> 



          	</div>

          	

			<div class="row">
              <div class="col-md-12">
                <div class="form-group">
                	<div style="text-align: center;">
                  <input type="submit" value="Update Profile" class="btn btn-primary">
              </div>
                </div>
                </div>
			</div>
              



              </form>


</div>
@endsection