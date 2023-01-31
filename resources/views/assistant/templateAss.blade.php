<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="./css/style.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Elegant</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href=""><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
              

                <li>
                  {{-- <a class="show-cat-btn" href="##">
                      <i class="fa-solid fa-user-doctor"></i> &nbsp;&nbsp;&nbsp; Docteur
                      <span class="category__btn transparent-btn" title="Open list">
                          <span class="sr-only"> Open list</span>
                          <span class="icon arrow-down" aria-hidden="true"></span>
                      </span>
                  </a> --}}
                  
                  
                      {{-- <li>
                          <a href="{{ route('doctors.create') }}">Ajouter Docteur</a>
                      </li> --}}
                  {{-- </ul>
              </li>
                <li> --}}
                    {{-- <a class="show-cat-btn" href="##">
                      <i class="fa-solid fa-user-nurse"></i> &nbsp;&nbsp;&nbsp;staff
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a> --}}
                    {{-- <li>
                      <a href="{{ route('staffs.index') }}">
                        <i class="fa-solid fa-file-lines"></i>&nbsp;&nbsp;&nbsp;
                        staff
                      </a>
                  </li> --}}
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                      <i class="fa-solid fa-calendar-check"></i>&nbsp;&nbsp;&nbsp;Rendez-vous
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ route('asPoint.index') }}">Tous les Rendez-vous</a>
                        </li>
                        <li>
                            <a href="{{ route('asPoint.create') }}">Ajouter Rendez-vous</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li>
                    <a class="show-cat-btn" href="">
                      <i class="fa-solid fa-hospital-user"></i>&nbsp;&nbsp;&nbsp;Patient
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ route('Apatient.index') }}">Tous les patient</a>
                        </li>
                        <li>
                            <a href="{{ route('Apatient.create') }}">Ajouter patient</a>
                        </li>
                    </ul>
                </li>
                <li>
                  <a href="{{ route('listdoc') }}">
                    <i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;
                      Docteurs
                  </a>
              </li>
                <li>
                    <a href="comments.html">
                      <i class="fa-solid fa-file-lines"></i>&nbsp;&nbsp;&nbsp;
                        Profil
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                      <i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;&nbsp;
                        Se déconnecter
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><img src="{{Auth::user()->picture}}" alt="">
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">{{Auth::user()->name}}</span>
                <span class="sidebar-user__subtitle">{{Auth::user()->role}}</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Arabe</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><img src="{{Auth::user()->picture}}" alt=""></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>


    <!-- ! Main -->
    <main>
      
      @yield('content')
    </main>
   
 
<!-- Chart library -->
<script src="{{ asset('./plugins/chart.min.js') }}"></script>
<!-- Icons library -->
<script src="{{ asset('plugins/feather.min.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>