@extends('layouts.app')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

<link href="{{ asset('css/course.css') }}" rel="stylesheet">


    <br><br><br><br><br>
  <center><h1>Online Courses</h1></center>
<br><br>
<section>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col">
      <div class="card h-200" id="c1">
        <iframe class="v1"  width="352" height="315" src="https://www.youtube.com/embed/Yzv0gXqoCkc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h3 class="card-title">Pet Care Basics :</h3>
          <p class="card-text">Just like kids need their parents, pets need people to take care of their basic needs.</p>
        </div>
        <!-- <br><br><br><br> -->
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-200" id="c2" >
        <iframe class="v1" width="483" height="315" src="https://www.youtube.com/embed/3VUytGO-BC0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h3 class="card-title">Taking Care of Pets: </h3>
          <p class="card-text">Meet Paisley the golden retriever, Ms. Brenna's dog! We’ll practice some pet care activities
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 30 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" id="teach" >
        <iframe class="v1"  width="483" height="315" src="https://www.youtube.com/embed/pKosbOawGSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h3 class="card-title">Teaching Kids to Care for Pets
          </h3>
          <p class="card-text"> Is teaching Mayta how to take care of pets. Owning a pet comes with responsibilities, jobs
            </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated an hour ago</small>
        </div>
      </div>
    </div>
  </div>


  <br><br>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card " id="c4">
        <iframe class="v1" width="483" height="315" src="https://www.youtube.com/embed/ed22MIDGVr8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>          
        <div class="card-body">
          <h3 class="card-title">Caring for Your Pet
          </h3>
          <p class="card-text">this video contains the most of information needed about pets</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 2 hours ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card " id="c5">
        <iframe class="v1" width="483" height="315" src="https://www.youtube.com/embed/yvJRQCV7zJI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
        <div class="card-body">
          <h3 class="card-title">The Best Pets For Kids : </h3>
          <p class="card-text">Quick information about the best pets for kids, with pros and cons of each pet. 

          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 hours ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" id="c6">
        <iframe class="v1" width="483" height="315" src="https://www.youtube.com/embed/DCmaoBujsAI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        <div class="card-body">
          <h3 class="card-title">10 Mistakes That Shorten Your Pet's Life

          </h3>
          <p class="card-text">What can be bad for your pets? What is harmful to them? 🐶🐱 

            </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 days ago</small>
        </div>
      </div>
    </div>
  </div>




  
  <br><br>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card" id="c7">
        <iframe class="v1" width="483" height="315" src="https://www.youtube.com/embed/ltg2J4geVbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        <div class="card-body">
          <h3 class="card-title">15 Things You Should Know About Dogs

          </h3>
          <p class="card-text">Whether you are a long time dog owner or are considering bringing one into your family for the first time, there are some things about our canine friends you should know  to make your life with him more easier
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 5 days ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" id="c8">
        <iframe class="v1" width="483" height="315" src="https://www.youtube.com/embed/js6IrC_6VcM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        <div class="card-body">
          <h3 class="card-title">40 Awesome Cat Facts: </h3>
          <p class="card-text">Cats have lived with humans for more than 4,000 years but we still don’t know everything about them because they are really mysterious creatures. Did you know that cats can make up to 100 different sounds?


          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated a week ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <iframe class="v1" width="483" height="315" src="https://www.youtube.com/embed/awWr2_dfcuk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        <div class="card-body">
          <h3 class="card-title">All About Birds 🦚️ 🐧🦅


          </h3>
          <p class="card-text">Facts for children about the special characteristics of birds! Do all birds fly? Well, what else do they have feathers for? In fact not all of them can fly but some of them can dive incredibly deep or run extremely fast!


            </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 2 weeks ago</small>
        </div>
      </div>
    </div>
  </div>
  <!-- <div>
    <button id="btn" onclick="audio.play();">sub</button>
<script type="text/javascript">
  const audio=new Audio();
  audio.src="./song.mp3";

</script>

</div> -->

</section>



<!-- 
<script>

  var loader =document.getElementById("preloaded");
  window.addEventListener("load",function(){

    loader.style.display = "none";
  })
  </script> 

<iframe id="preload" width="560" height="315" src="https://www.youtube.com/embed/3BAmexqZjKM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
<br><br>

  <!-- <div class="Footerr">

<br><br>

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

</div> -->


@endsection
