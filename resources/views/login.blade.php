@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>


<br/> <br/><br/><br/> <br/><br/>


<div class="user">
<br/> <br/><br/> <br/><br/> <br/>
<br/> <br/><br/>

    <div class="login-form">
        
        <img src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png" class="avatar" />
        <h2>Login </h2>
        @if($errors->any())
   @foreach($errors->all() as $error )
 <div class="alert alert-danger" role="alert">
{{$error}}
</div>
@endforeach
@endif
                    <form method="POST" action="/singin">
                        @csrf

                        <p>Email</p>
             <input type="email" placeholder="Please enter your email"
             class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus/>

                                <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#2F8F9D ;">{{ $message }}</strong>
                                    </span>
                                @enderror -->
                          
                                <p>Password</p>
             <input type="password" placeholder="Please enter your password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password"/>
<!-- 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#2F8F9D ;">{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            

                        <input type="submit" value="Login"/>

                                @if (Route::has('password.request'))
                                    <a  style="color:#2F8F9D ;font-weight:bolder;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                <!-- <a href="/re">already have an account ?</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>

@endsection
