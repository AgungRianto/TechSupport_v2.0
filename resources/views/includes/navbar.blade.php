<header class="app-header app-header-dark">
  <!-- .top-bar -->
  <div class="top-bar">
    <!-- .top-bar-brand -->
    <div class="top-bar-brand">
      <!-- toggle aside menu -->
      <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button> <!-- /toggle aside menu -->
      @if(Auth::user()->roles == 'ADMIN')
      <a href="{{ URL('/admin') }}">TECH SUPPORT</a>
      @else
      <a href="{{ URL('/user') }}">TECH SUPPORT</a>
      @endif
    </div><!-- /.top-bar-brand -->
    <!-- .top-bar-list -->
    <div class="top-bar-list">
      <!-- .top-bar-item -->
      <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
        <!-- toggle menu -->
        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
      </div><!-- /.top-bar-item -->
      <!-- .top-bar-item -->
      <div class="top-bar-item top-bar-item-full">
      <form class="top-bar-search">
        <!-- .input-group -->
        <div class="input-group input-group-search dropdown">
          <div class="input-group-prepend">
            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
          </div><input type="text" class="form-control" data-toggle="dropdown" aria-label="Search" placeholder="Search"> <!-- .dropdown-menu -->
          <div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 mw-100">
            <div class="dropdown-arrow ml-3"></div><!-- .dropdown-scroll -->
            <div class="dropdown-scroll perfect-scrollbar h-auto" style="max-height: 360px">
              <!-- .list-group -->
              <div class="list-group list-group-flush list-group-reflow mb-2">
                <h6 class="list-group-header d-flex justify-content-between">
                  <span>Shortcut</span>
                </h6><!-- .list-group-item -->
                <div class="list-group-item py-2">
                  <a href="#" class="stretched-link"></a>
                  <div class="tile tile-sm bg-muted">
                    <i class="fas fa-user-plus"></i>
                  </div>
                  <div class="ml-2"> Create user </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item py-2">
                  <a href="#" class="stretched-link"></a>
                  <div class="tile tile-sm bg-muted">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="ml-2"> Create invoice </div>
                </div><!-- /.list-group-item -->
              </div><!-- /.list-group -->
            </div><!-- /.dropdown-scroll -->
            <a href="#" class="dropdown-footer">Show all results</a>
          </div><!-- /.dropdown-menu -->
        </div><!-- /.input-group -->
      </form><!-- /.top-bar-search -->
      </div><!-- /.top-bar-item -->
      <!-- .top-bar-item -->
      <div class="top-bar-item top-bar-item-right d-none d-sm-flex">
        <!-- .nav -->
        <ul class="header-nav nav">
          <!-- .nav-item -->
          <li class="nav-item dropdown header-nav-dropdown has-notified">
            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a> <!-- .dropdown-menu -->
            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
              <div class="dropdown-arrow"></div>
              <h6 class="dropdown-header stop-propagation">
                <span>Messages</span> <a href="#">Mark all as read</a>
              </h6><!-- .dropdown-scroll -->
              <div class="dropdown-scroll perfect-scrollbar">
                <!-- .dropdown-item -->
                <a href="#" class="dropdown-item">
                  <div class="tile tile-circle bg-green"> GZ </div>
                  <div class="dropdown-item-body">
                    <p class="subject"> Gogo Zoom </p>
                    <p class="text text-truncate"> Live healthy with this wireless sensor. </p><span class="date">1 day ago</span>
                  </div>
                </a> <!-- /.dropdown-item -->
                <!-- .dropdown-item -->
                <a href="#" class="dropdown-item">
                  <div class="tile tile-circle bg-teal"> GD </div>
                  <div class="dropdown-item-body">
                    <p class="subject"> Gold Dex </p>
                    <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p><span class="date">1 day ago</span>
                  </div>
                </a> <!-- /.dropdown-item -->
                <!-- .dropdown-item -->
                <a href="#" class="dropdown-item">
                  <div class="tile tile-circle bg-pink"> LD </div>
                  <div class="dropdown-item-body">
                    <p class="subject"> Lab Drill </p>
                    <p class="text text-truncate"> Our UX exercise is ready </p><span class="date">6 days ago</span>
                  </div>
                </a> <!-- /.dropdown-item -->
              </div><!-- /.dropdown-scroll -->
              <a href="page-messages.html" class="dropdown-footer">All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
            </div><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <!-- .nav-item -->
          
        </ul><!-- /.nav -->
        <!-- .btn-account -->
        <div class="dropdown d-none d-md-flex">
          <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="user-avatar user-avatar-md"><img src="{{ url('frontend/images/comment.png') }}" alt=""></span> 
            <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">{{ Auth::user()->name }}</span> 
            <span class="account-description">{{ Auth::user()->job_title }}</span></span></button> <!-- .dropdown-menu -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          <!-- <div class="dropdown-menu">
            <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
            <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
            <a class="dropdown-item" href="{{ url('logout') }}" ><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
          </div> -->
        </div><!-- /.btn-account -->
      </div><!-- /.top-bar-item -->
    </div><!-- /.top-bar-list -->
  </div><!-- /.top-bar -->
</header><!-- /.app-header -->