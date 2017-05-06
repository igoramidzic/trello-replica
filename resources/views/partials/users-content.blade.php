<?php
// Hard code users to test template
$users = [
  ["first_name" => "Igor", "last_name" => "Amidzic", "username" => "igoramidzic", "profile_img_url" => "img/profile-img.png", "color" => false, "taskCount" => 29],
  ["first_name" => "John", "last_name" => "Heimer", "username" => "johnheimer", "profile_img_url" => false, "color" => "30, 156, 19", "taskCount" => 73],
  ["first_name" => "Kahlie", "last_name" => "Solomid", "username" => "kahliesolomid", "profile_img_url" => false, "color" => "164, 69, 22", "taskCount" => 0],
  ["first_name" => "Antonio", "last_name" => "Steele", "username" => "antoniosteele", "profile_img_url" => false, "color" => "72, 9, 144", "taskCount" => 14],
  ["first_name" => "Frank", "last_name" => "Enstein", "username" => "frankenstein", "profile_img_url" => false, "color" => "153, 0, 0", "taskCount" => 8],
  ["first_name" => "Jasmine", "last_name" => "Holler", "username" => "jasmineholler", "profile_img_url" => false, "color" => "42, 14, 14", "taskCount" => 63],
  ["first_name" => "Archi", "last_name" => "Zephrahill", "username" => "archizephrahill", "profile_img_url" => false, "color" => "70, 135, 255", "taskCount" => 2]
];
?>

<div class="items-content">
  <div class="row">
    @foreach ($users as $user)
      <div class="item-holder col-lg-3 col-md-4 col-sm-6">
        <div class="user-item">
          <!-- User Thumbnail -->
          <div class='user-thumbnail' style='color: rgb({{ $user["color"] }}); background-color: rgba({{ $user["color"] }}, 0.3)' >
            @if ($user["profile_img_url"])
                <img class='img-responsive img-circle' src={{ $user["profile_img_url"] }} />
            @else
                {{ $user["first_name"][0] . $user["last_name"][0] }}
            @endif
          </div>
          <!-- User's Name Info -->
          <div class="user-name">
            <h4 class="name">{{ $user["first_name"] . " " . $user["last_name"] }}</h5>
            <h6 class="username">{{ "@" . $user["username"] }}</h6>
          </div>
          <!-- Number of Tasks -->
          <div class="tasksHolder">
            <h1 class="taskCount">{{ $user["taskCount"] }}</h1>
            <p class="description">Open Tasks</p>
          </div>
          <!-- User Links -->
          <div class="container-fluid linksHolder">
            <a class="col-xs-6" href="#"><i class="icon fa fa-check-square-o"></i> CARDS</a>
            <a class="col-xs-6" href="#"><i class="icon fa fa-user-o"></i> PROFILE</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
