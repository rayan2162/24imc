<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Bootstrap CSS --}}
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    {{-- Bootstrap Icon --}}
     <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    
    {{-- css --}}
    <style>
        *{
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
    margin: 0;
    padding: 0;
}

.navbar.bg-transparent {
  background-color: transparent !important;
  box-shadow: none; /* Optional: removes any default shadow */
}

/* Infinite Banner */
.wrapper {
font-size: larger;;
font-weight: bold;
  max-width: 100%;
  overflow: hidden;
  background-color: yellow;
}

.marquee {
  white-space: nowrap;
  overflow: hidden;
  display: inline-block;
  animation: marquee 30s linear infinite;
}

.marquee p {
  display: inline-block;
}

@keyframes marquee {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(-50%, 0, 0);
  }
}
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app" class="flex-grow-1 d-flex flex-column">

        {{-- Navbar --}}
<nav class="navbar navbar-expand-sm navbar-light shadow-lg py-2" style="background-color: white; position: sticky; top: 0; z-index: 1000;">
  <div class="container">

    {{-- Left: Logo + Dept. Name --}}
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="/media/cu_logo.png" alt="Logo" width="30" height="40">
      <div class="ms-2 d-flex flex-column">
        <span class="text-dark fs-6">Department of Mathematics</span>
        <span class="text-dark fs-6">University of Chittagong</span>
      </div>
    </a>

    {{-- Toggler for mobile --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Collapsible menu --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      {{-- Centered nav links --}}
      <div class="mx-auto">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/') }}">Speakers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/') }}">Committee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/') }}">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/') }}">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/paper-submission') }}">Paper Submission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color: black" href="{{ url('/') }}">Contact</a>
          </li>
        </ul>
      </div>

      {{-- Right side --}}
      <ul class="navbar-nav ms-auto">
        @guest
          @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif
        @else
          <li class="nav-item">
            <a class="nav-link" style="color: black" href="{{ url('/dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>

    </div>
  </div>
</nav>




        <main class="flex-grow-1">
            @yield('content')
        </main>
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-white pt-4 pb-2 " style="
              background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                          url('media/Central_Shaheed_Minar_University_of_Chittagong.jpeg') center center / cover no-repeat;">
      <div class="container">
        {{-- Row 1: Name --}}
        <div class="row mb-2">
          <div class="col text-start">
            <h5 class="fw-bold mb-0">
              24<sup>th</sup> International Mathematics Conference
            </h5>
          </div>
        </div>

        {{-- Row 2: Address --}}
        <div class="row mb-0">
          <div class="col text-start">
            <p class="mb-0 small">
              <a class="text-white" href="https://www.bdmathsociety.org/">Bangladesh Mathematical Society</a><br />
                <a class="text-white" href="https://cu.ac.bd/mathematics/">Department of Mathematics, University of Chittagong</a><br />
                Chittagong - 4331, Bangladesh
                <br><br>
            </p>
            <a class=" text-decoration-none text-white mb-0 small" href="https://www.linkedin.com/in/rayanul-kader-chowdhury/">Developed by: Rayanul Kader Chowdhury Abid</a>
          </div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>
