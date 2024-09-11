@extends('frontend.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


@section('content')
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="product Details"><span>{{$product->title}}</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>{{$product->title}}</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
			<!-- End Intro Section -->
			<!-- End Intro Section -->
			<div id="product-detail-section" class="padding pb-60 pt-xs-60">
				<div class="container">
					<div class="row ">
            <section class="product-container">
        <!-- left side -->
        <div class="img-card">
            <img src="{{asset($product->image)}}" alt="" id="featured-image">
            <!-- small img -->
            <div class="small-Card">
                <img src="{{asset($product->image)}}" alt="" class="small-Img">
                <img src="{{asset($product->image2)}}" alt="" class="small-Img">
                <img src="{{asset($product->image3)}}" alt="" class="small-Img">
                <img src="{{asset($product->image)}}" alt="" class="small-Img">
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
                <input type="number" value="1" min="1">
                <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=+2347043552242&text=Hello%2C%20i%20am%20from%20obidiya%20sapphire%20enterprise%20website%2C%20i%20need%20your%20service%2C.">Make Order</a>
            </div>

            <div>
                <!-- <p>Delivery:</p> -->
                <!-- <p>Free standard shipping on orders over Within Ibadan and Lagos</p> -->
                
            </div>
        </div>
    </section>
				  </div>
			  </div>
      </div>


            <style>


.product-container {
  display: flex;
  justify-content: start;
  align-items: start;
  gap: 40px;
}

/* .img-card{
    width: 40%;
} */

.img-card img {
  width: 100%;
  flex-shrink: 0;
  border-radius: 4px;
  height: 520px;
  object-fit: cover;
}

.small-Card {
  display: flex;
  justify-content: start;
  align-items: center;
  margin-top: 15px;
  gap: 12px;
}

.small-Card img {
  width: 104px;
  height: 104px;
  border-radius: 4px;
  cursor: pointer;
}

.small-Card img:active {
  border: 1px solid #17696a;
}

.sm-card {
  border: 2px solid darkred;
}

.product-info{
  width: 60%;
}
.product-info h3 {
  font-size: 32px;
  font-family: Lato;
  font-weight: 600;
  line-height: 130%;
}

.product-info h5 {
  font-size: 24px;
  font-family: Lato;
  font-weight: 500;
  line-height: 130%;
  color: #ff4242;
  margin: 6px 0;
}

.product-info del {
  color: #a9a9a9;
}

.product-info p {
  color: #424551;
  margin: 15px 0;
  width: 70%;
}

.sizes p {
  font-size: 22px;
  color: black;
}

.size-option {
  width: 200px;
  height: 30px;
  margin-bottom: 15px;
  padding: 5px;
}

.quantity input {
  width: 51px;
  height: 33px;
  margin-bottom: 15px;
  padding: 6px;
}

button {
  background: #17696a;
  border-radius: 4px;
  padding: 10px 37px;
  border: none;
  color: white;
  font-weight: 600;
}

button:hover {
  background: #ff4242;
  transition: ease-in 0.4s;
}

.delivery {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 70%;
  color: #787a80;
  font-size: 12px;
  font-family: Lato;
  line-height: 150%;
  letter-spacing: 1px;
}

hr {
  color: #787a80;
  width: 58%;
  opacity: 0.67;
}

.pagination {
    color: #787a80;
    margin: 15px 0;
    cursor: pointer;
}

@media screen and (max-width: 576px) {
  .product-container{
    flex-direction: column;
  }
  .small-Card img{
    width: 80px;
  }
  .product-info{
    width: 100%;
  }
  
  .product-info p{
    width: 100%;
  }

  .delivery{
    width: 100%;
  }

  hr{
    width: 100%;
  }
}

            </style>


<script>

  let featuedImg = document.getElementById('featured-image');
let smallImgs = document.getElementsByClassName('small-Img');

smallImgs[0].addEventListener('click', () => {
    featuedImg.src = smallImgs[0].src;
    smallImgs[0].classList.add('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[1].addEventListener('click', () => {
    featuedImg.src = smallImgs[1].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.add('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[2].addEventListener('click', () => {
    featuedImg.src = smallImgs[2].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.add('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[3].addEventListener('click', () => {
    featuedImg.src = smallImgs[3].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.add('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[4].addEventListener('click', () => {
    featuedImg.src = smallImgs[4].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.add('sm-card')
})


</script>
			
@endsection

