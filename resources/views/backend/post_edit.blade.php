@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Post</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                               @csrf
                           <div class="form-group">
                                <label for="email2">Post Title</label>
                                <input type="text" class="form-control" value="{{$post->title}}" id="email2" required name="title" placeholder="Enter  Post Title">
                                <small style="color:red; font-weight:500">
                                @error('title')
                                {{$message}}
                                @enderror
                                </small>
                               
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="category" id="validationCustom02"  required>
                                <option disabled selected >Select Post Category</option>
                                @if(count($categories) > 0)
                                @foreach($categories as $category)
                                <option value="{{$category->id}}"  {{$category->id== $post->category ? "selected" : ""}} >{{$category->name}}</option>
                                @endforeach
                                @else
                                <option disabled>No Category</option>
                                @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email2">Post Content</label>
                                <textarea rows="10" type="text" class="form-control" id="email2" required name="content" placeholder="Enter Post Content">{{$post->content}}</textarea>
                                <small style="color:red; font-weight:500">
                                @error('content')
                                {{$message}}
                                @enderror
                                </small>
                               
                            </div>

                            <div class="form-group">
                                <label for="email2">Post Image</label>
                                <input type="file" class="form-control" id="email2" accept="image/*"  name="image" >
                                <small style="color:red; font-weight:500">
                                <img height="60" width="60" src="{{asset($post->image)}}" />
                                @error('image')
                                {{$message}}
                                @enderror
                                </small>
                               
                            </div>
                        
                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary">Update Post</button>
                
                        </div>
                           </form>
                    </div>
                    
                </div>
                
            </div>

@endsection