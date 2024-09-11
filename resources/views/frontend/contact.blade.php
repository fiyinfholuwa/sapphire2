@extends('frontend.app')

@section('content')
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Contact"><span>Contact</span></h1>
      		<div class="page-breadcrumb">
							<a href="index.html">Home</a>/ <span>Contact</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->
  
			<!-- CONTENT -->
		
			<!-- Contact Section -->
			<section class="padding pt-xs-40">
				<div class="container">

					<div class="row">

						<div class="col-md-8 col-lg-8">

							<div class="headeing pb-30">
								<h2>Get in Touch</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<!-- Contact FORM -->
							<form  method="post" action="{{route('contact.save')}}" class="contact-form " id="contact">
                                @csrf
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<!-- <strong>Thanks</strong> for using our template. Your message has been sent. -->
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="name" placeholder="Your Name">
                                            <small style="color:red; font-weight:500">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                            </small>
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="email" placeholder="Email" >
                                            <small style="color:red; font-weight:500">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                            </small>
										</div>
                                        <div class="form-field">
											<input class="input-sm form-full" id="phone" type="text" name="phone" placeholder="Phone Number" >
                                            <small style="color:red; font-weight:500">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                            </small>
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="sub" type="text" name="subject" placeholder="Subject">
                                            <small style="color:red; font-weight:500">
                                            @error('subject')
                                            {{$message}}
                                            @enderror
                                            </small>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="message" placeholder="Your Message" ></textarea>
                                            <small style="color:red; font-weight:500">
                                            @error('message')
                                            {{$message}}
                                            @enderror
                                            </small>
										</div>
									</div>
									<div class="col-md-12 col-lg-12 mt-30">
										<button class="btn-text" type="submit" id="submit" name="button">
											Send Message
										</button>
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->
						</div>

						<div class="col-md-4 col-lg-4 contact mt-xs-30">
							<div class="headeing pb-20">
								<h2>Contact Info</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">

								<ul class="info">
									<li>
										<div class="icon ion-ios-location"></div>
										<div class="content">
											<p>
												Adedibu shopping complex, beside Academy Suites, Ososami,
											</p>
											<p>
												Oke Ado, Ibadan, Oyo state, Ibadan, Nigeria.
											</p>
										</div>
									</li>
						

									<li>
										<div class="icon ion-android-call"></div>
										<div class="content">
											<p>
												+234 703 195 4676
											</p>
											<p>
												+234 704 355 2242
											</p>
											<p>
												+234 816 087 7738
											</p>
											<p>
												+234 809 723 8712
											</p>
										</div>
									</li>
									<li>
										<div class="icon ion-ios-email"></div>
										<div class="content">
											<p>
												corporatecommunications@obidiyasapphire.com
											</p>
										</div>
									</li>
								</ul>
								<ul class="event-social">
									<li>
										<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
			
			<!-- Contact Section -->
@endsection