@extends ('layouts.layout')

@section ('main-content')

@include ('partials.index-navbar')

<div class="main-index">
  <!-- Main hero -->
  <section class="main-hero" id="main-hero-section">
    <!-- Background dimmer -->
    <div class="background-dimmer">
      <div class="hero-info container-fluid">
        <!-- Header -->
        <h1 class="header">Trello lets you work more collaboratively and get more done.</h1>
        <!-- Description -->
        <p class="description">Trello's boards, lists, and cards enable you to organize and
        prioritize your projects in a fun, flexible, and rewarding way.</p>
        <!-- Signup link - Desktop -->
        <a class="btn primary-btn hidden-xs" href="#register-form">SIGN UP FOR FREE</a>
        <!-- Mobile -->
        <a class="btn primary-btn hidden-lg hidden-md hidden-sm" href="/signup">SIGN UP FOR FREE</a>
      </div>
      <!-- Scroll down alert -->
      <div class="scroll-down-alert-holder">
        <a class="scroll-down-alert" href="#boards-section">Scroll down to find out more <i class="fa fa-level-down"></i></a>
      </div>
    </div>
  </section>

  <!-- Boards section -->
  <section class="boards-section" id="boards-section">

  </section>

  <!-- Companies and register section -->
  <section class="companies-and-register-section">
    <div class="background-dimmer">
      <!-- Footer info -->
      <div class="info">
        <h1 class="header">Our clients</h1>
        <p class="description">Companies of all shapes and sizes use Trello Business Class.
        Learn how Trello helps your team work smarter.</p>
      </div>
      <!-- Company logos -->
      <div class="company-logos">
        <ul class="company-logos-list">
          <li class="item"><img src="img/company-logos/paypal.png" alt=""></li><!--
          --><li class="item"><img src="img/company-logos/theverge.png" alt=""></li><!--
          --><li class="item"><img src="img/company-logos/google.png" alt=""></li><!--
          --><li class="item"><img src="img/company-logos/adobe.png" alt=""></li><!--
          --><li class="item"><img src="img/company-logos/logitech.png" alt=""></li><!--
          --><li class="item"><img src="img/company-logos/github.png" alt=""></li>
        </ul>
      </div>
      <!-- Sign up button for mobile view -->
      <a class="mobile-signup-btn btn primary-btn hidden-lg hidden-md hidden-sm" href="/signup">SIGN UP FOR FREE</a>
      <!-- Register Form -->
      <form data-aos="fade-up" data-aos-duration="1000" class="index-register-form hidden-xs" id="register-form" method="POST" action="/signup" novalidate>
        <h1 class="header">Sign up</h1>

        {{ csrf_field() }}

        <!-- Row1 -->
        <div class="row">
          <!-- First name -->
          <div class="col-xs-4 small-input-holder">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="First name" name="first_name">
            </div>
          </div>
          <!-- Last name -->
          <div class="col-xs-4 small-input-holder">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Last name" name="last_name">
            </div>
          </div>
          <!-- Username -->
          <div class="col-xs-4 small-input-holder">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" autocorrect="off" autocapitalize="none" name="username">
            </div>
          </div>
        </div>

        <!-- Row2 -->
        <div class="row">
          <!-- Email -->
          <div class="col-xs-6 small-input-holder">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" class="form-control" placeholder="Email" autocorrect="off" autocapitalize="none" name="email">
            </div>
          </div>
          <!-- Password -->
          <div class="col-xs-6 small-input-holder">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="password" class="form-control" placeholder="password" name="password">
            </div>
          </div>
        </div>

        <!-- Terms of service -->
        <p class="TOS">By clicking Sign up I agree to Trello's <a class="emphasis" href="#">Nothing</a></p>

        <!-- Submit button -->
        <div class="submit-button-holder">
          <input type="submit" class="btn primary-btn" value="SIGN UP">
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer-section">
    <!-- Footer part 2 -->
    <div class="footer-part-2">
      <p class="info">Designed by <a target="_blank" href="https://dribbble.com/shots/3241803-Trello-Atlassian-Landing-Page">Serge Soskowiec</a> and Developed by <a target="_blank" href="https://www.igoramidzic.com/">Igor Amidzic</a></p>
    </div>
  </footer>
</div>

@endsection
