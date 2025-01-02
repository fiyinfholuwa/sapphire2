@extends('frontend_new.app')

@section('content')
    <!-- Intro Section -->
    <div style="padding-top: 200px;" class="productlist padding_all">

        <div style="background-color: #ffffff; padding-top: 100px; padding-bottom: 100px;" id="product-detail-section" class="padding pb-60 pt-xs-60">
            <div class="container">
                <h3>Your Cart</h3>

                @if($cartItems->isEmpty())
                    <div class="empty-cart" style="text-align: center; padding: 50px 0;">
                        <p style="font-size: 1.5em; color: #555;">Your cart is empty. Start adding items to your cart!</p>
                        <a class="btn btn-danger" href="{{ route('product') }}" style="text-decoration: none; padding: 10px 20px; color: white; border-radius: 5px;">Shop Now</a>
                    </div>
                @else
                    <ul class="items">
                        @foreach($cartItems as $item)
                            <li class="grid_4 item">
                                <form  action="{{ route('cart.delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button  type="submit" class="btn-remove">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                                <div class="preview">
                                    <img class="image_img" src="{{ $item->product->image }}" alt="{{ $item->product->title }}" />
                                </div>
                                <div class="details">
                                    <h3>{{ $item->product->title }}</h3>
                                    <p>Price: #{{ ($item->product->price -  $item->product->price * $item->product->discount * 0.01 ) * $item->quantity }}</p>
                                </div>
                                <div style="margin-bottom: 70px;" class="picker">
                                    <button class="btn-quantity minus" data-id="{{ $item->id }}" data-action="decrease">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <span class="current_quantity">{{ $item->quantity }}</span>
                                    <button class="btn-quantity plus" data-id="{{ $item->id }}" data-action="increase">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <div class="summary">
                        <h4>Grand Total: <span class="grand-total">#{{ number_format($grandTotal, 2) }}</span></h4>
                        <form style="padding-top: 70px;" action="{{ route('cart.checkout') }}" method="POST">
                            @csrf
                            <h3>Delivery Address</h3>
                            <textarea class="form-control" name="address" required></textarea>
                            <button type="submit" class="btn-checkout">Checkout</button>
                        </form>
                    </div>

                @endif
            </div>
        </div>
    </div>

    <style>
        .empty-cart p {
            margin-bottom: 20px;
        }
        .empty-cart a {
            font-size: 1.2em;
        }
    </style>

    <style>
        .padding_all {
            background-color: #0c4c91 !important;
        }
        * {
            box-sizing: border-box;
        }
        .image_img {
            width: 100%;
            height: auto;
            vertical-align: sub;
        }

        .left {
            float: left;
        }
        .right {
            float: right;
        }
        .clr {
            clr: both;
        }

        .align-left {
            text-align: left;
        }
        .align-right {
            text-align: right;
        }
        .align-center {
            text-align: center;
        }


        .icon {
            background: url(https://s.cdpn.io/6035/glyphicons-halflings-white.png)
            no-repeat;
            display: inline-block;
            display: inline-block;
            width: 14px;
            height: 14px;
            margin-top: 1px;
            line-height: 14px;
            vertical-align: text-top;
            background-position: 14px 14px;
        }

        .icon-plus {
            background-position: -408px -96px;
        }
        .icon-minus {
            background-position: -433px -96px;
        }
        .icon-remove {
            background-position: -312px 0;
        }

        .btn-quantity {
            transition: background-color 0.3s ease;
            font-size: 0.8em;
            box-shadow: 0 0 5px #0003;
            border-radius: 20px;
            padding: 10px 15px;
            &.plus {
                color: #478298;
                &:hover {
                    color: darken(green, 10%);
                }
            }
            &.minus {
                color: #478298;
                &:hover {
                    color: darken(red, 10%);
                }
            }
        }

        .btn-remove {
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 10;
            text-align: center;
            display: inline-block;
            color: #e94343;
            font-size: 1.4em;
            &:hover {
                color: darken(#1d1e22, 10%);
            }
            .icon {
                margin-top: 2px;
            }
        }

        .btn-checkout {
            color: #fff;
            text-decoration: none;
            margin: 20px 0 0;
            padding: 10px 0;
            border-radius: 5px;
            text-align: center;
            display: block;
            line-height: 25px;
            box-shadow: inset 0 -2px 0 rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease;
            background: #478298;
            width: 40%;
            font-size: 2em;
            &:hover {
                background: darken(#2ecc71, 10%);
            }
        }

        .items {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .item {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative;
            display: flex;
            .inner_container {
                width: 40%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .image_img {
                border-radius: 10px 0 0 10px;
            }
            .preview {
                width: 20%;
                ul {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    position: relative;
                    height: 100%;
                }
                li {
                    position: absolute;
                    top: 0;
                    opacity: 0;
                    &.active {
                        opacity: 1;
                    }
                }
            }
            .details {
                padding: 0px 30px;
                position: relative;
                overflow: hidden;
                width: 40%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;

                h3 {
                    margin: 0;
                    position: relative;
                    z-index: 1;
                    font-size: 2.6em;
                }
                p {
                    font-size: 1em;
                }
                input[type="number"] {
                    width: 50px;
                    height: 30px;
                    padding: 2px;
                    outline: none;
                    border-radius: 5px;
                    border: none;
                    border: 1px solid #ccc;
                }
            }
        }

        .summary {
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-bottom: 80px;
            .meta-data {
                border-right: 1px solid #eee;
                padding-right: 10%;
            }
            .total {
                font-size: 2em;
                text-align: center;
                line-height: 65px;
            }
        }

        .picker {
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
        }
        .quantity-text {
            margin: 0 20px;
            font-size: 1.2em;
        }
        .sub-total,
        .taxes {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .btn-summary {
            display: flex;
            justify-content: space-around;
        }
        .btn-reverse {
            background-color: #fff;
            color: #478298;
            border: 1px solid #478298;
        }
        .delivery-payment {
            display: flex;
            justify-content: space-between;
            margin-top: 100px;
        }
        .delivery-address,
        .payment-details {
            width: 49%;
            border-radius: 10px;
            box-shadow: 0 0 5px #00000030;
            background-color: #fff;
            padding: 0px 30px 30px 30px;
            margin-bottom: 20px;
        }
        h3 {
            font-size: 2em;
        }
        .coupon {
            display: flex;
            border-radius: 10px;
            box-shadow: 0 0 5px #00000030;
            background-color: #fff;
            padding: 5px 30px;
            align-items: center;
            margin-bottom: 20px;
            & h3 {
                margin-right: 30px;
                font-size: 2em;
            }
        }
        input {
            border-radius: 10px;
            height: 40px;
        }

        h1 {
            font-size: 4em;
        }
        .summary-content {
            display: flex;
            justify-content: space-around;
            align-items: flex-end;
        }


        @media only screen and (max-width: 900px) {
            h1 {
                font-size: 3em;
            }
            .item .details h3 {
                font-size: 1.6em;
            }
            .quantity-text {
                font-size: 1em;
            }
            .btn-remove {
                right: 15px;
                font-size: 1.4em;
            }
            .item .details p {
                font-size: 0.8em;
            }
            .picker {
                margin-right: 10px;
            }
            .btn-quantity {
                font-size: 0.6em;
            }
        }

        @media only screen and (max-width: 768px) {

            .item {
                flex-direction: column;
                margin: auto;
                margin-bottom: 30px;
            }
            .item .preview {
                width: 100%;
            }
            .item .details {
                padding: 15px 30px;
                width: 100%;
            }
            .item img {
                border-radius: 10px 10px 0 0;
            }
            .item .details h3 {
                font-size: 2.6em;
                text-align: center;
            }
            h1 {
                font-size: 4em;
            }

            .item .details p {
                font-size: 1em;
                text-align: center;
            }
            .item .inner_container {
                width: 100%;
                margin-bottom: 20px;
            }
            .grid_12.summary {
                position: fixed;
                bottom: 0;
                left: 0;
                z-index: 99999;
                width: 100%;
                margin-bottom: 0;
            }

            .sub-total,
            .taxes {
                font-size: 1em;
            }
            .summary .total {
                font-size: 1.6em;
                line-height: 1em;
                margin:10px 0;
            }
            .delivery-payment {
                margin-top: 60px;
            }
            .coupon {
                flex-direction: column;
                padding: 30px 0px;
            }
            .coupon h3 {
                margin: 0;
            }
            .btn-checkout {
                font-size: 1.6em;
            }
            .logo {
                width: 50%;
            }
        }

        @media only screen and (max-width: 480px) {
            .btn-checkout {
                font-size: 1.2em;
            }
            .container {
                padding: 0 30px;
            }
            .btn-remove {
                font-size: 1.2em;
            }

        }


    </style>

    <script>
        document.querySelectorAll('.btn-quantity').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
                const action = this.dataset.action;

                let quantityElement = this.parentElement.querySelector('.current_quantity');
                let quantity = parseInt(quantityElement.innerText);
                quantity = action === 'increase' ? quantity + 1 : Math.max(1, quantity - 1);

                fetch("{{ route('cart.update') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ id, quantity })
                }).then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            quantityElement.innerText = quantity;

                            // Update the price for the item
                            const priceElement = this.closest('li').querySelector('.details p');
                            const price = data.newPrice; // The new price should be returned from the backend
                            priceElement.innerText = `Price: #${price}`;

                            // Update the grand total
                            updateGrandTotal();
                        }
                    });
            });
        });

        function updateGrandTotal() {
            let grandTotal = 0;

            // Iterate through each cart item to calculate the grand total
            document.querySelectorAll('.item').forEach(item => {
                const price = parseFloat(item.querySelector('.details p').innerText.replace('Price: #', '').trim());
                grandTotal += price;
            });

            // Update the grand total display (you can place this element anywhere you want)
            document.querySelector('.grand-total').innerText = `#${grandTotal.toFixed(2)}`;
        }

    </script>

@endsection
