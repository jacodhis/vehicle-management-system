@extends('site.app')
@section('title', $product->name)
@section('content')
    <!-- <div class="clearfix bg-blue">
        <div class="container">
            <h4 class="title-page">{{ $product->name }}</h4>
        </div>
    </div> -->
     @guest
     <br/><br/><br/>
     <h4 style="text-align: center;" class="alert alert-success">Please login first to proceed to booking </h4>
     <br/><br/><br/>
        @include('auth.login') 
     @else
    <section class="section-content bg padding-y border-top" id="site">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row no-gutters">
                            <aside class="col-sm-5 border-right">
                                <article class="gallery-wrap">
                                    @if ($product->images->count() > 0)
                                        <div class="img-big-wrap">
                                            <div class="padding-y">
                                                <a href="{{ asset('storage/'.$product->images->first()->full) }}" data-fancybox="">
                                                    <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="img-big-wrap">
                                            <div>
                                                <a href="https://via.placeholder.com/176" data-fancybox=""><img src="https://via.placeholder.com/176"></a>
                                            </div>
                                        </div>
                                    @endif
                                     @if ($product->images->count() > 0)
                                        <div class="img-small-wrap">
                                            @foreach($product->images as $image)
                                                <div class="item-gallery">
                                                    <img src="{{ asset('storage/'.$image->full) }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </article>
                            </aside>
                            <aside class="col-sm-7">
                                <article class="p-5">
                                    <h3 class="title mb-3">{{ $product->name }}</h3>
                                    <dl class="row">
                                        <dt class="col-sm-3">Bus CODE</dt>
                                        <dd class="col-sm-9">{{ $product->sku }}</dd>
                                        <!-- <dt class="col-sm-3">Weight</dt> -->
                                        <!-- <dd class="col-sm-9">{{ $product->weight }}</dd> -->
                                    </dl>
                                    <div class="mb-3">
                                        @if ($product->sale_price > 0)
                                            <var class="price h3 text-danger">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span><span class="num" id="productPrice"> {{$product->sale_price }}
                                                <del class="price-old"> {{ config('settings.currency_symbol') }} {{$product->price }}</del>
                                            </var>
                                        @else
                                            <var class="price h3 text-success">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span>
                                                <span class="num" id="productPrice"> {{$product->price }}</span>
                                            </var>
                                        @endif
                                    </div>
                                    <hr>
                                    <form action="{{ route('product.add.cart') }}" method="POST" role="form" id="addToCart">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <dl class="dlist-inline">
                                                    @foreach($attributes as $attribute)
                                                        @php
                                                            
                                                                $attributeCheck = [];
                                                            
                                                        @endphp
                                                        @if ($attributeCheck)
                                                            <dt>{{ $attribute->name }}: </dt>
                                                            <dd>
                                                                <select class="form-control form-control-sm option" style="width:180px;" name="{{ strtolower($attribute->name ) }}">
                                                                    <option data-price="0" value="0"> Select a {{ $attribute->name }}</option>
                                                                    @foreach($product->attributes as $attributeValue)
                                                                        @if ($attributeValue->attribute_id == $attribute->id)
                                                                            <option
                                                                                data-price="{{ $attributeValue->price }}"
                                                                                value="{{ $attributeValue->value }}"> {{ ucwords($attributeValue->value . ' +'. $attributeValue->price) }}
                                                                            </option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </dd>
                                                        @endif
                                                    @endforeach
                                                </dl>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <dl class="dlist-inline">
                                                    <dt>Number of Passenger(s): </dt>
                                                    <dd>
                                                        <input class="form-control" type="number" min="1" value="1" max="30" name="qty" style="width:70px;">
                                                        <input type="hidden" name="productId" value="{{ $product->id }}">
                                                        <input type="hidden" name="price" id="finalPrice" value="{{ $product->sale_price != '' ? $product->sale_price : $product->price }}">
                                                        <input type="hidden" name="route" value="{{ $product->description }}">
                                                        <input type="hidden" name="regno" value="{{ $product->name }}">

                                                        
                                                    </dd>
                                                </dl>
                                                <dl class="dlist-inline"> 
                                                    <dt>Your Email Address: </dt>
                                                    <dd>
                                                <input class="form-control" name="email" value="{{ Auth::user()->email }}" style="width:270px;">
                                            </dd>
                                        </dl>
                                                <dl class="dlist-inline">
                                                    <dt>Your Active Phone Number: </dt>
                                                    <dd>
                                                    <input class="form-control" name="phone" value="{{ Auth::user()->address }}" style="width:270px;">
                                                </dd>
                                            </dl>

                                            <dl class="dlist-inline">
                                                    <dt> Prefer Seat No: </dt>
                                                    <dd>
                                                    <input class="form-control" type="number" min="2" value="2" max="14" name="sno"  style="width:70px;">
                                                </dd>
                                            </dl>


                                                <dl class="dlist-inline">
                                                    
                                                    <dt>Pick Up point: </dt>
                                                    <dd>
                                                        <input class="form-control" type="text" name="ppoint" style="width:470px;">
                                                    </dd>
                                                </br>
                                                <small>Make sure your pick up point is along this route {{ $product->description }}. We only pick passengers along specified route. Be on the pick up station on time to avoid unnecessary passed by. We wait for you at station for a maximun of 10 minutes.</small>
                                                </dl>

                                                </dl>
                                                <dl class="dlist-inline">
                                                    <dt>Message: </dt>
                                                    <dd>
                                                        <input class="form-control" type="text" name="pmsg" style="width:470px;">
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Book</button>
                                    </form>
                                </article>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <article class="card mt-4">
                        <div class="card-body">
                            {!! $product->description !!}
                        </div>
                    </article>
                </div>
                <div class="col-md-12">
                    <article class="card mt-4">
                        <div class="card-body">
                            <h3 class="title mb-3">{{ $product->name }}  current Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816690851106!2d37.64184231475311!3d0.05178299996222222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17882100ccace2cf%3A0x9edcbf6de9aa21e6!2sMeru%20Slopes%20Hotel!5e0!3m2!1sen!2ske!4v1601878728224!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    @endguest
@stop
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#addToCart').submit(function (e) {
                if ($('.option').val() == 0) {
                    e.preventDefault();
                    alert('Please select an option');
                }
            });
            $('.option').change(function () {
                $('#productPrice').html("{{ $product->sale_price != '' ? $product->sale_price : $product->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#productPrice').html(finalPrice);
            });
        });
    </script>
@endpush
