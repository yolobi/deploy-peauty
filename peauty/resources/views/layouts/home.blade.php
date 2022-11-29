<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Home page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  {{--
  <link rel="stylesheet" href="{{ asset('css/about.css') }}" /> --}}
  {{--
  <link rel="stylesheet" href="{{ asset('css/scan-style.css') }}" /> --}}
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="sidebar">
    <div class="profile">
      <div class="logo_name">Username</div>
      <i class="bx bx-menu" id="btn" style="font-size: 0.9cm"></i>
    </div>
    <ul class="nav-list" style="margin-left: -30px">
      {{-- <li>
        <i class="bx bx-search" style="font-size: 0.7cm"></i>
        <input class="teks" type="text" placeholder="Search..."
          style="background-color: rgb(218, 177, 177); color: #fff" />
        <span class="tooltip" style="color: #fff">Search</span>
      </li> --}}
      <li>
        <a href="{{ route('dashboard') }}" @class(["active"=> request()->routeIs('dashboard')])>
          <i class="bx bxs-home" style="font-size: 0.7cm"></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip" style="color: #fff">Home</span>
      </li>
      <li>
        <a href="{{ route('user.profil') }}" @class(["active"=> request()->routeIs('user.*')])>
          <i class="bx bxs-user" style="font-size: 0.7cm"></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip" style="color: #fff">Profile</span>
      </li>
      <li>
        <a href="{{ route('about') }}" @class(["active"=> request()->routeIs('about')])>
          <i class="bx bxs-error-circle" style="font-size: 0.7cm"></i>
          <span class="links_name">About</span>
        </a>
        <span class="tooltip" style="color: #fff">About</span>
      </li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
          <i class="bx bx-log-out" style="font-size: 0.7cm"></i>
          <span class="links_name">Log out</span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </a>
        <span class="tooltip" style="color: #fff">Log out</span>
      </li>
      <li class="logo" style="bottom: 0.4cm">
        <div class="logo-details">
          <img src="{{ asset('images/logo.png') }}" alt="" />
        </div>
      </li>
    </ul>
  </div>

  <main class="home-section">
    @yield('content')
  </main>
  {{-- <section class="home-section">
    <div class="container-fluid" style="border-radius: 30px">
      <div class="row align-items-center justify-content-center vh-100">
        <div class="col-lg-9">
          <div class="shadow p-3 mb-10 bg-body" style="border-radius: 30px">
            <div class="text-center">
              <img src="C:\Users\HP\Documents\Semester 7\MPPL\Projek\src\Nothing Found.png" alt=""
                style="height: 4.5cm" />
              <h3>You haven’t taken the test</h3>
            </div>
            <div class="tombol">
              <button type="button" class="btn btn-lg btn-custom">
                <img src="C:\Users\HP\Documents\Semester 7\MPPL\Projek\src\Face ID.png" alt=""
                  style="height: 1.4cm; margin-left: -0.13cm" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <script src="{{ asset('js/home.js') }}"></script>
  <script src="{{ asset('js/about.js') }}"></script>
  <script src="{{ asset('js/scan.js') }}"></script>
</body>

</html>