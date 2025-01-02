@extends('backend.app')

@section('title', 'Manage Clients')
@section('page', 'Manage Clients')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing card" style="padding: 30px;">

                    <div class="widget-content widget-content-area br-6 table-responsive">
                        {{--                        <h6></h6>--}}

                        <table id="my-table" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->user_type == 0)
                                            <span class="badge bg-light-success">User</span>
                                        @else
                                            <span class="badge bg-light-warning">Admin</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="#" data-bs-toggle="modal" class="btn btn-primary btn-sm" data-bs-target="#user_password_{{$user->id}}" ><i style="color:white;" class="fa fa-lock fa-1x"></i></a>

                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_{{$user->id}}" ><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @include('backend.modals.user')

                            @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>

@endsection
