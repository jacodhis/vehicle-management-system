@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                   
                    <div class="row invoice-info">
                        <div class="col-4">Send By
                            <address><strong>{{ $order->first_name }}</strong></address>
                        </div>
                        
                        <div class="col-4">
                            <b>Feed Back Message:</b><br> {{ $order->email }}<br>
                            
                            
                        </div>

                    
                </div>

                    
                </section>
            </div>
        </div>
    </div>
@endsection
