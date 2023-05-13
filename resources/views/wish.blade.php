@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
<link href="{{ asset('css/food.css') }}" rel="stylesheet">
 
<br><br><br>
<div class="row">
 
@foreach($fetchwish as $wish)
 
<div class="col-md-4 col-sm-6">
<div class="product-grid">
<div class="product-image" id="img-cart">  
@if(is_null($wish->fwish))
  <a href="" class="image">
<img src= "{{$wish->awish->photo}}" style="width:200px; height:200px;">
  </a>
@else
  <a href="" class="image">
<img src= "{{$wish->fwish->photo}}" style="width:200px; height:200px;"">
  </a>
@endif
</div>
 
<div class="product-content">
@if(is_null($wish->fwish))
<h3 class="title"><a href="#" >{{$wish->awish->acc_name}}</a></h3>
@else
<h3 class="title"><a href="#" >{{$wish->fwish->food_name}}</a></h3>
@endif
 
@if(is_null($wish->fwish))
<div class="price">${{$wish->awish->price}}</div>
@else
<div class="price">${{$wish->fwish->price}}</div>
@endif
</div>  </div>  </div>
@endforeach
@endsection




