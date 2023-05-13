@extends('layouts.app')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/getrid.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https:/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({  dateFormat: "yy-mm-dd"
});
  } );
  </script>

<br/><br/><br/><br/><br/>

<center>
<h1>reservation Form</h1>
</center>

<br/>

<div id="getr">

@if($errors->any())
   @foreach($errors->all() as $error )
 <div class="alert alert-danger" role="alert">
{{$error}}
</div>
@endforeach
@endif

<form  class="row g-3" action="/reservetrainerform" method="POST">

<br/><br/><br/>
@csrf
 @method('Post')
<input type="hidden" name="tr_id" value="{{$trainer_id}}">
  <div class="col-lg-6">
    <label for="in1" id="lab1" >Please enter your name</label>
 <input required name="name" id="in1" type="text" class="form-control" placeholder="your Name" aria-label="Pet's Name">
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
  <br><br><br><br><br><br><br><br><br>
  <div >
      <label style="margin-left:2% ;" for="reserve">reservation date</label>
      <!-- <input id="reserve" type="datetime"> -->
      <!-- <input data-provide="datepicker"> -->
      <input type="text" name="date" style="margin-left:2% ; width:280px;" id="datepicker">

</div>


<div class="col-md-6 justify-content-center">
  <textarea name="subject" id="in5" class="form-control" placeholder="please enter what you need to train your pet on" rows="3"></textarea>
</div>
  

<div class="col-md-12">
   <button  type="submit" id="bb" class="btn justift-content-center align-items-center" >Submit

</button>


</form>

</div>
<br/><br/><br/><br/><br/><br/>

</div>


















@endsection
