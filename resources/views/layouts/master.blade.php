@include('layouts.head')
<body data-base-url="">

  <script src="/js/spinner.js"></script>

  <div class="main-wrapper" id="app">
    @include('layouts.sidebar')
    <div class="page-wrapper">
      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <!-- <i data-feather="search"></i> -->
                </div>
              </div>
              <!-- <input type="text" class="form-control" id="navbarForm" placeholder="Search here..."> -->
            </div>
          </form>
          <ul class="navbar-nav">
            <!-- <li class="nav-item dropdown nav-apps">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="grid"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="appsDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">Web Apps</p>
                  <a href="javascript:;" class="text-muted">Edit</a>
                </div>
                <div class="dropdown-body">
                  <div class="d-flex align-items-center apps">
                    <a href="/apps/chat"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
                    <a href="/apps/calendar"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
                    <a href="/email/inbox"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
                    <a href="/general/profile"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
                  </div>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown nav-messages">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="mail"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="messageDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">9 New Messages</p>
                  <a href="javascript:;" class="text-muted">Clear all</a>
                </div>
                <div class="dropdown-body">
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="/assets/images/faces/face2.jpg" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>Leonardo Payne</p>
                        <p class="sub-text text-muted">2 min ago</p>
                      </div>  
                      <p class="sub-text text-muted">Project status</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="/assets/images/faces/face3.jpg" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>Carl Henson</p>
                        <p class="sub-text text-muted">30 min ago</p>
                      </div>  
                      <p class="sub-text text-muted">Client meeting</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="/assets/images/faces/face4.jpg" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>Jensen Combs</p>                       
                        <p class="sub-text text-muted">1 hrs ago</p>
                      </div>  
                      <p class="sub-text text-muted">Project updates</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="/assets/images/faces/face5.jpg" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>Amiah Burton</p>
                        <p class="sub-text text-muted">2 hrs ago</p>
                      </div>
                      <p class="sub-text text-muted">Project deadline</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="/assets/images/faces/face6.jpg" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>Yaretzi Mayo</p>
                        <p class="sub-text text-muted">5 hr ago</p>
                      </div>
                      <p class="sub-text text-muted">New record</p>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown nav-notifications">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
              </a>
              <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">6 New Notifications</p>
                  <a href="javascript:;" class="text-muted">Clear all</a>
                </div>
                <div class="dropdown-body">
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="user-plus"></i>
                    </div>
                    <div class="content">
                      <p>New customer registered</p>
                      <p class="sub-text text-muted">2 sec ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="gift"></i>
                    </div>
                    <div class="content">
                      <p>New Order Recieved</p>
                      <p class="sub-text text-muted">30 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="alert-circle"></i>
                    </div>
                    <div class="content">
                      <p>Server Limit Reached!</p>
                      <p class="sub-text text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="layers"></i>
                    </div>
                    <div class="content">
                      <p>Apps are ready for update</p>
                      <p class="sub-text text-muted">5 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="download"></i>
                    </div>
                    <div class="content">
                      <p>Download completed</p>
                      <p class="sub-text text-muted">6 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li> -->
            @guest
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif -->
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/register">
                {{ __('Add Account') }}
              </a>
              <a class="dropdown-item" href="/change-password">
                {{ __('Change Password') }}
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>


              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </nav>      <div class="page-content">
      <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
          @yield('welcome')
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
          <!-- <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="datepicker">
            <span class="input-group-addon bg-transparent"><i data-feather="calendar" class="text-primary"></i></span>
            <input type="text" class="form-control">
          </div> -->
          @yield('ekspor')
          <!-- <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="printer"></i>
            Print
          </button> -->
          @yield('modal')
        </div>
      </div>
      
      <div class="col-md-12 row justify-content-end">
        @if(session('sukses'))
        <div class="col-md-5 alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
        @endif
      </div>

      <div class="col-md-12 row justify-content-end">
        @if (count($errors) > 0)
        <div class="col-md-5 alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </div>

      <!-- row -->

      <!-- row -->

      <!-- row -->

      <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <!-- <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Projects</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div> -->
                <div class="table-responsive">

                  @yield('content2')

                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->
      </div>
      @include('layouts.footer')