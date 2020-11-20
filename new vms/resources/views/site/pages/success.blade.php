@extends('site.app')
@section('title', 'Order Completed')
@section('content')
    <!-- <div class="clearfix bg-blue">
        <div class="container">
            <h4 class="title-page">Order Completed</h4>
        </div>
    </div> -->
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <main class="col-sm-12">
                    <p class="alert alert-success">Your order placed successfully. Your order number is : {{ $order->order_number }}.</p></main>
            </div>
        </div>
    </section>
@stop
