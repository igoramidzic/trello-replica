<!-- Nav -->
<nav class="main-navbar navbar navbar-default">
  <!-- Content container -->
  <div class="row container-fluid">
    <!-- Boards and Search Form -->
    <div class="left-container col-lg-5 col-md-5 col-sm-5 hidden-xs">
      <div class="content-holder">
        <div href="/" class="nav-item page-title">
          {{ $page }}
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
              <a href="login" class="dropdown-toggle nav-item nav-link">
                Login
              </a>
            </li><!--
            --><li class="profile">
              <a href="/signup" class="dropdown-toggle nav-item nav-link emphasis">
                Signup
              </a>
            </li>
          @else
            <li class="profile hidden-xs">
              <a href="#" class="nav-item nav-link profile-welcoming">
                <img class="profile-img img-circle" src="img/profile-img-default.png" alt="">
                <span class="welcome-message">Hello, {{ Auth::user()->first_name }}!</span>
              </a>
            </li>
            <li>
              <a class="nav-item nav-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="/logout" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>
