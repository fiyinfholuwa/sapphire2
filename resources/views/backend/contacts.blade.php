@extends('backend.app')
@section('title' , 'All Messages')
@section('page' , 'All Messages')

@section('content')
    <div class="row" style="margin:10px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="bg-white p-3   align-items-center">



                <div class="card-body">
                    <div class="table-responsive">
                        <table id="my-table" class="display table  table-hover" >
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1; ?>
                             @foreach($all_messages as $message)
                             <tr>

                             <td>{{$i++;}}</td>
                             <td>{{$message->name}}</td>
                             <td>{{$message->email}}</td>
                             <td>{{$message->phone}}</td>
                             <td>{{$message->subject}}</td>
                             <td>{{$message->message}}</td>
                             <td><a href="#" data-bs-toggle="modal" data-bs-target="#message_{{$message->id}}" ><i style="color:red;" class="fa fa-trash"></i></a>
                                    </td>
                                    @include('backend.modals.deleteMessage')</td>
                            </tr>
                             @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
