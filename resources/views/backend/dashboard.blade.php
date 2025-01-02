@extends('backend.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-primary">
                                <i style="font-size: 40px;" class="ph-duotone ph-users-three"></i>

                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">All Users</h6>
                        </div>
                    </div>
                    <div class="bg-body p-3 mt-3 rounded">
                        <div class="mt-3 row align-items-center">
                            <div class="col-7">
                                {{--                                <div id="all-earnings-graph"></div>--}}
                            </div>
                            <div class="col-5">
                                <h5 class="mb-1">{{$users}}</h5>
                                {{--                                <p class="text-primary mb-0"><i class="ti ti-arrow-up-right"></i>{{$assigned_applications}}</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-warning">
                                <i style="font-size: 40px;" class="ph-duotone ph-list-checks"></i>

                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">All Products</h6>
                        </div>
                    </div>
                    <div class="bg-body p-3 mt-3 rounded">
                        <div class="mt-3 row align-items-center">
                            <div class="col-7">
                                {{--                                <div id="page-views-graph"></div>--}}
                            </div>
                            <div class="col-5">
                                <h5 class="mb-1">{{$products}}</h5>
                                {{--                                <p class="text-warning mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-info">
                                <i style="font-size: 40px;" class="ph-duotone ph-shopping-cart"></i>

                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">All Orders</h6>
                        </div>
                    </div>
                    <div class="bg-body p-3 mt-3 rounded">
                        <div class="mt-3 row align-items-center">
                            <div class="col-7">
                                {{--                                <div id="total-task-graph"></div>--}}
                            </div>
                            <div class="col-5">
                                <h5 class="mb-1">{{$all_orders}}</h5>
                                {{--                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> New</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-danger">
                                <i style="font-size: 40px;" class="ph-duotone ph-shopping-cart-simple"></i>

                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Pending Orders</h6>
                        </div>
                    </div>
                    <div class="bg-body p-3 mt-3 rounded">
                        <div class="mt-3 row align-items-center">
                            <div class="col-7">
                                {{--                                <div id="total-task-graph"></div>--}}
                            </div>
                            <div class="col-5">
                                <h5 class="mb-1">{{$pending_orders}}</h5>
                                {{--                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> New</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-success">
                                <i style="font-size: 40px;" class="ph-duotone ph-check-circle"></i>

                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Completed Orders</h6>
                        </div>
                    </div>
                    <div class="bg-body p-3 mt-3 rounded">
                        <div class="mt-3 row align-items-center">
                            <div class="col-7">
                                {{--                                <div id="total-task-graph"></div>--}}
                            </div>
                            <div class="col-5">
                                <h5 class="mb-1">{{$completed_orders}}</h5>
                                {{--                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> New</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                                <i style="font-size: 40px;" class="ph-duotone ph-messenger-logo"></i>

                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Messages</h6>
                        </div>
                    </div>
                    <div class="bg-body p-3 mt-3 rounded">
                        <div class="mt-3 row align-items-center">
                            <div class="col-7">
                                {{--                                <div id="total-task-graph"></div>--}}
                            </div>
                            <div class="col-5">
                                <h5 class="mb-1">{{$messages}}</h5>
                                {{--                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> New</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
