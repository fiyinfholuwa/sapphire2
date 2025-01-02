@extends('frontend_new.app')

@section('content')
<!-- Intro Section -->


<div style="padding-top: 200px;" class="productlist padding_all">

    <div style="background-color: #ffffff; padding-top: 100px; padding-bottom: 100px;"  class="top_Product row">
        <h3>All Products</h3>
        @if(count($products) > 0)
            @foreach($products as $product)

                <div class="col-lg-4 mt-5">
                    <a href="{{ route('product.detail', $product->slug) }}">
                        <div style="border-radius: 20px; position: relative;" class="product">
                            <h2>{{ $product->title }}</h2>
                            <div class="image">
                                <img alt="Ocean Blue Shirt image" src="{{ asset($product->image) }}" >
                                <div class="price-tag">#{{ $product->price }}</div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
                {{$products->links('frontend_new.paginate')}}

        @else
            <div><h3 class="text-center text-danger">No products Yet</h3></div>
        @endif

    </div>

</div>


    <style>
        .padding_all {
            background-color: #0c4c91 !important;
        }

        .top_Product{
            padding: 10px 50px;
        }
                /*START of Product List*/
        /* Fallback Layout */
        .productlist {
            max-width: 500px;
            margin: 0 auto;
        }
        .product {
            margin: 1rem 0;
        }

        /*Grid Layout Properties*/
        @supports (display: grid) {
            .productlist{
                max-width: 10000px;
                margin: 0;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                grid-gap: 1rem;

            }
            .product {
                margin: 0;
                transition: all 0.3s ease-in-out;
            }
        }

        /*Internal Properties*/
        .productlist {
            font-family: Avenir, Roboto, Helvetica, san-serif;
            font-size: 85%;
        }


        .product {
            box-sizing: border-box;
            background-color:#0c4c91;
            color: #ffffff;
            display: flex;
            flex-flow: column;
            padding-bottom: 40px;
        }


        h2 {
            height: auto;
            width: 100%;
            font-size: 1.7em;
            text-align: center;

            padding-top: 20px;
        }
        a{
            color: grey;
            text-decoration: none;
        }
        .inventory {
            color: #FFFFFF;
            text-align: center;
            margin: 0 0 0rem;
        }
        .cost {
            color:#0c4c91;
            font-weight: bolder;
            font-size: 1.2rem;
            text-align: center;
            margin: 0 0 1rem;
        }
        .image {
            order: -1;
            align-self: center;
        }
        img{
            max-width: 100%;
            height: auto;
            border-radius: 3px 3px 0 0;
            box-sizing:border-box;
        }
        form{
            margin: auto;
            color: white;
            padding-left: 2rem;
            padding-bottom: 0.5rem;
            border: none;
            border-radius: 1rem;
            font-size: 1.2rem;
        }

        input[type=number] {
            transition: all 0.3s ease-in-out;
            padding:5px 15px;
            background-color: #dadada;
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            border: 2px solid #dadada;
            border-radius: 7px;
        }

        input[type=submit] {
            transition: all 0.3s ease-in-out;
            padding:5px 15px;
            background:#dadada;
            border: 2px solid #dadada;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            cursor: pointer;

        }
        input[type=number]:hover {
            outline: none;
            border-color: #9ecaed;
            background-color:#9ecaed;
            box-shadow: 0 0 10px #9ecaed;
        }

        input[type=submit]:hover {
            outline: none;
            color: var(--dark);
            background-color:#9ecaed;
            border-color: #9ecaed;
            box-shadow: 0 0 10px #9ecaed;
        }
        /*END of Product List*/
        .image {
            position: relative;
            display: inline-block;
            width: 100%;
            overflow: hidden;
        }

        .image img {
            width: 100%;
        }

        .price-tag {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
        }


        @media (max-width: 425px ) {
            .top_Product{

                padding: 15px !important;
            }
        }
    </style>

@endsection
