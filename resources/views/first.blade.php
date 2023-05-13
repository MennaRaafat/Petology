@extends('layouts.app')
 
@section('content')
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/service.css') }}" rel="stylesheet">
<link href="{{ asset('css/accord.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          



 <br/>

<div class="discr">

<div class="parallax-section parallax1">
                   <div class="grid grid-pad">
                   <div class="col-1-1">
                   <div class="content content-header" >


                   <video autoplay="" class="video" loop="true" muted="true" playsinline="" poster="//cdn.shopify.com/s/files/1/0084/9664/4192/files/poster.6ee29fc4.jpg?v=1635275158" src="//cdn.shopify.com/s/files/1/0084/9664/4192/files/video.7a5c7464_4.mp4?v=4630894932288633577" ></video>
                  
                           
                  <svg class="curveUpColor2" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                  <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
                  </svg>
     <br/>

     <div class="donate">
                 
<button id="btn" onclick="audio.play();"  class="btn">
<span class="iconify" data-icon="iconoir:donate" style="color: white;"></span>  
</button>
<script type="text/javascript">
  const audio= new Audio();
  audio.src="./BQM9F4J-child-thank-you.mp3"
  
 
</script>

<script>
   document.getElementById("btn").addEventListener('click',function(){
    Swal.fire({
  title: 'Donate to guarantee a better life for our pets through the bank account 1503060525561500022',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url("nyan-cat.gif")
    left top
    no-repeat
  `
})
  })
</script>
                   <br/>

                   <div class='back'>
                   <h2 style="color :white">Take Care of Your Little Pet</h2>
                   <br/>
                   <p style="color :white">Your pet is need to be taken care of It and to make that You need Us.</p>
                   </div>
        
                   </div>
                   </div>
                   </div>
                   </div>
                   
                   <section id='sec' >      
           <div id='description' class='animate__animated animate__slideInUp'>
                <h2> Why to punish your pet and throw it in 
                 the  <br/>street            
                 and you can guarantee a better 
                life<br/> with Us by            
                getting Your pet to Us</h2>

@if(session('id')!=0)
<a  class="btn btn-ghost mx-15 h-15 " href="/getrid">Join Our Family</a>
@else
<a class="btn btn-ghost mx-15 h-15" href="/test">Join Our Family</a>
@endif
           </div>
           </section>   

           <br/>
           <br/>            

</div>


<section class="parent">


<div class="green">
<svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 110 110" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>

<br/><br/>
<div  class="card shadow-pop  mb-3" style="max-Width:25rem">
 <div  class="card-body">
     <b> <h4>Why do We love pets? </h4> </b>
    <p  class="card-text">Animals are great listeners. Ever have a cat or dog who was waiting for you at the door well before you came around the corner? <br/> They know when you’re coming home even from a block away, whether it’s from the sound of your car engine to the cadence of your footsteps, thanks to their highly developed sense of hearing.</p></div>

  </div>

</div>

<div class="shelter">

<div class="disc">
    <h3><b>We are dealing with New Begining Shelter</b></h3>
    <br/> <br/>
    <p>This shelter is the most important shelter in Egypt and if you need a better life for a Pet We recommend for you this shelter.</p>
    <br/>
    @foreach(App\Models\Shelter::all() as $getusers)

    <h6><b>Phone Number : </b>{{$getusers -> phone}}</h6>
    <br/>
    <h6><b>Address: </b>{{$getusers -> address}}</h6>
    @endforeach
    <br/>
    <br/>
    <br/>

</div>


<div class="wrapper">
<div class="slideshows">
  <div class="slideshow hero">
    <div class="slides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>

    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow contrast before">
    <div class="slides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>
    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow contrast after">
    <div class="slides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>
    </div>
  </div>

</div>
  </div>

</div>


</section>


<div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<svg class="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>

               <!-- Quotes Section --> 
     <div class="wrap services-wrap" >
    <section class="grid grid-pad">
      <div class="col-1-1 service-box cl-client-carousel-container">
        <div class="content">
        <div class="cl-client-carousel">
                                
     <div class="item client-carousel-item"> 
                                    
         <!-- Start of item --> 

<div class="quotes-icon">
        <h1><span class="iconify" data-icon="bxs:quote-alt-left"></span></h1>
    </div>
    <p>“There’s a saying. If you want someone to love you forever, buy a dog, feed it and keep it around.” </p>
    <h4>-Dick Dale, American Musician</h4>
</div>

     <!-- End of item --> 

                                                    </div> 
                       </div> 
                   </div> 
               </section> 
            </div> 
             <!-- End Quotes Section --> 

              <!-- CurveDown --> 

             <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg> 
 

</div>

<br><br><br><br><br>

  
<h1 style="text-align:center;">Services</h1>
<br><br>


<style>
.mySlides {
  display:none;

}
.w3-content.w3-display-container{
  justify-content: center;
  align-items: center;
  text-align: center;

}
.w3-button.w3-display-left.w3-black{
  justify-content: center;
  align-items: center;
  text-align: center;
 margin-left:48%;
}
.w3-large.w3-container.w3-padding-16.w3-black{
  /* position: absolute; */
  z-index:2;
  /* margin-left:48%; */
  justify-content: center;
  align-items: center;
  text-align: center;
}
</style>



<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="https://images.unsplash.com/photo-1601758176175-45914394491c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:60%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
  <h3 style="text-decoration:underline;">Get Rid of Your Pet</h3> 
  <p >Instead of setting Your pet free to the street You can get Him to Us.</p> 
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="https://images.unsplash.com/photo-1601758177266-bc599de87707?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGltYWdlcyUyMGZvciUyMHR3byUyMGRvZ3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" style="width:60%">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
  <h3 style="text-decoration:underline ;" >Buy a Pet</h3> 
   <p >We offering for You the pet which  You need with the best price.</p>
  </div>
</div>

<div class="w3-display-container mySlides">
<img  src="https://images.unsplash.com/photo-1601758066233-2dc181fb3380?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGltYWdlcyUyMGZvciUyMHR3byUyMGRvZ3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" style="width:60%">
 
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
  <h3 style="text-decoration:underline ;" >Marriage</h3>
  <p >We help You in finding a soulmate for Your pet.</p>
  </div>
</div>

<div class="w3-display-container mySlides">
<img  src="https://images.unsplash.com/photo-1484190929067-65e7edd5a22f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:60%">  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
<h3 style="text-decoration:underline ;" >Trainer</h3>
<p >You can now reserve a Trainer to  train Your pet.</p>
  </div>
</div>

<div class="w3-display-container mySlides">
<img src="https://media.istockphoto.com/photos/holding-a-cat-picture-id1128072738?k=20&m=1128072738&s=612x612&w=0&h=cqhNCfuBmaDTEDSoka7DSTNz4RogI0z9bNm1t1bCG7g=" style="width:60%">  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
<h3 style="text-decoration:underline ;">Doctor</h3>
 <p >You can now reserve a Doctor to monitor Your pet's health conditions.</p>
  </div>
  </div>

  <div class="w3-display-container mySlides">
  <img  src="https://media.istockphoto.com/photos/cute-little-girl-feeding-her-puppy-picture-id470406795?b=1&k=20&m=470406795&s=170667a&w=0&h=XZvUcdX183ZNT21opZFNGC_5XYNFrW5z7-W0tMsSwJE=" style="width:60%"> <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
  <h3 style="text-decoration:underline ;">Store</h3>
  <p>You can buy all Your pet's needs from Us. </p>
  </div>
  </div>

  <div class="w3-display-container mySlides">
  <img src="https://media.istockphoto.com/photos/young-woman-playing-with-her-dog-outdoors-picture-id1292567129?b=1&k=20&m=1292567129&s=170667a&w=0&h=__Lr70E8DbCjnQWlpiu1kXU3p6HHiuyCcIEZXfVYAlQ=" style="width:60%"> <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
<h3 style="text-decoration:underline ;">Online Courses</h3>
 <p >We are offering online courses for free to know how to deal with <br/>Your pet.</p>
  </div>
  </div>




</div>

<button class="w3-button w3-display-left w3-black btn" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black btn" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</section>





<div id="counter">

<br/>  <br/>  <br/>  <br/>  <br/>

<div class="parallax-section parallax2">                    
  <div class="wrap">
  <section class="grid grid-pad callout">
      <div class="row">
      <div class="col-1-3 d-flex">
      <div id="cofm">
        <div class="content" >
        <div class="info-counter">
        <div class="info-counter-row">

<br/> <br/> </div>

<div class="info-counter-content">
<h5 class="info-counter-number"><br/> <br/>
<!-- <span class="iconify "  style="margin-left: -5%; margin-top:-50%;" data-icon="ph:users"></span> -->


<div class="value " style="margin-top: 1%; margin-left:10%;" akhi="1000">   0   </div>
  <span class="info-counter-units"> Happy Family</span>
</h5> 
<div class="info-counter-text"  > Average weekly of happy family </div>
</div> </div> </div> </div>

<div class="col-1-3 d-flex">
<div id="conpt">
<div class="content" >
<div class="info-counter">
<div class="info-counter-row">
  
<br/> <br/> </div>

<div class="info-counter-content ">
<h5 class="info-counter-number"><br>
  <div class="d-flex" style="margin-left: 50%; margin-top: 13%; text-align:center;">
<!-- <span class="iconify" style="margin-left: -30%;margin-top: -5%;" data-icon="fluent:syringe-20-regular" style="color: white;"></span> -->
  <div class=" value" style="margin-top: -5%;" akhi="500">0</div>
  </div>
  <span class="info-counter-units"> Cured Pets</span>
</h5>
<div class="info-counter-text" style="width: 270px;" >Average weekly of cured pets</div>
</div> </div> </div> </div> </div>

<div class="col-1-3 d-flex">
  <div id="concl">
<div class="content" >
<div class="info-counter">
<div class="info-counter-row">
  <i class="info-counter-icon icon-users"></i>
<br/> <br/> </div>

<div class="info-counter-content">
    <h5 class="info-counter-number"><br>
    <!-- <span class="iconify" style="margin-left: -25%;" data-icon="akar-icons:face-happy" style="color: white;"></span> -->
    <div class="value " style="margin-top: 50%; margin-left:17%;" akhi="1000">   0   </div>
    <span class="info-counter-units"style="margin-right: 80%; vertical-line:bottom; margin-top:50%;"> Customers</span>
    </h5>
<br/>
  <div class="info-counter-text" style="margin-top:-27%;width: 270px;">Average yearly of happy clients</div>
</div>  </div>  </div>  </div> </div> </section> </div>  </div>

<svg class="curveUpColor curveGrey" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
</svg>
</div>



<br/><br/> 
<br/> <br/><br/> <br/><br/> 
<br/> <br/><br/> <br/><br/> 
<br/> <br/><br/> <br/><br/> 



<div class="stories">

<br/> <br/><br/> <br/><br/> 
<br/> <br/><br/> <br/><br/> 
<br/> <br/><br/> <br/><br/> 


<h1 style="margin: auto;">Success Stories</h1>

<br/> <br/><br/> <br/>

<div class="card-group ">

<div class="row ">
    
<div class="col-3">
  <div class="card border-0 success ">
    <img class="card-img-top" src="https://media.istockphoto.com/photos/young-man-is-playing-with-a-dog-and-do-selfie-picture-id1300658241?k=20&m=1300658241&s=612x612&w=0&h=wOsIy3BqboesWLm9BkUdpyTRnQS6zSzNeh9zQakxbxk=" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title" >Jake Prosacco & Roy</h5>
      <p class="card-text par">Before Buying Roy I was lazy and was afraid to get a pet to my home and i took months to take this step and buy from this site My dog Roy. I am happy because I took this step because Roy make me and my life better. </p>
      
      <p class="card-text par"><small class="text-muted">Last updated 3 Days ago</small></p>
    </div>
  </div>
  </div>


  <div class="col-3 center">
  <div class="card rounded-9 border-0 success ">
    <img class="card-img-top mw-230" src="https://media.istockphoto.com/photos/portrait-of-father-mother-and-son-having-picnic-on-the-lawn-posing-picture-id1285465160?k=20&m=1285465160&s=612x612&w=0&h=Gh8dcK9gb77hEAHAtPhxYJ1Rh07TpuIy0roHTJ1-M3U=" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Maxie Terry & Roze</h5>
      <p class="card-text"> Roze now is the most important partner in Our family She taught all of Us the meaning of love She made Our life much better. She helps My wife in the home's work. I am grateful to buy Roze from Petology. </p>  <br/>
      <p class="card-text"><small class="text-muted">Last updated 2 Weeks ago</small></p>
    </div>
  </div>
  </div>

  <div class="col-3">
  <div class="card success">
    <img class="card-img-top" src="https://media.istockphoto.com/photos/young-woman-with-dog-picture-id1060529042?k=20&m=1060529042&s=612x612&w=0&h=Aufce7ZQETWvxwUgcB_09Crtd7LkhR1348C6LD8VG2c=" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Whitney Stanton & Catcher</h5>
      <p class="card-text">Catcher when I bought Him I was affraid because He is an old dog and He may not adapt quickly with Me but I was wrong He adapted with Me and loves me and He make My personality be better. </p>
      <br/>
      <p class="card-text"><small class="text-muted">Last updated Month ago</small></p>
    </div>
  </div>
</div>
</div>

<br/><br/><br/><br/>


<div class="row">
<div class="col-3">
  <div class="card success">
    <img class="card-img-top" src="https://media.istockphoto.com/photos/arent-you-so-cute-picture-id522185081?b=1&k=20&m=522185081&s=170667a&w=0&h=AGrWqXyQqHqXnxjO2IRVR0J6GGCHz_o1fP_Ygu0EuJw=" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Meaghan Harvey & Fluffy</h5>
      <p class="card-text">I took the decision to buy Fluffy because I was lonely and need to fill my life with Her. Fluffy made Me know how to deal with People and caring about the other.</p>
     
      <p class="card-text"><small class="text-muted">Last updated 2 Month ago</small></p>
    </div>
  </div>
  </div>

  <div class="col-3 center">
  <div class="card success">
    <img class="card-img-top" src="https://media.istockphoto.com/photos/mother-and-son-feeding-ibes-in-the-park-little-egret-cattle-egret-picture-id1290615732?k=20&m=1290615732&s=612x612&w=0&h=1-2JfoqoFxhibRRpY18EfCCXUB78y5LNBddyARN52Es=" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Marcella Marvin & Beno</h5>
      <p class="card-text">When I take the decision to buy Beno all of My friends told Me what is the useful of buying a bird and raising it But I insisted on my decision and buy Beno. I am greatful that I buy Beno beacuse I learn how to make things without waiting for a return. </p> 
      <p class="card-text"><small class="text-muted">Last updated 3 Month ago</small></p>
    </div>
  </div>
</div>

<div class="col-3">
  <div class="card success">
    <img class="card-img-top" src="https://photos.demandstudios.com/getty/article/238/42/sb10068644e-001.jpg" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Rosalind Bradtke & Bona</h5>
      <p class="card-text"> Bona taught Me to be a responsible person and to love and care. Watching Her make me a happier person and feeling peace.</p><br/>
      <p class="card-text"><small class="text-muted">Last updated 5 Month ago</small></p> 
    </div>
  </div>
</div>
</div>
</div>

<br/>  <br/>  <br/>  <br/>

<div class="choose d-flex">

<div class="but d-flex">
<a  onclick="aud.play();" style="color:white;text-decoration:none;" href="/buy" class=" btn hvr-pulse"> <strong class="text-align-center align-items-center justify-content-center" >Buy Animal</strong>  &nbsp; <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/40/000000/external-pet-gig-economy-flaticons-flat-flat-icons-2.png"/></a> 
  
  <script type="text/javascript">
  const aud= new Audio();
  aud.src="./kanarienvogel.mp3"
  
 
</script>
</div>



<div class="but1">
@if(session('id')!=0)
<a onclick="audi.play();"style="color:white;text-decoration:none;" class=" btn hvr-pulse" href="/getrid" style="width: 203px"> <strong class="text-align-center align-items-center justify-content-center">Get Rid</strong>  &nbsp;  &nbsp; <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/37/000000/external-animal-stay-at-home-flaticons-lineal-color-flat-icons.png"/></a>
  @else
  <a onclick="audi.play();"style="color:white;text-decoration:none;" class=" btn hvr-pulse" href="/test" style="width: 203px"> <strong class="text-align-center align-items-center justify-content-center">Get Rid</strong>  &nbsp;  &nbsp; <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/37/000000/external-animal-stay-at-home-flaticons-lineal-color-flat-icons.png"/></a>
    @endif
  
  <script type="text/javascript">
  const audi= new Audio();
  audi.src="./Cat-sound-meow.mp3"
  
 
</script>
</div>
</div>

</div>


<div class="choose">

<br/><br/><br/><br/><br/><br/>

<h3 style="margin:auto;">Why to Choose Petology?</h3>
<br/><br/>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
  New Home for Your Pet      </button>
    </h2>

           
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> Why to set your pet to the street and make him homelessness while when need to get rid of him we can take him and gurantee a better life for him by only contacting with Us.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
     Easily Finding a Soulmate For Your Pet      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          Why to waste your time in searching for a soulmate for your pets while We are providing for you this service by only one click.     </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Premium Pet Care for Your Friend
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">We provide for your pet the best care for his life like a Doctor monitors his health conditions, Trainer to train your pet to help You as a owner in making the pet adapt quickly on your lifestyle and online store to get all of your pet's needs and all of this with a lower price than other places.  </div>
    </div>
  </div>
</div>

</div>


<div>  
 
 <br/><br/><br/>



        <div class="about">
            <h2 id="about">About Us</h2>
<br/>
<ul class="nav nav-pills" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="goal-tab" data-bs-toggle="tab" data-bs-target="#goal" type="link" role="tab" aria-controls="goal" aria-selected="true">Goal</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="link" role="tab" aria-controls="vision" aria-selected="false">Vision</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="false">Mission</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="goal" role="tabpanel" aria-labelledby="goal-tab">Every year hundreds of animals such as dogs or cats become homeless for many reasons.<br/> Our mission is to find the homeless animals around the country and give them a better life.<br/> To reduce homelessness by 10% within a year.</div>
  <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">Encourage each animal buddy to have a humane and compassionate future.</div>
  <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab"> We are an egyption online portal for animals. Our mission is to save, rescue , and shelter animals <br/> in need, to ensure pet health through education , awareness, and lowest prices for all categories <br/> of animal lovers , and to create a community where human- animal relationships are valued and<br/> developed.

</div>
</div>

<br/><br/><br/><br/>


<div class="contact"> 
<div class="container">

<div id="contact">

<h2 id="co">Contact US</h2>
</div>

<div class="d-flex justify-content-center align-items-center">
<div >
  <form id="contactForm" method="POST" action="/contact">
  @csrf
  <input type="hidden" name="users_id" value="users_id">
    <div >
    
      <label class="form-label" for="name">Name</label>
      <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
    </div>

<br/>
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" name="email" id="emailAddress" type="email" placeholder="Email Address" />
    </div>

    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" name="message" id="message" type="text" placeholder="Message" style= "height : 10rem"></textarea>
    </div>

    <div class="d-grid">
      <!-- <button class="btn" id="con" type="submit">Submit</button> -->
      <input type="submit" value="Submit" class="btn" id="con">
    </div>

  </form>
  </div>

  <div  id="us">
      <img src="https://thumbs.dreamstime.com/b/ashen-cat-black-tie-holds-phone-text-contact-us-white-background-isolated-cat-ashen-holds-phone-text-contact-us-241018938.jpg" />
  </div>
  </div>
</div>

<br/> <br/> <br/> <br/>

</div>



    @endsection

