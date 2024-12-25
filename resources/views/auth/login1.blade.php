@extends('frontend.app')


@section('content')
<section style="height: 200px;" class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Login"><span>Login</span></h1>
      		<div class="page-breadcrumb">
							<a href="index.html">Home</a>/ <span>Login</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->

  <!-- Login Section -->
  <div id="login" class="ptb ptb-xs-40 page-signin">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        	<div class="main-body">
        	  <div class="body-inner">
        	    <div class="card bg-white">
        	      <div class="card-content">
        	        <section class="logo text-center">
        	          <h2>Login</h2>
        	        </section>
        	        <form method="post" action="{{ route('login') }}" class="form-horizontal ng-pristine ng-valid">
                        @csrf
        	          <fieldset>
        	            <div class="form-group">
        	              <div class="ui-input-group">
        	                <input name="email"  type="text" required class="form-control">
        	                <span class="input-bar"></span>
        	                <label>Email</label>
        	              </div>
        	            </div>
        	            <div class="form-group">
        	              <div class="ui-input-group">
        	                <input name="password" type="password" required class="form-control">
        	                <span class="input-bar"></span>
        	                <label>Password</label>
        	              </div>
        	            </div>
        	          </fieldset>
        	       
        	      </div>
        	      <div class="card-action no-border text-right"> <button type="submit" class="color-primary">Sign In</button> </div>
                  </form>
        	    </div>
        	    <div class="additional-info"> <a href="{{route('register')}}">Register</a><span class="divider-h"></span></div>
        	  </div>
        	</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Login Section --> 
 
@endsection