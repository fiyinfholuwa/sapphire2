@extends('frontend_new.app')

@section('title', 'Profile')
@section('page', 'Profile')
@section('content')

    <main id="main" style="padding-top: 200px; padding-bottom: 100px;" class="productlist padding_all">

        <section style="background-color: #ffffff; padding-top: 100px; padding-bottom: 100px;" id="product-detail-section" class="container padding pb-60 pt-xs-60">
            <div class="row">
                <div class="col-xl-8">
                    <div class="">
                        <div class="pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-4">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-4 label">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{Auth::user()->name}}</div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{Auth::user()->email}}</div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-4 label">Phone Number</div>
                                        <div class="col-lg-9 col-md-8">{{Auth::user()->phone}}</div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{Auth::user()->address}}</div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <form method="post" action="{{ route('user.profile.update', Auth::user()->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="fullName" value="{{ old('name', Auth::user()->name) }}" placeholder="Enter your full name">
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="number" class="form-control @error('phone') is-invalid @enderror" id="Phone" value="{{ old('phone', Auth::user()->phone) }}" placeholder="Enter your phone number">
                                                @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" readonly type="email" class="form-control" id="Email" value="{{ old('email', Auth::user()->email) }}" placeholder="Your email is readonly">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="Address" value="{{ old('address', Auth::user()->address) }}" placeholder="Enter your address">
                                                @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <form method="post" action="{{route('user.password.update')}}">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control" id="currentPassword" placeholder="Enter current password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control" id="newPassword" placeholder="Enter a new password" minlength="8" required>
                                                <p style="color:navy;">@error('password')
                                                    {{$message}}
                                                    @enderror</p>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password" class="form-control" id="renewPassword" placeholder="Re-enter the new password" minlength="8" required>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <style>
        .empty-cart p {
            margin-bottom: 20px;
        }
        .empty-cart a {
            font-size: 1.2em;
        }
        .padding_all {
            background-color: #0c4c91 !important;
        }
    </style>

    <style>
        .col-form-label, .label {
            font-weight: bold;
        }
    </style>


    <!-- Ensure Bootstrap JS is included -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
