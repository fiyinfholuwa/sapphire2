@extends('frontend_new.app')

@section('content')
<!-- Intro Section -->
<section style="padding-top: 200px; overflow-x: hidden; " class="padding pt-xs-40">
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
                        <div style="padding-bottom:50px; " class="col-md-12 col-lg-12 mt-30">
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



        <style>
            /* General Section Styling */
        .padding {
            background-color: #f8f9fa;
        }

        .headeing h2 {
            color: #004aad;
            font-weight: bold;
        }

        .headeing .b-line {
            width: 50px;
            height: 3px;
            background-color: #004aad;
            display: inline-block;
        }

        /* Form Styling */
        .contact-form .form-field input,
        .contact-form .form-field textarea {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            font-size: 14px;
            margin-bottom: 15px;
            transition: border 0.3s ease;
        }

        .contact-form .form-field input:focus,
        .contact-form .form-field textarea:focus {
            border: 1px solid #004aad;
            outline: none;
        }

        .btn-text {
            background-color: #004aad;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .btn-text:hover {
            background-color: #003680;
        }

        /* Contact Info Section */
        .contact-info ul.info li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .contact-info ul.info .icon {
            font-size: 24px;
            color: #004aad;
            margin-right: 15px;
        }

        .contact-info ul.info .content p {
            margin: 0;
            color: #333;
        }

        .event-social {
            padding: 0;
            list-style: none;
            margin-top: 20px;
        }

        .event-social li {
            display: inline-block;
            margin-right: 10px;
        }

        .event-social li a {
            color: #004aad;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .event-social li a:hover {
            color: #003680;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-info ul.info li {
                flex-direction: column;
                align-items: flex-start;
            }

            .contact-info ul.info .icon {
                margin-bottom: 10px;
            }

            .contact-info ul.info .content p {
                margin-bottom: 5px;
            }
        }
    </style>




@endsection
