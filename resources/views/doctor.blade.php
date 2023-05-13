@extends('layouts.app')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>







<br><br><br>


<div class="docback">
<br><br><br><br><br><br><br>
  <h2>Now You can reserve a Doctor from Our website</h2>
  <h5>The medical health of Your pet is what we are working on</h5>
  <br><br><br><br><br><br><br><br><br><br><br>
</div>





<h1 style="text-align: center;">Our Doctors</h1>
<h4 style="text-align: center; font-family: 'Comfortaa', cursive;">Hurry up and make an appointement!!</h4>

<br><br>

<div class="d-flex">
<div class="card-group ">
<div class='row '>


@foreach($fetchDoctors as $getdoctor)

<div class="col-lg-6">
<div class="infocardContainer">
    <div id="main">
      <img src="{{$getdoctor -> photo}}">
    </div>
    <div id="textbois">
      <br>
      <h3>{{$getdoctor -> dr_name}}</h3>
      <h5>{{$getdoctor -> role}}</h5>
      <p style="display:block;" >{{$getdoctor -> description}}</p>
      <div style="display:flex ;">
      <p> Rate: &nbsp;{{$getdoctor -> rate}}</p>
      <h6 style="margin-left:-17%;">Price: {{$getdoctor -> price}} L.E</h6>
      </div>
      @if(session('id')!=0)
      <a role="button" href="/reserveform/{{$getdoctor->doctor_id}}" class="tt" style=" width:200px; text-decoration:none;"  >Reserve</a>
      @else
      <a role="button" href="/test" class="tt" style=" width:200px; text-decoration:none;"  >Reserve</a>
      @endif
      <!-- <div id="hotlinks">
        <a href="https://www.facebook.com/"><img id="codepenio" src="https://img.icons8.com/fluency/48/000000/facebook-new.png" target="_blank"/>
        </a>
        <a href="https://www.instagram.com/">
          <img id="codepenio" src="https://img.icons8.com/fluency/48/000000/instagram-new.png" target="_blank"/>
        </a>
        <a href="https://twitter.com/?lang=en">
          <img id="codepenio" src="https://img.icons8.com/color/48/000000/twitter--v1.png" target="_blank">
        </a>
        <a href="https://www.linkedin.com/">
          <img id="codepenio" src="https://img.icons8.com/color/48/000000/linkedin.png" target="_blank">
        </a>
      </div> -->
    </div>
  </div>
</div>
  @endforeach


<div>
  <br><br>
</div>


@endsection