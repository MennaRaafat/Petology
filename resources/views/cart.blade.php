@extends('layouts.app')
@section('content')
<script src="{{ asset('js/Cart.js') }}" defer ></script>
<link href="{{ asset('css/cart.css') }}" rel="stylesheet">





<br><br><br><br>
<header id="site-header">
		<div class="container">
			<h1>Shopping cart <span></h1>
		</div>
	</header>
    @foreach($fetchCart as $getfood)

	<div class="container">
		<section id="cart"> 
			<article class="product">
				<header>
				
					<a class="remove" href="/delete_cart/{{$getfood->cart_id}}">
					@if(is_null($getfood->f_id))

					<img src="{{$getfood->acart->photo}}" alt=" ">
@else
					<img src="{{$getfood->fcart->photo}}" alt=" ">
@endif
						<h3>Remove product</h3>
					</a>
				</header>

				<div class="content">
@if(is_null($getfood->f_id))
					<h1>{{$getfood->acart->acc_name}}</h1>
@else

                    <h1>{{$getfood->fcart->food_name}}</h1>
@endif
				</div>

				<footer class="content">
					<!-- <span class="qt-minus">-</span>
					<span class="qt">2</span>
					<span class="qt-plus">+</span> -->

					<!-- <h2 class="full-price">
                    {{$getfood -> price}}					</h2> -->

					
@if(is_null($getfood->f_id))
             <h2 class="price"> {{$getfood->acart->price * $getfood->ordered_qty}}</h2>

@else
             <h2 class="price"> {{$getfood->fcart->price * $getfood->ordered_qty}}</h2>
				</footer>
			</article>
@endif

<!-- <a href="#" click.prevent="increase('{{$getfood->cart_id}}')" ><span class="iconify" data-icon="akar-icons:circle-plus-fill"></span></a>
<a click.prevent="" >-</a> -->




	</div>
    @endforeach

	<a href="/final_purchase" id="purcar" class="btn btn" role="button">Purchase</a>
	
 </main>
 <br><br>
 @endsection
