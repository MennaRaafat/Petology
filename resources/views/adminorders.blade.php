<link href="{{ asset('css/adminorders.css') }}" rel="stylesheet">

@extends('layouts.app_admin')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

<section id="kk">
	<br><br><br>
<div class="row">
@foreach($orders as $order)

<div class="col-lg-4">

<div class="product-card">

		<div class="badge">Hot</div>
		<div class="product-tumb">
@if(is_null($order->f_id))
			<img src="{{$order->acart->photo}}">
@else
<img src="{{$order->fcart->photo}}">
@endif
		</div>
		<div class="product-details">
		@if(is_null($order->f_id))
		<span class="product-catagory">{{$order->acart->type}}</span>
@else
			<span class="product-catagory">{{$order->fcart->type}}</span>
@endif

@if(is_null($order->f_id))
			<h4><a href="">{{$order->acart->acc_name}}</a></h4>
@else
<h4><a href="">{{$order->fcart->food_name}}</a></h4>
@endif

<!-- @if(is_null($order->f_id))
			<p>{{$order ->acart-> description}}</p>
@else
<p>{{$order ->fcart-> description}}</p>
@endif -->

			<div class="product-bottom-details">
			@if(is_null($order->f_id))

				<div class="product-price">{{$order->acart->price}}*{{$order->ordered_qty}}</div>
			@else
			<div class="product-price">{{$order->fcart->price}}*{{$order->ordered_qty}}</div>
			@endif

			</div>
			</div></div>
    </div>

@endforeach
</div>
</section>
@endsection