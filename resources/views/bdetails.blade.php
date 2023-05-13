@extends('layouts.app')
 
@section('content')

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/fu.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="{{ asset('css/buydetails.css') }}" rel="stylesheet">




<br><br><br><br>




 <section class="inner-sec">
        <div class="container">
            <h1 style="text-align:center;">Buy Now</h1>
            <br><br>
            <div class="row d-flex">
                <div class="col-md-4">

                    <figure class="product-img">
                        <img src= "{{ $buy_animal -> photo }}" >
                    </figure>
                </div>
                <div class="col-md-7">
                    <div class="product-content-sec">
                    <h3> <strong> Type :</strong> {{ $buy_animal-> animal_name}}</h3><br>

                    <p style="line-height:1.6rem ;"> <strong>Description :</strong>{{ $buy_animal->description}}</p>

    <p style="line-height:1.6rem ;"> <strong> Health Status :</strong>{{ $buy_animal->health_status}}</p>
    

    <p> <strong> Age :</strong>{{ $buy_animal->age}}</p>

    <p> <strong> Gender :</strong>{{ $buy_animal->gender}}</p>
    

    <p> <strong> Price :</strong>{{ $buy_animal->price}} L.E</p>

    @if(session('id')!=0)
      <a href="/ppay/{{$buy_animal->animal_id}}" id="labradour" class="btn buy-btn ">Buy Now</a>
    <a href="#" id="reserve" class="btn buy-btn">Reserve</a>             
    
    @else
      <a href="/test" onclick="test();" class="btn buy-btn">Buy Now</a>
    <a href="/test" class="btn buy-btn">Reserve</a>     
    
  @endif        
  </div>
                </div>

                </div>
            </div>
        </div>
        @include('sweetalert::alert')
        <br>
    </section> 

<script>
   document.getElementById("reserve").addEventListener("click",function(){
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success <style="margin:50%"></style>',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: true
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You will reserve this pet!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, reserve it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Reserved!',
      'The pet is reserved.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'The pet is not reserved :)',
      'error'
    )
  }
})
   })
  
</script>












@endsection 







