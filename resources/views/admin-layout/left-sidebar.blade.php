<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">

        <!-- Admin -->
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark profile-dd" href="javascript:void(0)"
            aria-expanded="false">
            <img src="/images/admin/1.jpg" class="rounded-circle ml-2" width="30">
            <span class="hide-menu">Steve Jection </span>
          </a>
          <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item">
              <a href="javascript:void(0)" class="sidebar-link">
                <i class="ti-user"></i>
                <span class="hide-menu"> My Profile </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="javascript:void(0)" class="sidebar-link">
                <i class="ti-wallet"></i>
                <span class="hide-menu"> My Balance </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="javascript:void(0)" class="sidebar-link">
                <i class="ti-email"></i>
                <span class="hide-menu"> Inbox </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="javascript:void(0)" class="sidebar-link">
                <i class="ti-settings"></i>
                <span class="hide-menu"> Account Setting </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a  href="{{ route('logout') }}" 
                  class="sidebar-link"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form-sidebar').submit();">
                  <i class="fas fa-power-off"></i>
                  <span class="hide-menu"> {{ __('Logout') }} </span></a>

              <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>
        </li>
        <!-- ./Admin -->

        <!-- Dashboard -->
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark" href="{{asset(route('home'))}}">
            <i class="mdi mdi-av-timer"></i>
            <span class="hide-menu">Dashboard</span>
            <span class="badge badge-inverse badge-pill ml-auto mr-3 font-medium px-2 py-1">6</span>
          </a>
        </li>
        <!-- ./Dashboard -->
        
        <!-- Manage Users -->
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-account-multiple"></i>
            <span class="hide-menu">Users</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="{{asset(route('user-card'))}}" class="sidebar-link">
                <i class="mdi mdi-account-box"></i>
                <span class="hide-menu"> User Card </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="{{asset(route('users'))}}" class="sidebar-link">
                <i class="mdi mdi-account-star-variant"></i>
                <span class="hide-menu"> User Contact</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- ./Manage Users -->
        <!-- Manage Posts -->
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-newspaper"></i>
            <span class="hide-menu">Posts</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="{{asset(route('post-card'))}}" class="sidebar-link">
                <i class="mdi mdi-account-box"></i>
                <span class="hide-menu"> Post Card </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="{{asset(route('posts'))}}" class="sidebar-link">
                <i class="mdi mdi-account-star-variant"></i>
                <span class="hide-menu"> View Posts</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- ./Manage Posts -->
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>