@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/food.css') }}" rel="stylesheet">







<br/><br/><br/>
<div class="store">
<!-- <div class="nstore">
     
    <div >
        <img src='https://cdn.shopify.com/s/files/1/0309/7621/files/slide_1_1810x700_crop_center.png?v=1620302496' alt='imagem' title='imagem' />
        <div class="lin2">
        <h6 class='nor'>Pet food & accessories</h6>
        <h2 class="serv2">MAKE YOUR PETS HAPPY</h2> <br/>
        <div> 
            <button class="btn btn-light">Shop Now </button>
        </div>
         
            </div>
            </div>

            <div >
        <img src='https://cdn.shopify.com/s/files/1/0309/7621/files/slide_2_1810x700_crop_center.png?v=1620302571' alt='imagem' title='imagem' />
        <div class="lin2">
        <h6 class='nors'>Satisfy Your Pet's Palate</h6>
        <h2 class="serve2">BEST PET ACCESSORIES</h2> <br/>
        <div> 
        
            <button class="btn btn-light">Shop Now </button>
        </div>

         
            </div>
            </div>

            <div >
        <img src='https://cdn.shopify.com/s/files/1/0309/7621/files/slide_3_1810x700_crop_top.png?v=1620303005' alt='imagem' title='imagem' />
        <div class="lin2">
        <h6 class='nor'>Get up to 20% off!</h6>
        <h2 class="serv2">EVERYTHING TO WELCOME <br/> YOUR PUPPY HOME!</h2> <br/>
        <div> 
        <br/><br/>
            <button class="btn btn-light btr">Shop Now </button>
        </div>
            </div>
            </div>
</div> -->

<div id="backfood"> 
  <br>
<h2 class="serv1">EVERYTHING TO WELCOME <br/> YOUR PUPPY HOME!</h2>
<h2 class="serv2">And MAKE YOUR PETS HAPPY</h2> <br/>

</div>

<br/><br/><br/>

<div class='icr d-flex'>

<div class='fd'>
<a href='/food'>            
<img src="https://img.icons8.com/ios/100/000000/dog-bowl.png"/>
<h3>Food</h3></a>
</div>


<div class='as'>
<a href='/accessories'>
<img src="https://img.icons8.com/ios-glyphs/100/000000/dog-collar.png"/>
<h3>Accessories</h3>
</a> </div> </div>
<br/><br/><br/>


<div class='reviw d-flex '>

    <div class='ig'>
    <img src="{{ asset('/public/animal/first.jpeg') }}">    </div>

    <div class='drep'>
    <h1><span class="iconify" data-icon="fa-solid:quote-right" style="color: #eb7019;"></span></h1>
    <br/>
    <h4>My dog is obsessed with your food <br/> and is acting like the dog i rescued <br/> 6 years ago. Thanks so much!</h4>
<br/>
    <h6>MOLLY NIELSON</h6>
    </div>

</div>

<br/><br/>


<div class='prd'>
<h2> New Products</h2><br/><br/>



<div class="row">
 
<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/61YkPp+CxkL._AC_SY879_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >Hand Bottled Canun Cats Premium Spanish Dry Food 1 KG.</a></h3>
<div class="price">L.E 124</div>
</div>  </div>  </div>



 
<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/41q2V889ixL._AC_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >Candy Color Pet Dog Beds (Grey).</a></h3>
<div class="price">L.E 470</div>
</div>  </div>  </div>



 
<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/71CueThS3YL._AC_SX679_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >Don Canino Fish Dry Food For Dogs - 15 Kg.</a></h3>
<div class="price">L.E 230</div>
</div>  </div>  </div>
</div>
</div>

</div>
<br/><br/><br/><br/><br/><br/>


<div class='feat'>
<h2>Featured Products</h2>
<br/><br/>

<!-- <div class='d-flex conr' >

<div class="card-group "  id="product"> -->
<div class='row'>

<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/41GdLNKtHGL._AC_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >U-HOOME Airline-Approved Portable Capsule Pet Carrier Backpack.</a></h3>
<div class="price">L.E 500</div>
</div>  </div>  </div>



<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/31pyT7OpbPL._AC_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >Set Dinner Powder Pink.</a></h3>
<div class="price">L.E 397.48</div>
</div>  </div>  </div>



<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/61AKQzY1nZL._AC_SX569_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >ROYAL CANIN FELINE HEALTH NUTRITION SENSIBLE 2 KG DRY CAT FOOD</a></h3>
<div class="price">L.E 300</div>
</div>  </div>  </div>
 
</div>




<div class='row '>

<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://cdn.shopify.com/s/files/1/0309/7621/products/gaucho_goods_tribal_leather_dog_collar_1_370x370_crop_top.jpg?v=1620220881" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >Gaucho Goods Tribal Leather Dog Collar.</a></h3>
<div class="price">L.E 400</div>
</div>  </div>  </div>
 




<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/51IivK8HaYL._AC_SY879_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >Royal Cat Dry Food Chicken 10.</a></h3>
<div class="price">L.E 450</div>
</div>  </div>  </div>
 

<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
  <a href="" class="image">
<img src= "https://m.media-amazon.com/images/I/61k47Rav2OL._AC_SX569_.jpg" style="width:200px; height:200px;">
  </a>
  
</div>
 
<div class="product-content">
<h3 class="title"><a href="#" >smaX Adult Dry Food for Large Breed Dogs - 16Kg.</a></h3>
<div class="price">L.E 450</div>
</div>  </div>  </div>

</div>
</div>
</div>
</div>

<br/><br/><br/>

<div class='discounttt'>
<br/><br/><br/><br/><br/>


<h1>Stay Tuned for comming discounts <br/> up to 15%</h1>
</div>
<br/>

<div class='inshop d-flex'>
<div class="card d-flex" id="card1">
  <div class="card-body"> 
    <p class="card-text"><a><img src="https://img.icons8.com/dotty/50/000000/delivery.png"/></a>
    <h6>Fast Shipping</h6>
    <p>Fast shipping on all area order arrive in 2 days .</p>
    </p>
    </div>
</div>
    <div class="card d-flex">
    <div class="card-body"> 
        <p class="card-text"><a><img src="https://img.icons8.com/external-victoruler-outline-victoruler/50/000000/external-return-box-logistics-victoruler-outline-victoruler.png"/></a>
        <h6>7 Days Easily Return </h6>
        <p>Product any fault within 7 days for an immediatly exchange.</p>
        </p>
        </div>
        </div>

        <div class="card d-flex">
        <div class="card-body"> 
            <p class="card-text"><a><img src="https://img.icons8.com/ios/50/000000/technical-support.png"/></a>
            <h6>24/7 Friendly Support</h6>
            <p>Our support team always ready for you to 7 days a week.</p>
            </p>
</div>
</div> 


<div class="card d-flex" id="quality">
    <div class="card-body"> 
        <p class="card-text"><a><img src="https://img.icons8.com/ios/50/000000/guarantee--v1.png"/></a>
        <h6>Quality Quaranteed</h6>
        <p>If your product aren't perfect, return them for a full refund.</p>
        </p>
</div> </div>  </div>
</div>
<br><br>


  @endsection