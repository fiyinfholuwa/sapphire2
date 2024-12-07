@extends('frontend.app')


@section('content')
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Project"><span>Projects</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Projects</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
			<!-- End Intro Section -->
			<!-- Work Section -->
			<section id="work" class="padding ptb-xs-40">
				<div class="container">
					<div class="row text-center">
					<div class="col-lg-6 offset-lg-3 mb-30">
					<div class="heading-box">
						<!-- <h2><span>Our </span> Projects</h2> -->
					
					</div>
					
					</div>
				</div>
				
					<div class="row container-grid nf-col-3">

						@if(count($projects) > 0)
						@foreach($projects as $project)
						<div class="nf-item branding coffee spacing">
							<div class="item-box">
								<a> <img alt="1" src="{{asset($project->image)}}" class="item-container"> </a>
								<div class="link-zoom">
									<a href="{{route('project.detail', $project->id)}}" class="project_links"> <i class="fa fa-link"> </i> </a>
									<!-- <a href="" class="fancylight" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a> -->
								</div>
								<div class="gallery-heading">
									<h4><a href="{{route('project.detail', $project->id)}}">{{$project->title}}</a></h4>
									
								</div>
							</div>
						</div>
						@endforeach
						@else
						<div><h3 clas="text-center text-danger">No Projects Yet</h3></div>
						@endif
					</div>

				</div>
			</section>
			<!-- End Work Section -->
@endsection