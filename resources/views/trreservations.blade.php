@extends('layouts.app_emp')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/getrid.css') }}" rel="stylesheet">

<br><br><br><br><br>




<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Owner's Name</th>

      <th scope="col">Date</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Subject</th>

    </tr>
  </thead>
@foreach($view_res as $trs)

    <td>Owner's name:{{$trs  -> name}}</td>
    <td>date:{{$trs -> date}}</td>
    <td>age of the pet:{{$trs -> age}}</td>
    <td>gender of the pet: {{$trs -> gender}}</td>

    <td>subject : {{$trs -> subject}}</td>


    <tbody>


@endforeach
</tbody>

</table>
<br><br><br><br><br>
<br><br><br><br><br>
<div class="Footerr">

<br/><br/>

<div class="row drp ">


        <div  class=" fr col-3" >
            <div>
        <a href="#0" class="logo">Petology</a><br/> <br/></div>
        <p id="fot">Encourage each animal buddy to have a humane and compassionate future.</p>  <br/>  <br/>   <br/> <br/>
 
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
<h5>Shelter No.: {{$getusers -> phone}}</h5>
@endforeach
</div> 
</div>


    </div>
    <div  class="content">
                <p class="source-org copyright">© 2016 | All Rights Reserved Created By <a  href="http://templatestock.co"style="color: white;">Petology</a></p>
    </div>

</div>

@endsection