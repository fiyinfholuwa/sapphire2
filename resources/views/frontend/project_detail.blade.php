@extends('frontend.app')


@section('content')
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Project Details"><span>{{$project->title}}</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>{{$project->title}}</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
			<!-- End Intro Section -->
			<!-- End Intro Section -->
			<div id="project-detail-section" class="padding pb-60 pt-xs-60">
				<div class="container">
					<div class="row ">
						<div class="col-sm-12">
							<div class="heading-box pb-30 ">
								<!-- <h2><span>Our</span> Project</h2> -->
								<span class="b-line l-left"></span>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="project-details">
								<figure>
									<img width="60%" src="{{asset($project->image)}}" alt="">
								</figure>
								<div class="project-info col-sm-12 col-lg-4 ">
									<h3>Project Description</h3>
									<ul>
										
										<li>
											<strong>Location:</strong>{{$project->location}}
										</li>
										<li>
											<strong>Surface Area:</strong> {{$project->area}} m2
										</li>
										<li>
											<strong>Year Completed:</strong>{{$project->year}}
										</li>
									
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-7 mt-30">
							<div class="box-title mb-20">
								<h3>{{$project->title}}</h3>
							</div>
							<div class="text-content">
								<p>
                                {!! html_entity_decode(nl2br($project->content)) !!}
								</p>
								
							</div>
						</div>
						
							
					</div>
				</div>
			</div>
			
@endsection