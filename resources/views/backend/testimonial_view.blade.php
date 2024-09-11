@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Testimonial</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('testimonial.add')}}" method="post" enctype="multipart/form-data">
                               @csrf
                           <div class="form-group">
                                <label for="email2">Testimonial Name</label>
                                <input type="text" class="form-control" id="email2" required name="name" placeholder="Enter Testimonial Name">
                                <small style="color:red; font-weight:500">
                                @error('name')
                                {{$message}}
                                @enderror
                                </small>
                               
                            </div>
                            <div class="form-group">
                                <label for="email2">Testimonial Content</label>
                                <textarea type="text" class="form-control" id="email2" required name="content" placeholder="Enter Testimonial Content"></textarea>
                                <small style="color:red; font-weight:500">
                                @error('content')
                                {{$message}}
                                @enderror
                                </small>
                               
                            </div>
                            <div class="form-group">
                                <label for="email2">Testimonial Designation</label>
                                <input type="text" class="form-control" id="email2" required name="title" placeholder="Enter Testimonial Designation">
                                <small style="color:red; font-weight:500">
                                @error('title')
                                {{$message}}
                                @enderror
                                </small>
                               
                            </div>

                            <div class="form-group">
                                <label for="email2">Testimonial Image</label>
                                <input type="file" class="form-control" id="email2" accept="image/*" required name="image" >
                                <small style="color:red; font-weight:500">
                                @error('content')
                                {{$message}}
                                @enderror
                                </small>
                               
                            </div>
                        
                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary">Add Testimonial</button>
                
                        </div>
                           </form>
                    </div>
                    
                </div>
                
            </div>

@endsection