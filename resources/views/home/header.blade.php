<body>
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('dashboard')}}">
          <title>
            Lia Mart
          </title>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="{{ (Route::is('dashboard')) ? 'text-white bg-primary rounded' :''}} nav-link">
              <a class="nav-link" href="{{route('dashboard')}}">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="{{ (Request::is('toko')) ? 'text-white bg-primary rounded' :''}} nav-link">
              <a class="nav-link" href="{{url('toko')}}">
                Toko
              </a>
            </li>
            <li class="{{ (Request::is('mengapa')) ? 'text-white bg-primary rounded' :''}} nav-link">
              <a class="nav-link" href="{{url('mengapa')}}">
                Mengapa Kami
              </a>
            </li>
            <li class="{{ (Request::is('testimoni')) ? 'text-white bg-primary rounded' :''}} nav-link">
              <a class="nav-link" href="{{url('testimoni')}}">
                Testimoni
              </a>
            </li>
            <li class="{{ (Request::is('hubungikami')) ? 'text-white bg-primary rounded' :''}} nav-link">
              <a class="nav-link" href="{{url('hubungikami')}}">Hubungi Kami</a>
            </li>
          </ul>
          <div class="user_option">

            @if (Route::has('login'))

            @auth

            <a href="{{url('myorders')}}">
              Pesanan Saya
            </a>

            <a href="{{url('mycart')}}">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              [{{$count}}]
            </a>

            <form style="padding:10px" method="POST" action="{{ route('logout')}}">
              @csrf
              <input class="btn btn-danger" type="submit" value="Logout">
            </form>

            @else

            <li class="{{ (Request::is('login')) ? 'text-white bg-primary rounded' :''}} nav-link">
            <a href="{{url('/login')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            </li>

            <li class="{{ (Request::is('register')) ? 'text-white bg-primary rounded' :''}} nav-link">
            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>
                Register
              </span>
            </a>
            </li>

            @endauth
            @endif

          </div>
        </div>
      </nav>
</header>