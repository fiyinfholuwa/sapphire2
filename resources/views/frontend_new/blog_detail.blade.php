@extends('frontend.app')


@section('content')
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Blog Detail"><span>Blog Detail</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Blog Detail</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
  
  <!-- Blog Post Section -->
  <section class="padding pt-xs-40">
    <div class="container">
      <div class="row"> 
        <!-- Post Bar -->
        <div class="col-lg-9 blog-post-hr post-section">
          <div class="blog-post mb-30">
            <div class="post-meta"> <span>by <a href="javascript:avoid(0);">{{$post->author}}</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a></span><span></span>
              <div class="post-more-link pull-right">
                <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a> </div>
                <a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a> </div>
            </div>
            <div class="post-header">
              <h2>{{$post->title}}</h2>
            </div>
            <div class="post-media"> <img width="100%" src="{{asset($post->image)}}" alt=""><span class="event-calender blog-date"> <span>{{$post->created_at->diffForHumans();}}</span> </span> </div>
            <div class="post-entry">
              <p>{!! html_entity_decode(nl2br($post->content)) !!} </p>
            </div>
            
          </div>
          <hr />
          <div class="clearfix"></div>
          <div class="post-comment mtb-30">
            <h4>Comments <span class="comment-numb">({{count($comments)}})</span></h4>
            <ul class="comment-list mt-30">
              <li>
                @if(count($comments)> 0)
                @foreach($comments as $comment)
                <div class="comment-avatar"> <img src="https://cdn-icons-png.flaticon.com/512/6596/6596121.png" alt=""> </div>
                <div class="">
                  <div class="comment-detail">
                    <h6>{{$comment->name}}</h6>
                    <div class="post-meta"> <span>{{$comment->created_at->diffForHumans();}}</span> </div>
                    <p>{{$comment->message}} </p>
                  </div>
                  @endforeach
                  @else
                  <div><h6 class="text-center text-danger">No comment yet</h6></div>
                  @endif
              </li>
            </ul>
          </div>
          <div class="mtb-60">
            <h4>Leave a comment</h4>
            
<div class="row mt-30">
    <div class="col-md-12">
          @if(Auth::check())
          <form action="{{route('comment.save')}}" method="post">
            @csrf
                <div class="row">
                <input type="hidden" name="post_id" value="{{$post->id}}" />
                <input type ="hidden" value="{{Auth::user()->name}}" name="name" />
                  
                  <div class="col-md-12 col-lg-12">
                    <textarea placeholder="Message" name="message" id="message" class="form-full" required=""></textarea>
                  </div>
                  <div class="col-md-12 col-lg-12">
                    <button class="btn-text"> Post Comment </button>
                  </div>
                </div>
              </form>
            
            
            @else
            <form action="{{route('comment.save')}}" method="post">
              @csrf
                <div class="row">
                <input type="hidden" name="post_id" value="{{$post->id}}" />
                  <div class="col-md-12 col-lg-12">
                    <input type="text" class="input-lg form-full" value="" placeholder="Name" name="name" id="name" required="">
                  </div>
                
                  <div class="col-md-12 col-lg-12">
                    <textarea placeholder="Message" name="message" id="message" class="form-full" required=""></textarea>
                  </div>
                  <div class="col-md-12 col-lg-12">
                    <button class="btn-text"> Post Comment </button>
                  </div>
                </div>
              </form>
            @endif
             
            </div>
</div>
          </div>
        </div>
        <!-- End Post Bar --> 
        @include('frontend.sidebar')
      </div>
    </div>
  </section>
  <!-- End Blog Post Section --> 
			
@endsection