@extends('frontend.app')


@section('content')
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="product"><span>Products</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Products</span>
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
						<!-- <h2><span>Our </span> Products</h2> -->
					
					</div>
					
					</div>
				</div>
				
        
                        <div class="row">
                        @if(count($products) > 0)
						@foreach($products as $product)

                            <div class="col-xl-4 col-lg-4 col-md-6 mb-xs-30 margin_bott">
                                <div class="maine_box">
                                    <div class="items_picher">
                                    <img src="{{asset($product->image)}}" alt="" />
                                    </div>

                                    <div class="box_detail">
                                        <div class="use_detail">
                                            <div class="event_detail">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </div>
                                        <div class="datail_show">
                                            <h3><a href="{{route('product.detail', $product->slug)}}">{{$product->title}}</a></h3>
                                            <p>
                                            {!!Str::limit(html_entity_decode($product->content),10,"...")!!}
                                            </p>
                                            <a href="{{route('product.detail', $product->slug)}}">View Details</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            @endforeach

                            @else
						<div><h3 clas="text-center text-danger">No products Yet</h3></div>
						@endif

                        </div>

					

                    <div class="pagination-nav text-left mt-60 mtb-xs-30">
                    {{$products->links('frontend.paginate')}}
                        
                    </div>
				</div>
			</section>
			<!-- End Work Section -->
@endsection