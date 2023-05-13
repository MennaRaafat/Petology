@extends('layouts.app')
 
@section('content')
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="{{ asset('css/getrid.css') }}" rel="stylesheet">






 



<br/><br/><br/><br/><br/>

<center>  <h1>Getrid Form</h1>  </center>
<br/>
<div id="getr">
<form id="getform" class="row g-3"  enctype="multipart/form-data" action="/getform" method="POST">
<br/><br/><br/>
@csrf

  <div class="col-lg-6">
    <label for="in1" id="lab1" >Please enter your pet's name</label>
 <input name="get_rid_name" id="in1" type="text" class="form-control" placeholder="Pet's Name" aria-label="Pet's Name">
  </div>

  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter your pet's age</label>

    <input id="in3" type="text" class="form-control" name="age" placeholder="Age" aria-label="Age"/>
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
  <textarea name="health_status" id="in5" class="form-control" placeholder="please enter your pet's health status" rows="3"></textarea>
</div>
  
  

<div class="col-md-12">
   <button type="submit" id="bb" class="btn justift-content-center align-items-center" >Submit

   </button>


</form>
</div>
</div>
<br/><br/><br/><br/><br/><br/>


















@endsection
