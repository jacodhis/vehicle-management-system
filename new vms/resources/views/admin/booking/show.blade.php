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
                    <div class="row mb-4">
                        <div class="col-6">
                            <h2 class="page-header"><i class="fa fa-globe"></i> {{ $order->id }}</h2>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Date: {{ $order->created_at }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Placed By
                            <address><strong>{{ $order->email }}</strong></address>
                        </div>
                        
                        <div class="col-4">
                            <b>Order ID:</b> {{ $order->id }}<br>
                            <b>Amount:</b> {{ config('settings.currency_symbol') }}{{ round($order->tamt, 2) }}<br>
                            <b>Payment Method:</b>  Mpesa <br>
                            <b>Payment Status:</b> {{ $order->status == "Y" ? 'Completed' : 'Not Completed' }}<br>

                            <b>Number of Passenger:</b> {{ $order->pnumber }}<br>
                            <b>Booking Date:</b> {{ $order->created_at }}<br>
                            <b>Fair Price:</b> {{ $order->amt }}<br>
                            <b>Total Amount:</b> {{ $order->tamt }}<br>
                            <b>Passenger Message:</b> {{ $order->pmsg }}<br>
                            
                        </div>

                    <div class="col-4">
                        @if ($order->status == "Y")
                                        <span class="badge badge-success">Approved</span>
                                    @else
                                        <form action = "/admin/booking/aairtime<?php echo $order->id; ?>" method = "post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input type = 'submit' value = "Accept request" />
                        </form>
                                    @endif
                        
                    </div>
                </div>

                    
                </section>
            </div>
        </div>
    </div>
@endsection
