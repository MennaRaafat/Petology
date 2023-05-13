@extends('layouts.app_admin')
 
 @section('content')
 
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link href="{{ asset('css/rate.css') }}" rel="stylesheet">
 <link href="{{ asset('css/accdetails.css') }}" rel="stylesheet">


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
 

 
 
 <br><br><br><br><br><br><br> 
 
 
 
  <section class="inner-sec">
         <div class="container">
             <h1 style="text-align:center;">Food Details</h1>
             <div class="row">
                 <div class="col-md-5">
 
                     <figure class="product-img">
                         <img src={{ $Food_details->photo}}>
                     </figure>
                 </div>
                 <div class="col-md-7">
                     <div class="product-content-sec">
                     <h3> <strong> name :</strong> {{ $Food_details-> food_name}}</h3>
     <br>
 
     <p> <strong> price :</strong>{{ $Food_details->price}}&nbsp;L.E</p>
     <br>
 
     <p> <strong> type :</strong>{{ $Food_details->type}}</p>
     <br>
 
     <p> <strong> description :</strong>{{ $Food_details->description}} </p>
     <br>
     <p> <strong> expire date :</strong>{{ $Food_details->expire_date}} </p>

     
<br><br><br>

<div class="d-flex text-align-center align-items-center">
      <a role="button" href="/updatefoodform/{{$Food_details->food_id}}" class="tt" style=" width:200px; text-decoration:none;"  >Update</a>
   
      <a role="button" href="/deletefood/{{$Food_details->food_id}}" class="tt" style=" width:200px; text-decoration:none;"  >Delete</a>
  </div>
    

        <br> </div> </div> </div> </div>

         @include('sweetalert::alert')




<!-- </div> -->
</div>
<!-- <br> -->



          
     </section> 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 @endsection 
 
 
 
 
 
 
 
 