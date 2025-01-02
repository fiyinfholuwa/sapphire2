@extends('frontend_new.app')

@section('content')
<!-- Intro Section -->
<div style="padding-top: 200px;" class="productlist padding_all">
    <div style="background-color: #ffffff; padding-top: 100px; padding-bottom: 100px;" id="product-detail-section" class="padding pb-60 pt-xs-60">
        <div class="container-fluid">
            <div class="row">
                <section class="product-container">
                    <!-- left side -->
                    <div class="img-card">
                        <img src="{{asset($product->image)}}" alt="Product Image" id="featured-image">
                        <!-- small img -->
                        <div class="small-Card">
                            <img src="{{asset($product->image)}}" alt="Small Image 1" class="small-Img">
                            <img src="{{asset($product->image2)}}" alt="Small Image 2" class="small-Img">
                            <img src="{{asset($product->image3)}}" alt="Small Image 3" class="small-Img">
                            <img src="{{asset($product->image)}}" alt="Small Image 4" class="small-Img">
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="product-info">
                        <h3>{{$product->title}}</h3>
                        <h5>Price: #{{$product->price -  $product->price * $product->discount * 0.01 }} <del>{{$product->price}}</del></h5>
                        <p>{{$product->content}}</p>

                        <div class="sizes">
                            <p>Quantity:</p>
                        </div>

                        <div class="quantity">
                            @auth

                            <form method="post" action="{{route('add.cart')}}">
                                @csrf
                                <input name="quantity" type="number" value="1" min="1">
                                <input name="product_id" type="hidden" value="{{$product->id}}">
                                @if($added)
                                    <button type="button" class="btn btn-primary">Already Added to Cart</button>

                                @else
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                @endif
                            </form>
                            @else
                                <input type="number" value="1" min="1">
                                <a class="btn btn-primary" href="{{route('login')}}">Add to Cart</a>
                            @endauth
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <style>
        .padding_all {
            background-color: #0c4c91 !important;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .img-card {
            width: 100%;
            max-width: 480px;
            margin: 0 auto;
        }

        .img-card img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-top: -40px;
        }

        .small-Card {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin-top: 70px;
        }

        .small-Card img {
            width: 22%;
            height: auto;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .small-Card img:hover {
            transform: scale(1.05);
        }

        .product-info {
            flex: 1;
            max-width: 600px;
            padding: 10px;
        }

        .product-info h3, .product-info h5 {
            margin: 0;
        }

        .product-info h5 {
            color: #ff4242;
        }

        .product-info del {
            color: gray;
            font-size: 0.9em;
        }

        .product-info p {
            color: #424551;
            margin-top: 10px;
        }

        .sizes p {
            font-size: 1rem;
        }

        .quantity {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .quantity input {
            width: 60px;
            padding: 5px;
            text-align: center;
        }

        .quantity a {
            padding: 10px 20px;
            background-color: #17696a;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .quantity a:hover {
            background-color: #ff4242;
        }

        @media screen and (max-width: 768px) {
            .product-container {
                flex-direction: column;
                align-items: center;
            }

            .product-info {
                width: 100%;
                text-align: center;
            }

            .product-info h3, .product-info h5 {
                text-align: center;
            }

            .quantity {
                justify-content: center;
            }

            .small-Card img {
                width: 80px;
                height: auto;
            }
        }

        @media screen and (max-width: 576px) {
            .quantity a {
                width: 100%;
                text-align: center;
            }

            .product-info p {
                font-size: 0.9rem;
            }
        }
    </style>

    <script>
        const featuredImg = document.getElementById('featured-image');
        const smallImgs = document.querySelectorAll('.small-Img');

        smallImgs.forEach((img, index) => {
            img.addEventListener('click', () => {
                featuredImg.src = img.src;
                smallImgs.forEach(el => el.classList.remove('sm-card'));
                img.classList.add('sm-card');
            });
        });
    </script>
</div>


@endsection
