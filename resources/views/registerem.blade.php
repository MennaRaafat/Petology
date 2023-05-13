
@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<br><BR><BR><br><br>

<div class="reg d-flex " >

  <div class="left">
  <img src="public\animal\xxxxxxx11111111.png" width="15%" style="margin-bottom:-15% ; margin-left:11%;"> 
    <br><BR><BR><br><br>
  <div class="card" style= "width: 720px ; height:700px ;"> 

    <br/>
    <h2>Sign Up Now</h2>
    <div>
 @if($errors->any())
   @foreach($errors->all() as $error )
 <div class="alert alert-danger" role="alert">
{{$error}}
</div>
@endforeach
@endif
</div>
    <br/>
 <form class="row g-3"  method="POST" action="/emregister">
 @csrf
 <!-- @method('Post') -->

 <div class="col-md-6">
  
    <label for="inputName4" class="form-label">Full Name </label>
    <input type="text" name="employee_name"  class="form-control" placeholder="Full name" aria-label="Full name" />
   
  </div>

  <div class="col-md-6">
    <label for="inputEmail4"  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email" id="inputEmail4"/>

   
  </div>

  <div class="col-md-6">
    <label for="inputPassword4"  class="form-label">Password</label>
    <input type="password" name="password" class="form-control"placeholder="Password" id="inputPassword4"/>

   
  </div>

  <div class="col-md-6">
    <label for="inputConpassword4"  class="form-label">Confirm Password </label>
    <input type="password"  name="password_confirmation" class="form-control" placeholder="Confirm Password" id="inputPassword4"/>
  </div>


  <label for="inputgender4" class="form-label">Gender</label><br/>
<div class="gen d-flex">
<div class="form-check form-check-inline fe" >
<label class="form-check-label" for="inlineRadio1" >Female</label>

  <input class="form-check-input inline" type="radio" name="gender" id="inlineRadio1" value="female"/>
</div>
<div class="form-check form-check-inline ">
<label class="form-check-label" for="inlineRadio2">Male</label>

  <input class="form-check-input inline" type="radio" name="gender" id="inlineRadio2" value="male"/>
</div>
</div>

  <div class="col-md-6">
    <label for="inputAge4"  class="form-label">Age</label>
    <input type="number"  class="form-control" name="age" placeholder="Age" aria-label="Age"/>

    
  </div>

  <div class="col-md-6">
    <label for="inputPhone4" class="form-label">Phone Number</label>
    <input type="tel"  class="form-control" name="phone" placeholder="Phone Number" aria-label="Phone Number"/>

    
  </div>
<br><br>
<br>
<br>

  <div class="col-lg-6 ">
  <select name="position"  id="in2" class="form-select" aria-label="Default select example">
  <option selected>Position</option>
  <option value="Doctor">Doctor</option>
  <option value="Trainer">Trainer</option>

</select>
  </div>


  <div class="col-md-12">
   <button type="submit" class="btn justift-content-center align-items-center" >Sign Up 

   </button>

  </div>

 </form>






</div>
</div>


</div>
<br/><br/>
<br/><br/>
<br/><br/>
@endsection
