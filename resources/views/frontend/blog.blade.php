@extends('frontend.app')


@section('content')

<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Blog"><span>Blog</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Blog</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
 
 
  <!-- Blog Post Section -->
  <section class="padding pt-xs-40">
    <div class="container">
      <div class="row"> 
        <!-- Post Item -->
        <div class="col-lg-9">
          <div class="row">
            <div class="col-md-12 col-lg-12 blog-post-hr">
             
            @if(count($posts) > 0)
            @foreach($posts as $post)
              <hr />
              <div class="blog-post mb-45">
                <div class="post-media"> <img width="100%" src="{{asset($post->image)}}" alt="" /><span class="event-calender blog-date"><span>{{$post->created_at->diffForHumans();}}</span></div>
                <div class="post-meta"> <span>by <a href="javascript:avoid(0);">{{$post->author}}</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span>
                  <div class="post-more-link pull-right">
                    <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a> </div>
                    <a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a> </div>
                </div>
                <div class="post-header">
                  <h2><a href="{{route('blog.detail', $post->post_url)}}"> {{$post->title}} </a></h2>
                </div>
                <div class="post-entry">
                  <p> {!!Str::limit(html_entity_decode($post->content),20,"...")!!} </p>
                </div>
                <div class="post-more-link pull-left"> <a href="{{route('blog.detail', $post->post_url)}}" class="btn-text">Read More</a> </div>
              </div>
              @endforeach
              
            
              
            </div>
          </div>
          <!-- Pagination Nav -->
          <div class="pagination-nav text-left mt-60 mtb-xs-30">
          {{$posts->links('frontend.paginate')}}
            
          </div>
          @else
          <div><h3 class="text-center text-danger">No Post Yet</h3></div>
          @endif
          <!-- End Pagination Nav -->       
        </div>
        <!-- End Post Item --> 
        <!-- Sidebar -->
        @include('frontend.sidebar')
        <!-- End Sidebar --> 
      </div>
    </div>
  </section>
  <!-- End Blog Post Section -->
@endsection