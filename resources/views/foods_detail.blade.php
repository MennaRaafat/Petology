@extends('layouts.app')
 
 @section('content')
 
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link href="{{ asset('css/rate.css') }}" rel="stylesheet">
 <link href="{{ asset('css/accdetails.css') }}" rel="stylesheet">


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
 

 
 
 <br><br><br><br><br><br><br> 
 
 
 
  <section class="inner-sec">
         <div class="container">
             <h1 style="text-align:center;">Buy Now</h1>
             <div class="row">
                 <div class="col-md-5">
 
                     <figure class="product-img">
                         <img src= {{ $food ->photo }} >
                     </figure>
                 </div>
                 <div class="col-md-7">
                     <div class="product-content-sec">
                     <h3> <strong> name :</strong> {{ $food-> food_name}}</h3>
     <br>
 
     <p> <strong> price :</strong>{{ $food->price}}&nbsp;L.E</p>
     <br>
 
     <p> <strong> type :</strong>{{ $food->type}}</p>
     <br>
 
     <p> <strong> description :</strong>{{ $food->description}} </p>
     <br>
     <p> <strong> expire date :</strong>{{ $food->expire_date}} </p>

     <form action="/purchase"  method="POST">

@csrf
<!-- QTY	<input type="number" min="{{$food->price}}" step="{{is_null($food->f_id) ? $food->price : $food->price }}" name="qty" value="{{is_null($food->f_id) ? $food->price : $food->price }}" class="qtyclass" > -->

<input type="number" min="1" name="qty" max="4" value="1" class="qtyclass" >

<input type="submit" style="background-color:#7dafaf; border:hidden; color:#fff; padding:0.5%; border-radius:5px;">
<input type="hidden" value="{{$food->food_id}}" name="f_id">

</form>

<br><br><br>

        <br> </div> </div> </div> </div>

         @include('sweetalert::alert')

<form action="/add_rate_food" method="POST">
  <div class="rate">
      @csrf
    <input type="hidden" name="food_id" value="{{$food->food_id}}">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
  @if(session('id')!=0)
  <!-- <a role="button" type="submit" class="btn btn" style="float: right;margin-top: -3.5%;margin-right: 40%;"> Rate</a> -->

  <input class="btn" type="submit" value="Rate"style="float: right;margin-top: -3.5%;margin-right: 30%;">

  @else

  <a role="button" href="/test" type="submit" class="btn btn" style="float: right;margin-top: -3.5%;margin-right: 40%;"> Rate</a>

  @endif
    </form>
    
<div>
<form id="comment" action="/commentfood" method="POST">
         <!-- <div> -->
         @csrf    
         <input type="hidden" name="food_id" value="{{$food->food_id}}">
         <input type="text" class="form-control" id="comm" name="comment"aria-describedby="emailHelp" placeholder="Enter Your Comment.....">
         <br>

@if(session('id')!=0)
<!-- <a role="button" class="btn btn" type="submit">Send</a> -->

<input class="btn" type="submit" value="Send">
@else
<a role="button" href="/test" class="btn btn" type="submit">Send</a>
@endif


<!-- </div> -->
</div>
<!-- <br> -->
</form>



          
     </section> 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 @endsection 
 
 
 
 
 
 
 
 