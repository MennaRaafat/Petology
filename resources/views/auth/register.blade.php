
@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

<div class="reg d-flex " >

<br/> <br/>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="bgd">
<div class="container-fluid">
<a class="navbar-brand"href="#">Petology</a>
<button class="navbar-toggler"type="button"data-bs-toggle="collapse"data-bs-target="#navbarNavDropdown"aria-controls="navbarNavDropdown"aria-expanded="false"aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse"id="navbarNavDropdown">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link active"aria-current="page"href="/">Home</a>
</li>







 
<!-- Authentication Links -->
         @guest
                            @if (Route::has('login'))
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle"href="#"id="navbarDropdownMenuLink"role="button"data-bs-toggle="dropdown"aria-expanded="false">
            Sign In
</a>
<ul class="dropdown-menu"aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item" href="/login">Login as a user</a></li>
<li><a class="dropdown-item" href="/logine">Login as an Employee</a></li>
</ul>
</li>
                            @endif
 
                            @if (Route::has('register'))
<li class="nav-item">
<a class="nav-link"href="/register">Sign Up</a>
</li>
                            @endif
                         
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle"href="#"id="navbarDropdownMenuLink"role="button"data-bs-toggle="dropdown"aria-expanded="false">
Services
</a>
<ul class="dropdown-menu"aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item"href="/buy">Buy pets</a></li>
<li><a class="dropdown-item"href="/getrid">Getrid of your pet</a></li>
<li><a class="dropdown-item"href="/marriage">Marriage</a></li>
<li><a class="dropdown-item"href="#">Doctors</a></li>
<li><a class="dropdown-item"href="#">Trainers</a></li>
<li><a class="dropdown-item"href="#">Store</a></li>
<li><a class="dropdown-item"href="/course">Online Courses</a></li>

</ul>
</li>





<li class="nav-item">
<a class="nav-link"href="#">Contact us</a>
</li>
<li class="nav-item">
<a class="nav-link"href="#">About us</a>
</li>
                        @else

<li class="nav-item dropdown">
<a id="navbarDropdown"class="nav-link dropdown-toggle"href="#"role="button"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false"v-pre>
<!-- {​​​​​​​{​​​​​​​ Auth::user()->name }​​​​​​​}​​​​​​​ -->
</a>
 
<div class="dropdown-menu dropdown-menu-end"aria-labelledby="navbarDropdown">
<a class="dropdown-item"href="{​​​​​​​{​​​​​​​ route('logout') }​​​​​​​}​​​​​​​"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                                        {​​​​​​​{​​​​​​​ __('Logout') }​​​​​​​}​​​​​​​
</a>
 
<form id="logout-form"action="{​​​​​​​{​​​​​​​ route('logout') }​​​​​​​}​​​​​​​"method="POST"class="d-none">
                                        @csrf
</form>
</div>
</li>
                        @endguest
 
</ul>
</div>
</div>
</nav>

  <div class="left">
  <div class="card" style= "width: 720px"> 

    <br/>
    <h2>Sign Up Now</h2>
    <br/><br/><br/>
 <form class="row g-3" method="POST" action="/form">
 @csrf
 <!-- @method('Post') -->
<!-- <div>
 @if($errors->any())
   @foreach($errors->all() as $error )
 <div class="alert alert-danger" role="alert">
{{$error}}
</div>
@endforeach
@endif
</div> -->
 <div class="col-md-6">
  
    <label for="inputName4" class="form-label">Full Name</label>
    <input type="text" name="us_name"  class="form-control" placeholder="Full name" aria-label="Full name" />
    <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
  </div>

  <div class="col-md-6">
    <label for="inputEmail4"  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email" id="inputEmail4"/>

    <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
  </div>

  <div class="col-md-6">
    <label for="inputPassword4"  class="form-label">Password</label>
    <input type="password" name="password" class="form-control"placeholder="Password" id="inputPassword4"/>

    <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
  </div>

  <div class="col-md-6">
    <label for="inputConpassword4"  class="form-label">Confirm Password </label>
    <input type="password"  name="confirm_password" class="form-control"placeholder="Confirm Password" id="inputPassword4"/>
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

    <!-- @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
  </div>

  <div class="col-md-6">
    <label for="inputPhone4" class="form-label">Phone Number</label>
    <input type="tel"  class="form-control" name="phone" placeholder="Phone Number" aria-label="Phone Number"/>

    <!-- @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
  </div>



  <div class="col-md-12">
   <!-- <button type="submit" class="btn justift-content-center align-items-center" >Sign Up 

   </button> -->

   <input type="submit"> ok
  </div>

 </form>






</div>
</div>
<div class="rright">
  <br/><br/>
</div>
</div>
@endsection
