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
    <!-- /assets links to /public -->
    <link rel="stylesheet" href="{{ URL::asset('/bower_components/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/all.css') }}">
    <!-- Title -->
    <title>Trello | {{ $page }}</title>
  </head>
  <body>

    @yield ('main-content')

  </body>
  <!-- Scripts -->
  <script src="{{ URL::asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/bower_components/aos/dist/aos.js') }}"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="{{ URL::asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('/js/all.js') }}"></script>

  <script type="text/javascript">
    // AOS Init
    AOS.init({
      once: true
    })
  </script>
</html>
