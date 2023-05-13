@extends('layouts.app_admin')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/doctorupdate.css') }}" rel="stylesheet">



<br><br><br><br><br>



<div>
    <div id="docupdate">


<form id="docupdate" class="row g-3" action="{{URL('docupdate/'.$doctor_details->doctor_id)}}" method="POST">

<br/><br/><br/>
@csrf
 @method('Post')


<input type="hidden" value="{{$doctor_details->doctor_id}}" name="doctor_id"/>
<img id="img" src= {{$doctor_details->photo}}/>
  <div class="col-lg-6">
 <label for="in1" id="lab1" >Please enter your Doctor's name</label>
 <input name="dr_name" id="in1" value="{{$doctor_details->dr_name}}" type="text" class="form-control" aria-label="Pet's Name">
  </div>

 
  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your doctor's age</label>
  <input id="in3" type="text" value="{{$doctor_details->age}}" class="form-control" name="age" aria-label="Age"/>
  </div>

  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your doctor's phone</label>
  <input id="in3" type="text" value="{{$doctor_details->phone}}" class="form-control" name="phone" aria-label="phone"/>
  </div>

  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your doctor's price</label>
  <input id="in3" type="text" value="{{$doctor_details->price}}" class="form-control" name="price" aria-label="price"/>
  </div>


<div class="col-md-6 justify-content-center">
<label for="in3" id="lab3" >Please enter your doctor's rate</label>
<input name="rate" type="text" id="in5" value="{{$doctor_details->rate}}" class="form-control"/>
</div>  

<div class="col-md-6 justify-content-center">
<label for="in3" id="lab3" >Please enter your doctor's description</label>
<input name="description" type="text" id="in5" value="{{$doctor_details->description}}" class="form-control"/>
</div>
  
  

<div class="col-md-12">
<button type="submit" id="bb" class="btn justift-content-center align-items-center" >Submit</button>


</form>
</div>

<br/><br/><br/>



</div>



@endsection