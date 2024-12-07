


@extends('frontend_new.app')

@section('content')

<main>
    <article>

        <!--
          - #HERO
        -->

        <section class="hero" id="home">
            <div class="container">

                <h2 class="h1 hero-title">Obidiya Sapphire Enterprises</h2>

                <p class="hero-text">
                    Your trusted partner in comprehensive concrete solutions. With years of industry experience, we specialize in innovative concrete strengthening, waterproofing, and restoration for new construction and existing buildings.

                </p>

                <div class="btn-group">
                    <a href="{{route('about')}}" class="btn btn-primary">About Us</a>

                    <a  href="{{route('contact')}}" class="btn btn-secondary">Contact Us</a>
                </div>

            </div>
        </section>



        <section class="popular" id="destination">
            <div class="container">

                <!--          <p class="section-subtitle">Uncover place</p>-->

                <h2 class="h2 section-title text-center">Our Expertise</h2>


                <ul class="popular-list">

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="https://concrete-live.storage.googleapis.com/upload/img_cache/file-1413-7aede278ccf68c6aa48d5b44bbb33f05.jpg" alt="San miguel, italy" loading="lazy">
                            </figure>

                            <div class="card-content">

                                <p class="card-subtitle">
                                    <!--                    <a href="#">Italy</a>-->
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#!">Concrete Restoration and Repair</a>
                                </h3>


                            </div>

                        </div>
                    </li>


                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTkuxlFEN4eULa0O5RjyaWUPxEv9NYKEFtmg&s" alt="San miguel, italy" loading="lazy">
                            </figure>

                            <div class="card-content">


                                <p class="card-subtitle">
                                    <!--                    <a href="#">Italy</a>-->
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#!">Waterproofing Solutions</a>
                                </h3>


                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="https://www.demingengineering.landotnet.com/assets/images/services/structural/Structural-Strengthening-1-1-500x366.jpg" alt="San miguel, italy" loading="lazy">
                            </figure>

                            <div class="card-content">

                                <p class="card-subtitle">
                                    <!--                    <a href="#">Italy</a>-->
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#!">Structural Strengthening</a>
                                </h3>


                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="https://i0.wp.com/ardexaustralia.com/wp-content/uploads/2018/03/header-tiling.png?fit=1024%2C446&ssl=1" alt="San miguel, italy" loading="lazy">
                            </figure>

                            <div class="card-content">

                                <p class="card-subtitle">
                                    <!--                    <a href="#">Italy</a>-->
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#!">Tiling Systems</a>
                                </h3>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="https://s7d2.scene7.com/is/image/sherwinwilliams/PM-energy-cui-coating-pipe-application-sstk-719851267:SmartCropFourToThree?wid=640&hei=496&fit=constrain,1" alt="San miguel, italy" loading="lazy">
                            </figure>

                            <div class="card-content">

                                <p class="card-subtitle">
                                    <!--                    <a href="#">Italy</a>-->
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#!">Protective Coatings</a>
                                </h3>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="popular-card">

                            <figure class="card-img">
                                <img src="https://mavro-int.com/wp-content/uploads/2023/03/the-worker-applies-gray-epoxy-resin-to-the-new-flo-2022-11-15-04-17-05-utc-1024x683.jpg" alt="San miguel, italy" loading="lazy">
                            </figure>

                            <div class="card-content">

                                <p class="card-subtitle">
                                </p>

                                <h3 class="h3 card-title">
                                    <a href="#!">Industrial Floorings (Epoxy & Hardtops)</a>
                                </h3>
                            </div>

                        </div>
                    </li>



                </ul>

            </div>
        </section>



        <section>
            <section id="why_choose">
                <div class="feat bg-gray pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="section-head col-sm-12">
                                <h2 class="h2 section-title text-center"><span>Why Choose</span> Obidiya Sapphire?</h4></h2>


                                <p>At Obidiya Sapphire, we bring industry leadership, innovative techniques, and a commitment to excellence in concrete repair and protection.</p>
                            </div>
                            <!-- Feature boxes -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="item">
                                    <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                                    <h6>Industry Leadership</h6>
                                    <p>We are at the forefront of concrete technology, following the latest European Norm (EN 1504) standards to provide cutting-edge solutions for your structures.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="item">
                                    <span class="icon feature_box_col_two"><i class="fa fa-cogs"></i></span>
                                    <h6>Comprehensive Solutions</h6>
                                    <p>From micro-concrete for jacketing to waterproofing membranes and industrial flooring, we offer end-to-end services for all concrete needs.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="item">
                                    <span class="icon feature_box_col_three"><i class="fa fa-check"></i></span>
                                    <h6>Quality Assurance</h6>
                                    <p>Our certified team ensures high standards in every project, using best-in-class materials to not only meet but exceed industry standards.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="item">
                                    <span class="icon feature_box_col_four"><i class="fa fa-lightbulb"></i></span>
                                    <h6>Innovative Techniques</h6>
                                    <p>We use methods like crack injection and FRP strengthening for lasting results, addressing both surface issues and underlying structural concerns.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="item">
                                    <span class="icon feature_box_col_five"><i class="fa fa-tasks"></i></span>
                                    <h6>Tailored Approaches</h6>
                                    <p>Each project is unique, and we tailor our solutions to meet your specific requirements, ensuring the best approach for every structure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>

                    #why_choose{
                        margin-top: -200px;
                    }

                    .item {
                        background: #fff;
                        text-align: center;
                        padding: 30px 25px;
                        border-radius: 20px;
                        border: 5px solid rgba(0, 0, 0, 0.07);
                        margin-bottom: 30px;
                        transition: all 0.5s ease;
                    }

                    .item:hover {
                        background: #0a3d62; /* Navy blue */
                        color: #fff;
                        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                    }

                    .item .icon {
                        font-size: 40px;
                        margin-bottom: 25px;
                        color: #ffffff; /* Navy blue */
                        width: 90px;
                        height: 90px;
                        line-height: 90px;
                        border-radius: 50%;
                    }

                    /* Feature box color variations */
                    .item .feature_box_col_one { background: lightslategrey; } /* Light blue */
                    .item .feature_box_col_two { background: lightslategrey; } /* Steel blue */
                    .item .feature_box_col_three { background: lightslategrey; } /* Blue */
                    .item .feature_box_col_four { background: lightslategrey; } /* Darker blue */
                    .item .feature_box_col_five { background: lightslategrey; } /* Navy blue */
                    .item .feature_box_col_six { background: lightslategrey } /* Deep navy */

                    /* Responsive adjustments */
                    @media (max-width: 992px) {
                        .section-head h4 {
                            font-size: 28px;
                        }
                        .item {
                            padding: 25px 20px;
                        }
                        .item .icon {
                            font-size: 35px;
                            width: 70px;
                            height: 70px;
                            line-height: 70px;
                        }
                    }

                    @media (max-width: 768px) {
                        .section-head h4 {
                            font-size: 24px;
                        }
                        .item {
                            padding: 20px 15px;
                            margin-bottom: 20px;
                        }
                        .item .icon {
                            font-size: 30px;
                            width: 60px;
                            height: 60px;
                            line-height: 60px;
                        }
                    }

                    @media (max-width: 576px) {
                        .section-head h4 {
                            font-size: 20px;
                        }
                        .section-head p {
                            font-size: 14px;
                        }
                        .item h6 {
                            font-size: 16px;
                        }
                        .item p {
                            font-size: 14px;
                        }
                        .item .icon {
                            font-size: 28px;
                            width: 50px;
                            height: 50px;
                            line-height: 50px;
                        }
                    }

                </style>
            </section>

        </section>


        <section id="process_sec" class="text-center pos-r">
            <h2 class="h2 section-title text-center ">Our Process</h2>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10 ml-auto mr-auto">
                        <div class="section-title">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="svg-container">
                        <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet"><desc>Created with Snap</desc><defs></defs><path d="M62.9 14.9c-25-7.74-56.6 4.8-60.4 24.3-3.73 19.6 21.6 35 39.6 37.6 42.8 6.2 72.9-53.4 116-58.9 65-18.2 191 101 215 28.8 5-16.7-7-49.1-34-44-34 11.5-31 46.5-14 69.3 9.38 12.6 24.2 20.6 39.8 22.9 91.4 9.05 102-98.9 176-86.7 18.8 3.81 33 17.3 36.7 34.6 2.01 10.2.124 21.1-5.18 30.1" id="squiggle" fill="none" stroke="rgba(0,0,0,0.1)" strokeMiterLimit="10" strokeDashOffset="180" style="stroke-width: 1; stroke-dasharray: 5, 10; stroke-dashoffset: 10;"></path><g transform="matrix(0.2956,-0.9553,0.9553,0.2956,43.2367,24.8965)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"><polyline points="0, 30, 15, 0, 30, 30" id="plane" fill="rgba(0,0,0,0.05)" style=""></polyline></g></svg>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="work-process">
                            <div class="box-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="fa fa-search"></i></span></div>
                                <div class="step-num">01</div>
                            </div>
                            <div class="step-desc">
                                <h4>Thorough Assessment</h4>
                                <p class="mb-0">We begin with comprehensive evaluations, including on-the-spot assessment, Non Destructive Testing (NDT), carbonation testing, and chloride analysis. This in-depth approach allows us to identify the root causes of concrete deterioration, not just the symptoms.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="work-process">
                            <div class="box-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="fa fa-cogs"></i></span></div>
                                <div class="step-num">02</div>
                            </div>
                            <div class="step-desc">
                                <h4>Engineered Solutions</h4>
                                <p class="mb-0">Our experts design tailored repair strategies, adhering to the 11 principles of EN 1504. This ensures optimal structural integrity and longevity, giving your structures a new lease on life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="work-process">
                            <div class="box-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="fa fa-wrench"></i></span></div>
                                <div class="step-num">03</div>
                            </div>
                            <div class="step-desc">
                                <h4>Precision Execution</h4>
                                <p class="mb-0">From meticulous surface preparations to the application of advanced repair mortars and protective coatings, we ensure excellence at every step. Our attention to detail sets us apart.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="work-process">
                            <div class="box-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="fa fa-check-circle"></i></span></div>
                                <div class="step-num">04</div>
                            </div>
                            <div class="step-desc">
                                <h4>Quality Control</h4>
                                <p class="mb-0">We implement rigorous quality assurance procedures throughout the project. This unwavering commitment to quality ensures durable and effective repairs that stand the test of time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 md-mt-5">
                        <div class="work-process">
                            <div class="box-loader">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="fa fa-shield"></i></span></div>
                                <div class="step-num">05</div>
                            </div>
                            <div class="step-desc">
                                <h4>Long-term Protection</h4>
                                <p class="mb-0">We don't just fix visible damage; we provide comprehensive solutions to prevent future deterioration and extend your structure's lifespan. Our goal is to give you peace of mind for years to come.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <style>

                #process_sec{
                    margin-top: -200px;
                }
                h2,h4 {
                    font-family: 'Dosis', sans-serif;
                    font-style: normal;
                    margin-bottom: 10px;
                    font-weight: 500;
                    color: #1c1d3e;
                }
                .pos-r {
                    position: relative;
                }
                section{padding: 80px 0;}
                .section-title{margin-bottom:50px; position: relative;}
                .section-title p{font-size: 16px;}
                .title-effect {width: 50px; height: 50px; top: 0; position: absolute; left: 0; opacity: 0.5; animation: rotation 12.8s steps(1) 0s infinite;}
                .text-center .title-effect{left: 50%; margin-left: -25px;}
                .text-center .section-title h6{padding: 15px 0;}

                .title-effect .bar {background: #2575fc;}
                .title-effect .bar-top {width: 100%; height: 7px; position: absolute; top: 0; left: 0; transform-origin: left top; transform: scale(0, 1); animation: bar-top 3.2s linear 0s infinite;}
                .title-effect .bar-right {width: 7px; height: 100%; position: absolute; top: 0; right: 0; transform-origin: left top; transform: scale(1, 0); animation: bar-right 3.2s linear 0s infinite;}
                .title-effect .bar-bottom {width: 100%; height: 7px; position: absolute; right: 0; bottom: 0; transform-origin: right top; transform: scale(0, 1); animation: bar-bottom 3.2s linear 0s infinite;}
                .title-effect .bar-left {width: 7px; height: 100%; position: absolute; left: 0; bottom: 0; transform-origin: left bottom; transform: scale(1, 0); animation: bar-left 3.2s linear 0s infinite;}

                .title {position: relative; color: #1c1d3e; margin-bottom: 0;}
                .section-title h2{margin-bottom: 15px;}

                /* ------------------------
                    How It Work
                ------------------------*/
                .work-process{position: relative;}
                .step-num {background: #fff; border-radius: 50%; box-shadow: 0 12px 20px 0 rgba(117, 178, 240, 0.4); color: #005bea; display: inline-block; font-size: 18px; font-weight: 600; height: 50px; right: 0; line-height: 55px; position: absolute; text-align: center; top: 0; width: 50px;}
                .theme-bg .work-process h4, .theme-bg .work-process p{color: #ffffff;}
                .step-icon {background: #ffffff; width:140px; height:140px; position: relative; border: 3px solid #fafaff; border-radius: 50%; line-height: 140px; font-size: 40px; text-align: center; color: #1c1d3e;}
                .step-icon span {position: relative;}
                .step-icon span::after, .step-icon span::before {border-radius: 50%; content: ""; height: 40px; position: absolute; width: 40px; z-index: -1;}
                .step-icon span::after {background: #cdf3f6; height: 25px; left: -10px; top: 5px; width: 25px;}
                .step-icon span::before {background: #d4f8e6; bottom: 0; right: -10px;}
                .dark-bg .step-icon{color: rgba(255,255,255,0.9); background: none;}
                .dark-bg .step-desc h4{color: #2575fc;}
                .dark-bg .step-icon{border-color: rgba(255,255,255,0.1);}
                .dark-bg .step-desc p{color: rgba(255,255,255,0.7);}
                .step-num-box{position: relative; display: inline-block; margin-bottom: 20px;}
                .work-process .box-loader{position: absolute; top: 30%; right: -15%; left: inherit;}
                .work-process.style-2 {padding: 0; display: flex; align-items: center;}
                .work-process.style-2:before{display: none;}
                .work-process.style-2 .step-num-box {margin-bottom: 0; margin-right: 30px;}
                .work-process.style-3 {padding: 70px 30px 0;}
                .work-process.style-3 .step-num {background: none; box-shadow: none; color: rgba(255, 255, 255, 0.1); font-size: 120px; height: auto; left: 50%; line-height: 120px; margin-bottom: 0; position: absolute; top: 0; transform: translateX(-50%); width: auto;}
                #svg-container {position: absolute; width: 100%; left: 52%;  z-index: -1; transform: translateX(-50%); width: 75%;}
                #svgC {margin: 0 auto; width: 100%;}


                /* ------------------------
                    box-loader
                ------------------------*/
                .box-loader {border-radius: 100%; margin: 0 auto; position: absolute; top: 15px; left: 15px;}
                .box-loader span{display: inline-block; width: 10px; height: 10px; border-radius: 100%; background: #2575fc; margin: 0 5px; opacity: 0;}
                .box-loader span:nth-child(1){animation: opacitychange 1s ease-in-out infinite;}
                .box-loader span:nth-child(2){animation: opacitychange 1s ease-in-out 0.33s infinite;}
                .box-loader span:nth-child(3){animation: opacitychange 1s ease-in-out 0.66s infinite;}


                /*--rotation--*/

                @keyframes rotation {
                    0% {
                        transform: rotate(0deg);
                    }
                    25% {
                        transform: rotate(90deg);
                    }
                    50% {
                        transform: rotate(180deg);
                    }
                    75% {
                        transform: rotate(270deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                }
                @keyframes bar-top {
                    0% {
                        transform: scale(0, 1);
                    }
                    12.5% {
                        transform: scale(1, 1);
                    }
                    87.5% {
                        transform: scale(1, 1);
                    }
                    100% {
                        transform: scale(0, 1);
                    }
                }
                @keyframes bar-right {
                    0% {
                        transform: scale(1, 0);
                    }
                    12.5% {
                        transform: scale(1, 0);
                    }
                    25% {
                        transform: scale(1, 1);
                    }
                    75% {
                        transform: scale(1, 1);
                    }
                    87.5% {
                        transform: scale(1, 0);
                    }
                    100% {
                        transform: scale(1, 0);
                    }
                }
                @keyframes bar-bottom {
                    0% {
                        transform: scale(0, 1);
                    }
                    25% {
                        transform: scale(0, 1);
                    }
                    37.5% {
                        transform: scale(1, 1);
                    }
                    62.5% {
                        transform: scale(1, 1);
                    }
                    75% {
                        transform: scale(0, 1);
                    }
                    100% {
                        transform: scale(0, 1);
                    }
                }
                @keyframes bar-left {
                    0% {
                        transform: scale(1, 0);
                    }
                    37.5% {
                        transform: scale(1, 0);
                    }
                    50% {
                        transform: scale(1, 1);
                    }
                    62.5% {
                        transform: scale(1, 0);
                    }
                    100% {
                        transform: scale(1, 0);
                    }
                }

                /*--opacitychange--*/

                @keyframes opacitychange{
                    0%, 100%{
                        opacity: 0;
                    }

                    60%{
                        opacity: 1;
                    }
                }

                /* responsive */
                @media (max-width: 1200px){
                    #svg-container { width: 85%; }
                }
                @media (max-width: 992px){
                    .md-mt-5 { margin-top: 50px !important; }
                    /*Step*/
                    .work-process .box-loader{display: none;}
                    .step-desc p {max-width: 300px;  margin: 0 auto;}
                    #svg-container {width: 100%; transform: rotate(90deg); left: 0; top: 50%;}
                }
            </style>

            <script>
                // Pen JS Starts Here
                jQuery(document).ready(function(){

                    // SVG
                    var snapC = Snap("#svgC");

                    // SVG C - "Squiggly" Path
                    var myPathC = snapC.path("M62.9 14.9c-25-7.74-56.6 4.8-60.4 24.3-3.73 19.6 21.6 35 39.6 37.6 42.8 6.2 72.9-53.4 116-58.9 65-18.2 191 101 215 28.8 5-16.7-7-49.1-34-44-34 11.5-31 46.5-14 69.3 9.38 12.6 24.2 20.6 39.8 22.9 91.4 9.05 102-98.9 176-86.7 18.8 3.81 33 17.3 36.7 34.6 2.01 10.2.124 21.1-5.18 30.1").attr({
                        id: "squiggle",
                        fill: "none",
                        strokeWidth: "1",
                        stroke: "rgba(0,0,0,0.1)",
                        strokeMiterLimit: "10",
                        strokeDasharray: "5 10",
                        strokeDashOffset: "180"
                    });

                    // SVG C - Triangle (As Polyline)
                    var Triangle = snapC.polyline("0, 30, 15, 0, 30, 30");
                    Triangle.attr({
                        id: "plane",
                        fill: "rgba(0,0,0,0.050)"
                    });

                    initTriangle();

                    // Initialize Triangle on Path
                    function initTriangle(){
                        var triangleGroup = snapC.g( Triangle ); // Group polyline
                        movePoint = myPathC.getPointAtLength(length);
                        triangleGroup.transform( 't' + parseInt(movePoint.x - 15) + ',' + parseInt( movePoint.y - 15) + 'r' + (movePoint.alpha - 90));
                    }

                    // SVG C - Draw Path
                    var lenC = myPathC.getTotalLength();

                    // SVG C - Animate Path
                    function animateSVG() {

                        myPathC.attr({
                            stroke: 'rgba(0,0,0,0.1)',
                            strokeWidth: 1,
                            fill: 'none',
                            // Draw Path
                            "stroke-dasharray": "5 10",
                            "stroke-dashoffset": "180"
                        }).animate({"stroke-dashoffset": 10}, 2500,mina.easeinout);

                        var triangleGroup = snapC.g( Triangle ); // Group polyline

                        setTimeout( function() {
                            Snap.animate(0, lenC, function( value ) {

                                movePoint = myPathC.getPointAtLength( value );

                                triangleGroup.transform( 't' + parseInt(movePoint.x - 15) + ',' + parseInt( movePoint.y - 15) + 'r' + (movePoint.alpha - 90));

                            }, 2500,mina.easeinout, function(){
                            });
                        });

                    }


                    // Animate Button
                    function kapow(){
                        $(window).on('scroll', function (){
                            // Run SVG
                            animateSVG();
                        });
                    }

                    kapow();

                });


            </script>
        </section>


        <section id="faq_id" style="background: lightslategrey" class="">

            <h2 class="h2 section-title text-center">FAQ</h2>

            <div class="container wrapper">

                <div class="containers">
                    <div class="question">
                        What services does Obidiya Sapphire Enterprises offer?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We specialize in comprehensive concrete solutions, including:
                            <ul>
                                <li>Admixtures to improve the properties of concrete</li>
                                <li>Concrete restoration and repair</li>
                                <li>Waterproofing solutions</li>
                                <li>Sealants</li>
                                <li>Protective coatings</li>
                                <li>Expansion joint installations</li>
                                <li>Tiling systems</li>
                                <li>Industrial floorings (epoxy & hardtops)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        What types of projects does Obidiya Sapphire handle?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Our expertise spans both new construction and existing buildings. We've successfully completed projects on:
                            <ul>
                                <li>Factories/warehouse complexes</li>
                                <li>Bridges</li>
                                <li>High-rise residential complexes</li>
                                <li>Various infrastructure projects</li>
                            </ul>
                            No matter the scale or complexity, we're equipped to deliver exceptional results.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        What sets Obidiya Sapphire apart from other concrete restoration companies?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Our key differentiators include:
                            <ul>
                                <li>Industry leadership in concrete technology</li>
                                <li>Comprehensive end-to-end solutions</li>
                                <li>Quality assurance with certified professionals</li>
                                <li>Innovative techniques and methods</li>
                                <li>Tailored approaches for each project</li>
                            </ul>
                            We don't just repair; we innovate, enhance, and protect.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        What standards does Obidiya Sapphire follow for concrete repair?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We adhere to the latest European Norm (EN 1504) standards for concrete repair and protection, following the 11 principles outlined in this standard. This ensures that our work meets and exceeds international quality benchmarks.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        What materials does Obidiya Sapphire use?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We utilize best-in-class products from manufacturers such as MBCC – Sika, and Weber – Saint Gobain. These advanced product ranges, combined with our expertise, ensure the highest quality and longevity in our projects.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        How does Obidiya Sapphire assess concrete damage?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Our assessment process is thorough and includes:
                            <ul>
                                <li>Non Destructive Testing (NDT)</li>
                                <li>Comprehensive visual and physical evaluations</li>
                                <li>Carbonation testing</li>
                                <li>Chloride analysis</li>
                            </ul>
                            These methods help us identify not just the visible damage, but the underlying causes of concrete deterioration, allowing for more effective and lasting repairs.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        What innovative techniques does Obidiya Sapphire employ?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We use advanced methods such as:
                            <ul>
                                <li>Crack injection for deep structural repairs</li>
                                <li>Fiber-reinforced polymer (FRP) strengthening for enhanced durability</li>
                                <li>Liquid applied waterproofing membranes</li>
                            </ul>
                            These techniques allow us to address complex structural issues with precision and efficiency.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        Can Obidiya Sapphire handle dynamic projects?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Absolutely. We have extensive experience providing customized solutions for challenges in concrete strengthening and repairs, concrete waterproofing, and industrial floorings. Our expertise in these demanding environments ensures that we can tackle even the most challenging projects.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        What is the process for a typical Obidiya Sapphire project?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Our process includes:
                            <ul>
                                <li>Thorough assessment of the structure</li>
                                <li>Custom-engineered solutions design</li>
                                <li>Precision execution of repairs</li>
                                <li>Rigorous quality control throughout</li>
                                <li>Implementation of long-term protection measures</li>
                            </ul>
                            This comprehensive approach ensures that we address both immediate issues and long-term structural health of your structures.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        Does Obidiya Sapphire offer solutions for preventing future concrete deterioration?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes, prevention is a key focus of our work. We don't just fix visible damage; we implement comprehensive solutions that prevent future deterioration and significantly extend the structure's lifespan. This proactive approach saves our clients time and resources in the long run.
                        </div>
                    </div>
                </div>

                <div class="containers">
                    <div class="question">
                        How can I get in touch with Obidiya Sapphire for my project?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            You can contact us through our website to discuss your project needs and schedule a comprehensive assessment. Our team of experts is ready to provide you with tailored solutions that address your specific structural challenges.
                        </div>
                    </div>
                </div>

            </div>


            <style>

                .wrapper {
                    width: 60%;
                }

                h1 {
                    margin-bottom: 20px;
                }

                .containers {
                    background-color: white;
                    color: black;
                    border-radius: 20px;
                    box-shadow: 0 5px 10px 0 rgb(0,0,0,0.25);
                    margin: 20px 0;
                }

                .question {
                    font-size: 1.2rem;
                    font-weight: 600;
                    padding: 20px 80px 20px 20px;
                    position: relative;
                    display: flex;
                    align-items: center;
                    cursor: pointer;
                }

                .question::after {
                    content: "\002B";
                    font-size: 2.2rem;
                    position: absolute;
                    right: 20px;
                    transition: 0.2s;
                }

                .question.active::after {
                    transform: rotate(45deg);
                }

                .answercont {
                    max-height: 0;
                    overflow: hidden;
                    transition: 0.3s;
                }

                .answer {
                    padding: 0 20px 20px;
                    line-height: 1.5rem;
                }

                .question.active + .answercont {
                }

                @media screen and (max-width: 790px){
                    html {
                        font-size: 14px;
                    }
                    .wrapper {
                        width: 80%;
                    }
                }
            </style>

            <script>
                let question = document.querySelectorAll(".question");

                question.forEach(question => {
                    question.addEventListener("click", event => {
                        const active = document.querySelector(".question.active");
                        if(active && active !== question ) {
                            active.classList.toggle("active");
                            active.nextElementSibling.style.maxHeight = 0;
                        }
                        question.classList.toggle("active");
                        const answer = question.nextElementSibling;
                        if(question.classList.contains("active")){
                            answer.style.maxHeight = answer.scrollHeight + "px";
                        } else {
                            answer.style.maxHeight = 0;
                        }
                    })
                })

            </script>
        </section>

        <section class="cta" id="contact">
            <div class="container">

                <div class="cta-content">
                    <!--            <p class="section-subtitle">Call To Action</p>-->

                    <!--            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>-->

                    <p class="section-text">
                        Don't let concrete deterioration compromise your structure's safety and longevity. Contact Obidiya Sapphire Enterprises today for a comprehensive assessment and tailored solution. Let us show you how we can transform your concrete challenges into lasting structural triumphs.

                    </p>
                </div>

                <a href="{{route('contact')}}" class="btn btn-secondary">Contact Us !</a>

            </div>
        </section>

    </article>
</main>

@endsection

