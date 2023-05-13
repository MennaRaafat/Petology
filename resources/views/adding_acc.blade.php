@extends('layouts.app_admin')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

<link href="{{ asset('css/getrid.css') }}" rel="stylesheet">



<br/><br/><br/><br/><br/>

<center>
<h1>Adding Form</h1>
</center>

<br/>

<div id="getr">


<form id="addform" class="row g-3" action="/addaccform" method="POST" enctype="multipart/form-data">

<br/><br/><br/>
@csrf
 @method('Post')

  <div class="col-lg-6">
    <label for="in1" id="lab1" >Please enter accessory name</label>
 <input required name="acc_name" id="in1" type="text" class="form-control" placeholder="accessory name" aria-label="accessory name">
  </div>

 
  <!-- <br><br> -->
  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter the price</label>

    <input  required id="in3" type="text" class="form-control" name="price" placeholder="price" aria-label="price"/>
  </div>


 <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter the rate</label>

    <input  required id="in3" type="number" step="0.5" class="form-control" name="rate" placeholder="rate" aria-label="rate"/>
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

  <!-- <div class="col-lg-6"> -->
  <!-- <select name="gender" id="in4" class="form-select" aria-label="Default select example">
  <option selected>Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>

</select> -->
<!-- <label for="in3" id="lab3" >Please enter the expire date</label>
<input type="date" class="form-control" required name="expire_date">
  </div> -->

  
  <div class=" justify-content-center">
  <label id="lab" class="input-group-text" for="inputGroupFile01">Upload your product's photo</label>
  <input required name="photo"  type="file" class="form-control" id="inputGroupFile01">
</div>


<div class="col-md-6 justify-content-center">
  <textarea name="description" class="form-control" placeholder="please enter your product's description" rows="3"></textarea>
</div>

  
  

<div class="col-md-12">
   <button type="submit" id="bb" class="btn justift-content-center align-items-center" >Submit

   </button>


</form>
</div>
</div>
<br/><br/><br/><br/><br/><br/>



















@endsection
