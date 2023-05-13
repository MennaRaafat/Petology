@extends('layouts.app')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>



<br><br><br>


<div class="docback">
<br><br><br><br>
  <h2>Now You can reserve a Trainer from Our website</h2>
  <h5>We make Your pet understand You and control his actions</h5>
  <br><br><br><br><br><br><br><br>
</div>




<br><br>

<h1 style="text-align: center;">Our Trainers</h1>
<h4 style="text-align: center; font-family: 'Comfortaa', cursive;">Hurry up and make an appointement!!</h4>
<br><br>

<div class="d-flex">
<div class="card-group ">
<div class='row '>


@foreach($fetchTrainer as $getrainer)

<div class="col-lg-6">
<div class="infocardContainer">
    <div id="main">
      <img src="{{$getrainer -> photo}}">
    </div>
    <div id="textbois">
      <h3>{{$getrainer -> tr_name}}</h3>
      <h5>{{$getrainer -> role}}</h5>
      <p style="color:#fff !important;">{{$getrainer -> description}}</p>
      <p style="color:#fff !important;"> Rate:&nbsp;{{$getrainer -> rate}}</p>

      <h6>Price: &nbsp;{{$getrainer -> price}}&nbsp; L.E</h6>
      @if(session('id')!=0)
      <a role="button" href="/reservetrainer/{{$getrainer->trainer_id}}" class="ttt" style=" width:200px; text-decoration:none;"  >Reserve
</a>
@else
<a role="button" href="/test" class="tt" style=" width:200px; text-decoration:none;"  >Reserve
</a>
@endif
     
    </div>
  </div>
</div>
  @endforeach


<div>
  <br><br>
</div>



@endsection