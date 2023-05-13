@extends('layouts.app_admin')
 
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>


<br><br><br><br><br>





<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">User id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contact as $contacts)

    <tr>
      <td>{{$contacts -> users_id}}</td>
      <td>{{$contacts  -> name}}</td>
      <td>{{$contacts -> email}}</td>
      <td>{{$contacts -> message}}</td>

    </tr>
    @endforeach

    
  </tbody>
</table>

@endsection