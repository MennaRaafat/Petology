@extends('layouts.app_admin')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

<link href="{{ asset('css/trainerupdate.css') }}" rel="stylesheet">

<br><br><br><br><br>



<div >
<br/>

<div id="trainerupdate">
<form id="trainerupdate" class="row g-3" action="{{URL('trainerupdate/'.$Trainer_details->trainer_id)}}" method="POST">

<br/><br/><br/>
@csrf
 @method('Post')

 <img id="img" src= {{$Trainer_details->photo}}/>

<input type="hidden" value="{{$Trainer_details->trainer_id}}" name="trainer_id"/>
  <div id="left" class="col-lg-6">
 <label for="in1" id="lab1" >Please enter your Trainer's name</label>
 <input name="tr_name" id="in1" value="{{$Trainer_details->tr_name}}" type="text" class="form-control" aria-label="Pet's Name">
  </div>

 
  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your Trainer's age</label>
  <input id="in3" type="text" value="{{$Trainer_details->age}}" class="form-control" name="age" aria-label="Age"/>
  </div>

  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your Trainer's phone</label>
  <input id="in3" type="text" value="{{$Trainer_details->phone}}" class="form-control" name="phone" aria-label="phone"/>
  </div>

  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your Trainer's price</label>
  <input id="in3" type="text" value="{{$Trainer_details->price}}" class="form-control" name="price" aria-label="price"/>
  </div>


<div class="col-md-6 justify-content-center">
<label for="in3" id="lab3" >Please enter your Trainer's rate</label>
<input name="rate" type="text" id="in5" value="{{$Trainer_details->rate}}" class="form-control"/>
</div>  

<div class="col-md-6 justify-content-center">
<label for="in3" id="lab3" >Please enter your Trainer's description</label>
<input name="description" type="text" id="in5" value="{{$Trainer_details->description}}" class="form-control"/>
</div>
  
  

<div class="col-md-12">
<button type="submit" id="bb" class="btn justift-content-center align-items-center" >Submit</button>


</form>
</div>





</div>
<br/><br/><br/><br/><br/><br/>



@endsection