
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #afcae8;">
    <div class="container-fluid">
        <a class="navbar-brand me-auto mb-2 mb-lg-0" href="{{ route('index') }}">Amazing E-Book</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
            </ul>
            @if (Session::has('user'))
                <a href="{{ route('logout') }}">
                    <button class="btn btn-outline-secondary" type="button" style="background-color: #f8de55" >Logout</button>
                </a>
            
            @else
                <a href="{{ route('login') }}">
                    <button class="btn btn-outline-secondary" type="button" style="background-color: #f8de55" >Login</button>
                </a>
                <a href="{{ route('register') }}">
                    <button class="btn btn-outline-secondary ms-2" type="button" style="background-color: #f8de55" >Register</button>
                </a>

            @endif
        </div>
    </div>
</nav>

@if (Session::has('user'))
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f8de55; justify-content:center; align-items:center; text-align: center;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="background-color: #f8de55; justify-content:center; align-items:center; text-align: center; margin-left:500px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ ('/home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/order_list">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endif