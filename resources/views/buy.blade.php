@extends('layouts.app')
 
@section('content')
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/buy.css') }}" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">


 <br/>

<br/><br/>
<br/>

<h1 id="buy">Buying Pets</h1>
<section class="buy_card">
@foreach($buy_animals as $getanimals)

<div class="cards p-0">

<div class="side lef"></div>
<div class="side bottom">
<a href="https://www.facebook.com/"><span  class="iconify two" data-icon="bi:facebook" style="color: white;"></span>
</a>   &nbsp;  &nbsp;
        <a href="https://www.instagram.com/"><span class="iconify two" data-icon="fa-brands:instagram-square" style="color: white;"></span></a>   &nbsp;  &nbsp;
        <a href="https://twitter.com/?lang=en"><span class="iconify two" data-icon="ant-design:twitter-circle-filled" style="color: white;"></span></a>  &nbsp;  &nbsp;
        <a href="https://www.linkedin.com/"> <span class="iconify two" data-icon="ant-design:linkedin-filled" style="color: white;"></span> </a>
</div>
<div class="row">

<div class="side main">

    <img id="img" src= {{ $getanimals-> photo}}  >
    <br>
    <br>

<div style="text-align:left;">
<td> <strong> Type :</strong> {{ $getanimals-> animal_name}}</td>
<br>

    <td> <strong> age :</strong>{{ $getanimals->age}}</td>
    <br>

    <td> <strong> gender :</strong>{{ $getanimals->gender}}</td>
    <br>

    <td> <strong> price :</strong>{{ $getanimals->price}} L.E</td>
    <br>
    </div>
    <a  href="/bdetails/{{$getanimals->animal_id}}"style="color:white ;" onclick="" id="btn2" class="btn">More details</a>

    <script>
     document.getElementById("btn").addEventListener('click',function(){
Swal.fire({
  title: 'Thank you for your interest , The pet has been reserved for you.',

  text:'Please contact with the Shleter Phone Number : 01030605030 to Confirm the payment , Kindly Note that the reservation will be canceled automaticly incase you did not pay the amount after 48 hours ,Wiching you a great day, ',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
     })
</script>


</div>
 
</div>
</div>
@endforeach

@include('sweetalert::alert')

</section>





<br/><br/>
<br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>





<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>

<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>






@endsection
