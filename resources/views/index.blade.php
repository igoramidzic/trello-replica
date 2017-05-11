@extends ('layouts.layout')

@section ('main-content')

@include ('partials.index-navbar')

<div class="main-index">
  <section class="main-hero" id="main-hero-section">
    <!-- Background dimmer -->
    <div class="background-dimmer">
      <div class="hero-info container-fluid">
        <!-- Header -->
        <h1 class="header">Trello lets you work more collaboratively and get more done.</h1>
        <!-- Description -->
        <p class="description">Trello's boards, lists, and cards enable you to organize and
        prioritize your projects in a fun, flexibble, and rewarding way.</p>
        <!-- Signup link -->
        <a class="btn primary-btn" href="/signup">SIGN UP FOR FREE</a>
      </div>
      <!-- Scroll down alert -->
      <div class="scroll-down-alert-holder">
        <a class="scroll-down-alert" href="#boards-section">Scroll down to find out more <i class="fa fa-level-down"></i></a>
      </div>
    </div>
  </section>

  <section class="boards-section" id="boards-section">
    This is the Boards section
  </section>
</div>

@endsection
