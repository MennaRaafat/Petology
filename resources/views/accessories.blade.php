@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<link href="{{ asset('css/food.css') }}" rel="stylesheet">
<!-- <script src="{{ asset('js/Cart.js') }}" defer ></script> -->



<br><br><br>

<br><br><br>

<div class="row">
<div class="row">

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<br><br><br>

@foreach($fetchacc as $getaccessory)


    <div class="col-md-4 col-sm-6">
        <div class="product-grid">
            <div class="product-image" id="img-cart">
                <a href="" class="image">
                    <img src="{{$getaccessory -> photo}}" style="width:200px ; height:200px;">
                </a>
                <!-- <span class="product-discount-label">-23%</span> -->
                <ul class="product-links">
                    <li><a href="/accs/{{$getaccessory ->accessories_id}}"> <span class="iconify" data-icon="ant-design:heart-outlined"></span></a></li>
    
                 
                    <li> <a href="/accessories_details/{{$getaccessory -> accessories_id}}"><span class="iconify" data-icon="bi:info-circle"></span></a></li>
                   <input type="hidden"name="accsse_id" value="">

                </ul>
    @if(session('id')!=0)        
                <a href="/add_cart/{{$getaccessory -> accessories_id}}" class="store-item-icon add-to-cart">Add to Cart</a>
     @else 
     <a href="/test" class="store-item-icon add-to-cart">Add to Cart</a>
     @endif
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#" >{{$getaccessory -> acc_name}}</a></h3>
                <div class="price">${{$getaccessory -> price}}</div>
            </div>
        </div>

    </div>

@endforeach

<div id="shcar" style="right:-93%; bottom:-7px;">
@if(session('id')!=0)
<a href="/cart"><span class="iconify" data-icon="emojione-monotone:shopping-cart" style="color: #7dafaf;" data-width="65" data-height="75"></span><a>

@else
<a href="/test"><span class="iconify" data-icon="emojione-monotone:shopping-cart" style="color: #7dafaf;" data-width="65" data-height="75"></span><a>
    @endif
</div>


<br/> <br/> <br/> <br/>

</div>


@endsection
