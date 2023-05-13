@extends('layouts.app')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="{{ asset('css/marr.css') }}" rel="stylesheet">




<br/> <br/> <br/> <br/>








<h1>Marriages</h1>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="cardss">
@foreach(App\Models\Marriage::all() as $getm)

  <div class="card">
    <h2 class="card-title">{{ $getm-> marr_name}}&nbsp;{{ $getm-> type}}</h2>
    <img style="height:50%;" src={{ $getm-> photo}} alt="">
    <p class="card-desc"><strong> Age :</strong>{{ $getm-> age}}
        <br>
        <strong> Gender :</strong> {{ $getm-> gender}}
        <br>
        <strong> Health_Status :</strong>{{ $getm-> health_status}}
        <br>
        <strong> Description :</strong> {{ $getm-> description}}   </p>
        
        @if(Session::has('name'))
        <div id="arf">
        <form method="post" action="/send_message">
        <input id="val" type="text" name="msg" placeholder="Contact with the owner" />
        <input type="hidden" value="{{$getm->marriage_id}}" name="animal_id">
        <input type="hidden" value="{{$getm->user_id}}" name="to_user_id">
        @csrf

        
<button type="submit" id="bbt"  class="btn">Send
</button>
        </form>
        </div>
@endif

 
   
  </div>
  
  @endforeach
</div>
<br>
<br>
<br>
<br><br/><br/>




<div>
@if(session('id')!=0)
    <a href="/marrform" role="button"id="bbtt" class="btn"> if you can't find what suits your pet
        &nbsp;
    <span class="iconify" data-icon="ant-design:arrow-right-outlined" style="color: white;"></span>
</a>

@else
<a href="/test" role="button"id="bbtt" class="btn"> if you can't find what suits your pet
        &nbsp;
    <span class="iconify" data-icon="ant-design:arrow-right-outlined" style="color: white;"></span>
</a>
@endif
</div>

<br/><br/><br/><br/><br/><br/>


@endsection
