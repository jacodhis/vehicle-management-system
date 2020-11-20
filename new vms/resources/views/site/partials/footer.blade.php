<!-- ========================= FOOTER ========================= -->
<footer id="footers" class="section-footer bg-blue black">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-sm-3  col-md-4 white">
                    <h5 class="title">My Account</h5>
                    <ul class="list-unstyled">
                        <li> <a href="{{ url('/privacy') }}"> Privacy </a></li>
                        <li> <a href="{{ route('account.orders') }}"> My Booking </a></li>
                        <li> <a href="{{ url('/terms') }}"> Terms and Condition </a></li>
                        <li> <a href="{{ url('/subscribed') }}"> How to Book </a></li>
                        <!-- <li> <a href="#"> Payment </a></li> -->
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-4 white">
                    <article class="white">
                        <h5 class="title">Contacts</h5>
                        <p>
                            <strong><img src="{{ asset('frontend/images/icons/email.png') }}" style="width: 35px; height: 35px; margin-top: 0px; "></strong> info@vehiclemanagementsystem.com
                            <br>
                            <strong><img src="{{ asset('frontend/images/icons/phone.png') }}" style="width: 35px; height: 35px; margin-top: 0px; "></strong> +254711111111
                        </p>

                        <div class="btn-group white">
                            <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i
                                    class="fab fa-facebook-f  fa-fw"></i></a>
                            <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i
                                    class="fab fa-instagram  fa-fw"></i></a>
                            <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i
                                    class="fab fa-youtube  fa-fw"></i></a>
                            <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i
                                    class="fab fa-twitter  fa-fw"></i></a>
                        </div>
                    </article>
                </aside>
                <aside class="col-sm-3  col-md-4 white">
                    <h5 class="title">Give Us Feedback</h5>

                    <form action = "/create" method = "post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">                     
                        <div class="form-group">
                            <input id="username" type="text" class="form-control" name="username" placeholder="Enter Topic/Issue/Complaint" aria-label="Enter topic"  value="" required autocomplete="username">
                        </div>
                        <div class="form-group">
                            <p class="title">Message</p>
                            <textarea class="form-control" name="email" rows="6"></textarea>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                        </div>
                        <div class="input-group-append">
                            <input type = 'submit' class="btn btn-primary text-white" value = "Submit Feedback"/>
                        </div>
                    </form>
                    
                </aside>
                
            </div>
            <!-- row.// -->
            <br>
        </section>
        <section class="footer-bottom row border-top-white">
            <div class="col-sm-6">
                <p class="text-white-50"> Copyright &copy 2020</p>
            </div>
            <!-- <div class="col-sm-6">
                <p class="text-white-50"> Dals Learning</p>
            </div> -->
            <div class="col-sm-6">
                <p class="text-md-right text-white-50">Vehicle Management System.  All rights reserved</p>
            </div>
        </section>
        <!-- //footer-top -->
    </div>
    <!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
