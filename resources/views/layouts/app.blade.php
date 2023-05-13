<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/Count.js') }}" defer ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min..js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22051219.js"></script>
<!-- End of HubSpot Embed Code -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/footer.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/about.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/accord.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/buy.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/get_form.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/marr.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <link href="{{ asset('css/store.css') }}" rel="stylesheet">
    <link href="{{ asset('css/doctor.css') }}" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <div id="app">
      
    <main>

 
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="bgd">
<div class="container-fluid">
<img src="public\animal\petopeto11.png" style="width:10% ;">
<a style="color:white ; margin-left:5%;" id="greetings">&nbsp; &nbsp; </a>
<a style="color:white ;" id="clock"></a>

<script>
   var name ="{{session('name')}}";
  const clock = () => {
  var date    = new Date();
  var hours   = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();
  var midday;

  hours     = updateTime(hours);
  minutes   = updateTime(minutes);
  seconds   = updateTime(seconds);


  // if else condition

  midday = (hours >= 12) ? "PM" : "AM";

  document.getElementById("clock").innerHTML =
    "<span>"+hours+"</span>" + ":" + "<span>"+minutes+"</span>" + ":" + "<span>"+seconds+"</span>" +" "+ "<span>"+midday+"</span>";

  var time = setTimeout(function () {
    clock();
  }, 1000);

  //   Good Morning and Good Night Conditions

  if (hours < 12) {
    var greeting = "Good Morning " + " &nbsp;"+ name+" &nbsp; ";
   
  }

  if (hours >= 12 && hours <= 18) {
    var greeting = "Good Afternoon " + "&nbsp; "+ name+"&nbsp;  ";
  }

  if (hours >= 18 && hours <= 24) {
    var greeting = "Good Evening " + " &nbsp; "+ name+"&nbsp;  ";
  }

  document.getElementById("greetings").innerHTML = greeting;
}

const updateTime = (k) => {
  if (k < 10) {
    return "0" + k;
  } else {
    return k;
  }
}

// call clock function 
clock();
  </script>
<button class="navbar-toggler"type="button"data-bs-toggle="collapse"data-bs-target="#navbarNavDropdown"aria-controls="navbarNavDropdown"aria-expanded="false"aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse"id="navbarNavDropdown">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link active"aria-current="page"href="/">Home</a>
</li>







 
<!-- Authentication Links -->
                   


                           
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle"href="#"id="navbarDropdownMenuLink"role="button"data-bs-toggle="dropdown"aria-expanded="false">
Services
</a>
<ul class="dropdown-menu"aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item"href="/buy">Buy pets</a></li>
<li><a class="dropdown-item"href="/getrid">Getrid of your pet</a></li>
<li><a class="dropdown-item"href="/marriage">Marriage</a></li>
<li><a class="dropdown-item"href="/doctor">Doctors</a></li>
<li><a class="dropdown-item"href="/trainer">Trainers</a></li>
<li><a class="dropdown-item"href="/store">Store</a></li>
<li><a class="dropdown-item"href="/course">Online Courses</a></li>
<li><a class="dropdown-item"href="/wish">wishes</a></li>

</ul>
</li>





<li class="nav-item">
<a class="nav-link"href="#contact">Contact us</a>
</li>
<li class="nav-item">
<a class="nav-link"href="#about">About us</a>
</li>

         @guest
 
@if(!Session::has('name'))
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle"href="#"id="navbarDropdownMenuLink"role="button"data-bs-toggle="dropdown"aria-expanded="false">
            Sign In </a>
<ul class="dropdown-menu"aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item"href="/login">Login as a user</a></li>
<li><a class="dropdown-item"href="/logine">Login as an Employee</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link"href="/register">Sign Up </a>
</li>
<li class="nav-item">
<a class="nav-link"href="/registerem">Sign Up as employee</a>
</li>
@else
<li class="nav-item">
<!-- <a class="nav-link"href="/profile">profile </a> -->
</li>
<li class="nav-item">
<a class="nav-link"href="/logoutt">logout </a>
</li>
@endif    
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

@yield('content')



<div class="Footerr">

<!-- <br/><br/> -->

<div class="row drp ">


        <div  class=" fr col-3" >
            <div>
        <a href="#0" class="logo">Petology</a><br/> <br/></div>
        <p id="fot" style="color:white;">Encourage each animal buddy to have a humane and compassionate future.</p>  <br/>  <br/>   <br/> <br/>
 
 <div id="ic"> 
 <p ><a href="https://www.facebook.com/"><span class="iconify" data-icon="bi:facebook" style="color: white;"></span>
</a>   &nbsp;  &nbsp;
        <a href="https://www.instagram.com/"><span class="iconify" data-icon="fa-brands:instagram-square" style="color: white;"></span></a>   &nbsp;  &nbsp;
        <a href="https://twitter.com/?lang=en"><span class="iconify" data-icon="ant-design:twitter-circle-filled" style="color: white;"></span></a>  &nbsp;  &nbsp;
        <a href="https://www.linkedin.com/"> <span class="iconify" data-icon="ant-design:linkedin-filled" style="color: white;"></span> </a> </p>
</div>
</div>

<div class="col-3">
<div id="ser">
<h3 id="or">Our Services</h3>
<ul>

<li ><a href="">Get Rid</a></li>
<li ><a href="">Buy Pet</a></li>
<li><a href="">Marriage</a></li>
<li ><a href="">Trainer</a></li>
<li ><a href="">Doctor</a></li>
<li ><a href="">Store</a></li>

</ul>
</div>
</div>

<div class="col-3">
<div id="term">
    <h3>Help & Support</h3>
    <ul>
        <li>Terms & Conditions</li>
        <li>Privacy Terms</li>
        <li>Terms of Use</li>
        <li>Help Center</li>
    </ul>

</div>


</div>

<div class="col-3">
    <div id="shel">
 <h5>Contact with Shelter</h5> 
<div  class="mapouter"><div  class="gmap_canvas"><iframe width="224" height="221" id="gmap_canvas" src="https://maps.google.com/maps?q=Nasr%20city%20makram&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br/><a href="https://www.embedgooglemap.net"></a></div></div> <br/>
  @foreach(App\Models\Shelter::all() as $getusers)
<h6>Shelter No.:{{$getusers -> phone}}</h6>
@endforeach
</div> 
</div>


    </div>
    <div  class="content">
                <p class="source-org copyright" style="color:#fff !important;">© 2016 | All Rights Reserved Created By <a  href="http://templatestock.co"style="color: white;">Petology</a></p>
    </div>

</div>

        </main>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>

    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22051219.js"></script>
<!-- End of HubSpot Embed Code -->
</body>
</html>
