@extends('layouts.app_admin')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>




<br/><br/><br/><br/><br/>

<center>
<h1>Updating Form</h1>
</center>

<br/>

<div id="getr">


<form id="updateform"  action="{{URL('updateform/'.$Food_details->food_id)}}" class="row g-3"  method="POST" enctype="multipart/form-data">

<br/><br/><br/>
@csrf
 @method('Post')

 <input type="hidden" value="{{$Food_details->food_id}}" name="food_id"/>


  <div class="col-lg-6">
    <label for="in1" id="lab1" >Please enter food name</label>
 <input required value="{{$Food_details->food_name}}" name="food_name" id="in1" type="text" class="form-control" placeholder="food name" aria-label="food name">
  </div>

 
  <!-- <br><br> -->
  <div class="col-lg-6 d-block">
  <label for="in3" id="lab3" >Please enter the price</label>

    <input  required id="in3" type="text" class="form-control" value="{{$Food_details->price}}" name="price" placeholder="price" aria-label="price"/>
  </div>


  <div class="col-lg-6 ">
  <label for="in3" id="lab3" >Please enter the type</label>

  <input type="text" name="type" value="{{$Food_details->type}}">
  </div>

  <div class="col-lg-6">
  <!-- <select name="gender" id="in4" class="form-select" aria-label="Default select example">
  <option selected>Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>

</select> -->
<label for="in3" id="lab3" >Please enter the expire date</label>
<input type="date" class="form-control" value="{{$Food_details->expire_date}}"  required name="expire_date">
  </div>

  
  <div class=" justify-content-center">
  <label id="lab" class="input-group-text" for="inputGroupFile01">Upload your pet's photo</label>
  <input  name="photo"  type="file" class="form-control" id="inputGroupFile01">
</div>


<div class="col-md-6 justify-content-center">
<label for="in3" id="lab3" >Please enter the description</label>

  <textarea rows="3"  name="description"  class="form-control" placeholder="{{$Food_details->description}}" ></textarea>
</div>


  

<div class="col-md-12">
   <button type="submit" id="bb" class="btn justift-content-center align-items-center" >Submit

   </button>


</form>
</div>
<br/><br/><br/><br/><br/><br/>



















@endsection
