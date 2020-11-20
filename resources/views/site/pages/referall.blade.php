@extends('site.app')
@section('title', 'Homepage')
@section('content')
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                	<div class="card-body">
					    @guest
					    @else
					    <ul class="list-group mt-3">
					        <li class="list-group-item">Your Username: {{ Auth::user()->username }}</li>
					        <li class="list-group-item">Your Email: {{ Auth::user()->email }}</li>
					        <li class="list-group-item">Your Referral link: {{ Auth::user()->referral_link }}</li>
					        <li class="list-group-item">Referrer: {{ Auth::user()->referrer->username ?? 'Not Specified' }}</li>
					        <li class="list-group-item">Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
					    </ul>

					    @endguest
					</div>
                </div>
            </div>

        </div>
    </section>

    @stop