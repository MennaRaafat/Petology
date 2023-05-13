@extends('layouts.app_admin')
 
@section('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<link href="{{ asset('css/doctor.css') }}" rel="stylesheet">







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
      <div style="display:flex;">
      <p style=" width:210px;"> Rate: &nbsp;{{$getdoctor -> rate}}</p>
      <h6  style=" width:200px;">Price: &nbsp;{{$getdoctor -> price}} L.E</h6>
      </div>
  <div class="d-flex text-align-center align-items-center">
      <a role="button" href="/updatedr/{{$getdoctor->doctor_id}}" class="tt" style=" width:150px; text-decoration:none;"  >Update</a>
   
      <a role="button" href="/deleted/{{$getdoctor->doctor_id}}" class="tt" style=" width:100px; text-decoration:none;"  >Delete</a>
  </div>
    </div>
  </div>
</div>
  @endforeach


<div>
  <br><br>
</div>


@endsection