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
        <!-- Signup link -->
        <a class="btn primary-btn" href="/signup">SIGN UP FOR FREE</a>
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

  <footer class="footer-section">
    <!-- Footer part 1 -->
    <div class="footer-part-1">
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
      </div>
      <!-- Signup form -->
      <div class="signup-form">

      </div>
    </div>
    <!-- Footer part 2 -->
    <div class="footer-part-2">

    </div>
  </footer>
</div>

@endsection
