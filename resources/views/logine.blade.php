@extends('layouts.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
<link href="{{ asset('css/position.css') }}" rel="stylesheet">




<div class="position">

<div class="login-pr">
        <img src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png" class="avatar" />
        <h2>Login </h2>

        <div>
 @if($errors->any())
   @foreach($errors->all() as $error )
 <div class="alert alert-danger" role="alert">
{{$error}}
</div>
@endforeach
@endif
</div>
        <form method="POST" action="/emp_log">
                        @csrf

                        <p>Email</p>
             <input type="email" placeholder="Please enter your email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          

              <p>Password</p>
             <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Please enter your password"/>

             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            


                                <div class="col-lg-6 ">
  <select name="position" style="background-color:#7DAFAF ; color:white;" id="in2" class="form-select" aria-label="Default select example">
  <option selected>Position</option>
  <option value="Doctor">Doctor</option>
  <option value="Trainer">Trainer</option>
</select>
  </div>

                        <input type="submit" value="Login"/>


                        
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                               

                                </form>

                                </div>
                                </div>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


@endsection
