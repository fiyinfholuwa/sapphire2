@extends('backend.app')

@section('title', 'Manage Orders')
@section('page', 'Manage Orders')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing card" style="padding: 30px;">

                    <div class="widget-content widget-content-area br-6 table-responsive">
                        {{--                        <h6></h6>--}}
                            <table  class="table table-sm" id="my-table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order Reference</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Total Amount</th>
                                    <th>Payment Status</th>
                                    <th>Order Status</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $order->order_reference }}</td>
                                        <td class="align-middle">{{ $order->email }}</td>
                                        <td class="align-middle">{{ $order->address ?? 'N/A' }}</td>
                                        <td class="align-middle">{{ number_format($order->total_amount, 2) }}</td>
                                        <td class="align-middle">
                                            @if($order->payment_status == 'paid')
                                                <span class="badge bg-success">Paid</span>
                                            @else
                                                <span class="badge bg-warning">{{ ucfirst($order->payment_status) }}</span>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            @if($order->order_status == 'delivered')
                                                <span class="badge bg-success">Delivered</span>
                                            @else
                                                <span class="badge bg-warning">{{ ucfirst($order->order_status) }}</span>
                                        @endif
                                        <td class="align-middle">{{ $order->created_at->format('Y-m-d') }}</td>
                                        <td class="">

                                            <a href="{{route('order.detail', $order->id)}}" class="btn btn-primary download-invoice mt-1">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            @if($order->order_status !=='delivered')
                                                <a href="#" data-bs-toggle="modal"  data-bs-target="#status_{{$order->id}}" class="btn btn-dark download-invoice mt-1">
                                                    Order Status  <i class="fa fa-check-circle text-success"></i>
                                                </a>
                                            @endif
                                            @if($order->payment_status !=='paid')

                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#payment_{{$order->id}}" class="btn btn-secondary download-invoice mt-1">
                                                Payment Resolution  <i class="fa fa-exchange-alt"></i>
                                            </a>
                                            @endif

                                        </td>


                                    </tr>
                                    @include('backend.modals.order')

                                @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>

            </div>

        </div>

@endsection
