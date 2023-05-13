@extends('layouts.app_admin')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

@foreach($animals as $an)
<br><br><br><br><br><br><br><br><br>
<div class="d-flex justify-content-center align-items-center">
<table class="table hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pet Image</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Health Status</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Accept</th>
      <th scope="col">Reject</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="{{$an -> photo}}"/></td>
      <td><p> name:{{$an  -> get_rid_name}}</p></td>
      <td> <p>Type:{{$an ->type}}&nbsp;&nbsp;</p></td>
      <td><p>health_status of the pet: {{$an -> health_status}}&nbsp;&nbsp;</p></td>
      <td>    <p> age of the pet: {{$an -> 	age}}&nbsp;&nbsp;</p>
</td>
<td>    <p>gender:{{$an -> 	gender}}&nbsp;&nbsp;</p></td>

      <td><a href="/accept/{{$an->get_rid_of_id}}" class="btn">Accept</a></td>
      <td><a href="/reject/{{$an->get_rid_of_id}}" class="btn">Reject</a>
</td>

    </tr>
    <tr>
  </tbody>
</table>

</div>

@endforeach

<br><br><br><br><br><br><br><br><br>

@endsection