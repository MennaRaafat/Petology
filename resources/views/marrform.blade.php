@extends('layouts.app')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/marrform.css') }}" rel="stylesheet">




<br/><br/><br/><br/><br/>

<center>
<h1>Marriage Form</h1>
</center>

<br/>
<!-- <img id="cat" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJyHJIr2EhGccMf1kDjoI9rMOY0KGou5Tv_g&usqp=CAU"/> -->
<div id="getr">


<form id="gform" class="row g-3" action="/mform" method="POST" enctype="multipart/form-data">

<br/><br/><br/>
@csrf
 @method('Post')

  <div class="col-lg-6">
    <label for="in1" id="lab1" >Please enter your pet's name</label>
 <input required name="marr_name" id="in1" type="text" class="form-control" placeholder="Pet's Name" aria-label="Pet's Name">
  </div>
 
  <!-- <br><br> -->
  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your pet's age</label>

    <input  required id="in3" type="text" class="form-control" name="age" placeholder="Age" aria-label="Age"/>
  </div>


  <div class="col-lg-6 ">
  <select name="type"  id="in2" class="form-select" aria-label="Default select example">
  <option selected>Type</option>
  <option value="Dog">Dog</option>
  <option value="Cat">Cat</option>
  <option value="Bird">Bird</option>
  <option value="Parrot">Parrot</option>
  <option value="Owl">Owl</option>
  <option value="Fish">Fish</option>

</select>
  </div>

  <div class="col-lg-6">
  <select name="gender" id="in4" class="form-select" aria-label="Default select example">
  <option selected>Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>

</select>
  </div>
  <div class=" justify-content-center">
  <label id="lab" class="input-group-text" for="inputGroupFile01">Upload your pet's photo</label>
  <input required name="photo"  type="file" class="form-control" id="inputGroupFile01">
</div>


<div class="col-md-6 justify-content-center">
  <textarea name="description" class="form-control" placeholder="please enter your pet's description" rows="3"></textarea>
</div>

<div class="col-md-6 justify-content-center">
  <textarea name="health_status" id="in5" class="form-control" placeholder="please enter your pet's health status" rows="3"></textarea>
</div>
  
  

<div class="col-md-12">
   <button type="submit" id="bb" class="btn justift-content-center align-items-center" >Submit

   </button>
</div>

</form>
</div>
<br/><br/><br/><br/><br/><br/>



















@endsection
