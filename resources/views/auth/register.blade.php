@extends('frontend.app')

@section('content')
<!-- Intro Section -->
<section  style="height: 200px;" class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Register"><span>Register</span></h1>
      		<div class="page-breadcrumb">
							<a href="index.html">Home</a>/ <span>Register</span>
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
                  <h2>Register</h2>
                </section>
                <form method="POST" action="{{ route('register') }}" class="form-horizontal ng-pristine ng-valid">
                    @csrf
                  <fieldset>
                    <div class="form-group">
                      <div class="ui-input-group">
                        <input name="name" type="text" value="{{old('name')}}" required class="form-control">
                        <span class="input-bar"></span>
                        <label>Your Name</label>
                    
                      </div>
                      <small style="color:red; font-weight:500">
                                @error('name')
                                {{$message}}
                                @enderror
                                </small>
                    </div>
                    <div class="form-group">
                      <div class="ui-input-group">
                        <input name="email" type="text" value="{{old('email')}}" required  class="form-control">
                        <span class="input-bar"></span>
                        <label>Your email</label>
                      </div>
                      <small style="color:red; font-weight:500">
                                @error('email')
                                {{$message}}
                                @enderror
                                </small>
                    </div>
                    <div class="form-group">
                      <div class="ui-input-group">
                        <input name="password" type="text"   required class="form-control">
                        <span class="input-bar"></span>
                        <label>Your password </label>
                      </div>
                      <small style="color:red; font-weight:500">
                                @error('password')
                                {{$message}}
                                @enderror
                                </small>
                    </div>
                    <div class="form-group">
                      <div class="ui-input-group">
                        <input name="password_confirmation" type="text" required  class="form-control">
                        <span class="input-bar"></span>
                        <label>Please confirm your password </label>
                      </div>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="register"/>
                  </fieldset>
                </form>
              </div>
              <div class="card-action no-border text-right"> <a href="{{route('login')}}">Login</a> </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- End Login Section -->  
  

@endsection