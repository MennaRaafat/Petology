@extends('layouts.app_admin')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

<br><br><br><br><br>




<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Trainer id</th>

      <th scope="col">Trainer name</th>
      <th scope="col">Counter</th>

    </tr>
  </thead>
@foreach($res_tr as $value)

  <tbody>

    <tr>

      <td>{{$value -> tr_id}}</td>
      <td>{{$value -> trainer_name}}</td>

      <td>{{$value -> trainer_price}}</td>

    </tr>
@endforeach
<tr>
<td><h3>Total Amount = {{$Sum}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Total Reservations ={{count($res_tr)}}</h3> </td>
</tr>
</tbody>

</table>


@endsection