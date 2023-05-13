@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/purchase.css') }}" rel="stylesheet">

<br><br>
<br>
<br>




<footer id="site-footer">
		<div class="container clearfix">
		<div class="cloud">
			<div class="left">
			
				<h4 class="subtotal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subtotal: <span>{{$sub_total}}</span>L.E</h4>
				<h4 class="shipping">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shipping: <span>50.00</span>L.E</h4>
			</div>

			<div class="right">
				<h3 class="total">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total: <span>{{$sub_total+50}}</span>L.E</h3>
			</div>
			</div>
			<a href="/pay" role="button" id="checkout"  class="btn"  >Checkout</a>
		</div>
	</footer>

<br>
@endsection
