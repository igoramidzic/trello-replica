<!-- Nav -->
<nav class="navbar navbar-default">
  <!-- Content container -->
  <div class="row container-fluid">
    <!-- Boards and Search Form -->
    <div class="left-container col-lg-5 col-md-5 col-sm-5 hidden-xs">
      <div class="content-holder">
        <div href="/" class="nav-item page-title">
        </div>
      </div>
    </div>

    <!-- Logo -->
    <div class="holder center-container col-lg-2 col-md-2 col-sm-2 col-xs-3">
      <div class="content-holder">
        <a href="/" class="logo-link"><img src="img/trello-logo.png" alt=""></a>
      </div>
    </div>

    <!-- Profile, Notifications, and Menu -->
    <div class="holder right-container col-lg-5 col-md-5 col-sm-5 col-xs-9">
      <div class="content-holder">
        <!-- List of Links -->
        <ul class="navbar-right">
          <!-- If user is logged in -->
          @if (Auth::guest())
            <li class="profile">
              <a href="/register" class="dropdown-toggle nav-item nav-link">
                Signup
              </a>
            </li><!--
            --><li class="profile">
              <a href="login" class="dropdown-toggle nav-item nav-link emphasis">
                Login
              </a>
            </li>
          @else
            <li class="profile">
              <a href="#" class="nav-item nav-link profile-welcoming">
                <span class="welcome-message hidden-xs">Hello, {{ Auth::user()->first_name }}!</span>
                <!-- <img class="profile-img img-rounded" src="img/profile-img.png" alt=""> -->
              </a>
            </li><!--
            --><li>
              <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>
