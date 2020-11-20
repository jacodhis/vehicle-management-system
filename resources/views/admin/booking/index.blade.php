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
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th> Order Number </th>
                            <th> Booked By(Email) </th>
                            <th> Phone Number </th>
                            <th> Pick Up Point </th>
                            <th> Car Plate </th>
                            <th class="text-center"> Total Amount </th>
                            <th class="text-center"> Qty </th>
                            <th class="text-center"> Status </th>

                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->email }}</td>
                                <td class="text-center">{{ $order->phone }}</td>
                                <td class="text-center">{{ $order->pickuppoint }}</td>
                                <td class="text-center">{{ $order->regno }}</td>
                                <td class="text-center">{{ config('settings.currency_symbol') }}{{ $order->tamt }}</td>
                                <td class="text-center">{{ $order->pnumber }}</td>
                                <td class="text-center">
                                    @if ($order->status == "Y")
                                        <span class="badge badge-success">Approved</span>
                                    @else
                                        <span class="badge badge-danger">Pending</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.booking.show', $order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    </div>
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
