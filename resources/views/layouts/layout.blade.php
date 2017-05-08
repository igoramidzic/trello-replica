<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Trello todo-list application">
    <meta name="keywords" content="Trello todo-list application">
    <meta name="author" content="Igor Amidzic">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <!-- Title -->
  </head>
  <body>
    <div class="main-index">
      <div class="wrapper">
        @include ('partials.main-navbar')
        @yield ('main-content')
      </div>
    </div>


  </body>
  <!-- Scripts -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/aos/dist/aos.js" charset="utf-8"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/all.js"></script>
</html>
