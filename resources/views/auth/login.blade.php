@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light" id="bgd">
<div class="container-fluid">
<a class="navbar-brand"href="#">Petology</a>
<button class="navbar-toggler"type="button"data-bs-toggle="collapse"data-bs-target="#navbarNavDropdown"aria-controls="navbarNavDropdown"aria-expanded="false"aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse"id="navbarNavDropdown">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link active"aria-current="page"href="/">Home</a>
</li>







 
<!-- Authentication Links -->
         @guest
                            @if (Route::has('login'))
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle"href="#"id="navbarDropdownMenuLink"role="button"data-bs-toggle="dropdown"aria-expanded="false">
            Sign In
</a>
<ul class="dropdown-menu"aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item" href="/login">Login as a user</a></li>
<li><a class="dropdown-item" href="/logine">Login as an Employee</a></li>
</ul>
</li>
                            @endif
 
                            @if (Route::has('register'))
<li class="nav-item">
<a class="nav-link"href="/register">Sign Up</a>
</li>
                            @endif
                         
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle"href="#"id="navbarDropdownMenuLink"role="button"data-bs-toggle="dropdown"aria-expanded="false">
Services
</a>
<ul class="dropdown-menu"aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item"href="/buy">Buy pets</a></li>
<li><a class="dropdown-item"href="/getrid">Getrid of your pet</a></li>
<li><a class="dropdown-item"href="#">Marriage</a></li>
<li><a class="dropdown-item"href="#">Doctors</a></li>
<li><a class="dropdown-item"href="#">Trainers</a></li>
<li><a class="dropdown-item"href="#">Store</a></li>
<li><a class="dropdown-item"href="/course">Online Courses</a></li>

</ul>
</li>





<li class="nav-item">
<a class="nav-link"href="#">Contact us</a>
</li>
<li class="nav-item">
<a class="nav-link"href="#">About us</a>
</li>
                        @else

<li class="nav-item dropdown">
<a id="navbarDropdown"class="nav-link dropdown-toggle"href="#"role="button"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false"v-pre>
<!-- {​​​​​​​{​​​​​​​ Auth::user()->name }​​​​​​​}​​​​​​​ -->
</a>
 
<div class="dropdown-menu dropdown-menu-end"aria-labelledby="navbarDropdown">
<a class="dropdown-item"href="{​​​​​​​{​​​​​​​ route('logout') }​​​​​​​}​​​​​​​"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                                        {​​​​​​​{​​​​​​​ __('Logout') }​​​​​​​}​​​​​​​
</a>
 
<form id="logout-form"action="{​​​​​​​{​​​​​​​ route('logout') }​​​​​​​}​​​​​​​"method="POST"class="d-none">
                                        @csrf
</form>
</div>
</li>
                        @endguest
 
</ul>
</div>
</div>
</nav>
<div class="user">
<br/> <br/><br/> <br/><br/> <br/>

    <div class="login-form">
        <img src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png" class="avatar" />
        <h2>Login </h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <p>Email</p>
             <input type="email" placeholder="Please enter your email"
             class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#2F8F9D ;">{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                                <p>Password</p>
             <input type="password" placeholder="Please enter your password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password"/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#2F8F9D ;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            
                         <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input  class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="color:#2F8F9D ;font-weight:bolder;" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Login"/>

                                @if (Route::has('password.request'))
                                    <a  style="color:#2F8F9D ;font-weight:bolder;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
