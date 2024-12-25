<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sapphire</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="{{asset('frontend_new/assets/images/logo.png')}}" type="image/svg+xml">

    <!--
      - custom css link
    -->

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend_new/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/snapsvg@0.5.1/dist/snap.svg-min.js"></script>

    <link

        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body id="top">

<!--
  - #HEADER
-->

<header
    class="header"
    data-header
    @if(Route::currentRouteName() === 'about' || Route::currentRouteName() === 'contact' )
        style="background: #0c4c91;"
    @endif
>
    <div class="overlay" data-overlay></div>

    <div class="header-top">
        <div class="container">

            <a href="tel:+2347031954676" class="helpline-box">

                <div class="icon-box">
                    <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="wrapper">
                    <!--            <p class="helpline-title">For Further Inquires :</p>-->
                    <!--            <p class="helpline-number">+01 (123) 4567 90</p>-->
                </div>

            </a>

            <a href="#" class="logo">
                <img style="height: 60px; width: 60px;" src="{{asset('frontend_new/assets/images/logo.png')}}" alt="Tourly logo">
            </a>

            <div class="header-btn-group">

                <!--          <button class="search-btn" aria-label="Search">-->
                <!--            <ion-icon name="search"></ion-icon>-->
                <!--          </button>-->

                <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

            </div>

        </div>
    </div>

    <div class="header-bottom">
        <div class="container">

            <ul class="social-list">

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>

            </ul>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="#" class="logo">
                        <img src="{{asset('frontend_new/assets/images/logo2.png')}}" alt="Tourly logo">
                    </a>

                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="{{route('home')}}" class="navbar-link" data-nav-link>home</a>
                    </li>

                    <li>
                        <a href="{{route('about')}}" class="navbar-link" data-nav-link>about us</a>
                    </li>

                    <li>
                        <a href="{{route('product')}}" class="navbar-link" data-nav-link>Products</a>
                    </li>

{{--                    <li>--}}
{{--                        <a href="blog.html" class="navbar-link" data-nav-link>Blog</a>--}}
{{--                    </li>--}}

                    <!--            <li>-->
                    <!--              <a href="#gallery" class="navbar-link" data-nav-link>Login</a>-->
                    <!--            </li>-->

                    <li>
                        <a href="{{route('contact')}}" class="navbar-link" data-nav-link>contact us</a>
                    </li>

                </ul>

            </nav>

{{--            <a href="{{route('login')}}" class="btn btn-primary">Login</a>--}}

        </div>
    </div>

</header>


		@yield('content')
<!--
  - #FOOTER
-->

<footer class="footer">

    <div class="footer-top">
        <div class="container">

            <div class="footer-brand">

                <a href="#" class="logo">
                    <img src="{{asset('frontend_new/assets/images/logo.png')}}" alt="Tourly logo">
                </a>

                <p class="footer-text">
                    Sapphire, known for its brilliance and durability, is one of the hardest gemstones. It symbolizes wisdom and nobility, making it a prized jewel in both jewelry and technology.
                </p>


            </div>

            <div class="footer-contact">

                <h4 class="contact-title text-white">Contact Us</h4>

                <p class="contact-text text-white">
                    Feel free to contact and reach us !!
                </p>

                <ul>

                    <li class="contact-item">
                        <ion-icon name="call-outline"></ion-icon>

                        <a href="tel:+234 703 195 4676" class="contact-link">+234 703 195 4676</a>
                    </li>

                    <li class="contact-item">
                        <ion-icon name="mail-outline"></ion-icon>

                        <a href="mailto:sapphire@gmil.com" class="contact-link">sapphire@gmil.com</a>
                    </li>

                    <li class="contact-item">
                        <ion-icon name="location-outline"></ion-icon>

                        <address>Adedibu shopping complex, beside Academy Suites, Ososami, Oke Ado, Ibadan, Oyo state, Ibadan, Nigeria.</address>
                    </li>

                </ul>

            </div>

            <div class="footer-form">

                <p class="form-text text-white">
                    Subscribe our newsletter for more update & news!!
                </p>

                <form action="" class="form-wrapper">
                    <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

                    <button type="submit" class="btn btn-secondary">Subscribe</button>
                </form>

            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

            <p class="copyright">
                &copy; 2022 <a href="">SapphireEnterprises.com</a>. All rights reserved
            </p>

            <ul class="footer-bottom-list">

                <li>
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                </li>

                <li>
                    <a href="#" class="footer-bottom-link">Term & Condition</a>
                </li>

                <li>
                    <a href="#" class="footer-bottom-link">FAQ</a>
                </li>

            </ul>

        </div>
    </div>

</footer>





<!--
  - #GO TO TOP
-->

<a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
</a>



<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }
</style>


<!--
  - custom js link
-->
<script src="{{asset('frontend_new/assets/js/script.js')}}"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>


 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'success':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'warning':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'error':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #ff0000, #ff0000)" }
    }).showToast();
    break;
 }
 @endif
</script>

	</body>

<!--  08:21 GMT -->
</html>
