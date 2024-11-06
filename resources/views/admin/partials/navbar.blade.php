  <!-- Header -->
  <div class="header">
      <!-- Logo -->
      <div class="header-left">
          {{-- <a href="admin-dashboard.html" class="logo">
              <img src="{{ url('mentors_css/images/logo.png') }}" alt="Logo" />
          </a>
          <a href="admin-dashboard.html" class="logo collapse-logo">
              <img src="{{ url('mentors_css/images/logo.png') }}" alt="Logo" />
          </a>
          <a href="admin-dashboard.html" class="logo2">
              <img src="assets/img/logo2.png" width="40" height="40" alt="Logo" />
          </a> --}}
      </div>
      <!-- /Logo -->

      <a id="toggle_btn" href="javascript:void(0);">
          <span class="bar-icon">
              <span></span>
              <span></span>
              <span></span>
          </span>
      </a>

      <!-- Header Title -->
      <div class="page-title-box">
          <h3>Technologies</h3>
      </div>
      <!-- /Header Title -->

      <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>

      <!-- Header Menu -->
      <ul class="nav user-menu">
          <!-- Search -->

          <!-- /Search -->

          <!-- ----profile-- -->
          <li class="nav-item dropdown has-arrow main-drop">
              <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <span class="user-img"><img width="40"
                          height="40"src="{{ url('https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg') }}"
                          alt="Admin Image" />
                      <span class="status online"></span></span>
                  <span>Admin</span>
              </a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item" href="settings.html">Settings</a>
                  <a class="dropdown-item" href="index.html">Logout</a>
              </div>
          </li>
      </ul>
      <!-- /Header Menu -->

      <!-- Mobile Menu -->
      <div class="dropdown mobile-user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                  class="fa-solid fa-ellipsis-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="profile.html">My Profile</a>
              <a class="dropdown-item" href="settings.html">Settings</a>
              <form method="POST" action="#" class="d-inline" id="logout-form">

                  <a class="dropdown-item">Logout</a>
              </form>
          </div>
      </div>
      <!-- /Mobile Menu -->
  </div>
  <!-- /Header -->
