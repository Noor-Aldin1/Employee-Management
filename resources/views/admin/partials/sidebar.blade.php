  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
              <ul class="sidebar-vertical">
                  <li class="menu-title">
                      <span>Main</span>
                  </li>

                  {{-- Optional Dashboard Link --}}
                  {{-- Uncomment if needed
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><i class="la la-dashcube"></i> <span> Dashboard</span></a>
                </li>
                --}}

                  {{-- Employees Link --}}
                  <li class="{{ request()->routeIs('employees.index') ? 'active' : '' }}">
                      <a href="{{ route('employees.index') }}"><i class="la la-user"></i> <span> Employees</span></a>
                  </li>

                  {{-- Departments Link --}}
                  <li class="{{ request()->routeIs('departments.index') ? 'active' : '' }}">
                      <a href="{{ route('departments.index') }}"><i class="fa fa-building"></i>
                          <span>Departments</span></a>
                  </li>
              </ul>

          </div>
      </div>
  </div>
  <!-- /Sidebar -->
