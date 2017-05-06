<div class="items-content">

  <div class="row">
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

    // Loop through each person
    for ($i = 0; $i < count($users); $i++) {
      // User Info Variables
      $full_name      = $users[$i]["first_name"] . " " . $users[$i]["last_name"];
      $username       = $users[$i]["username"];
      $profile_img    = $users[$i]["profile_img_url"];
      $color          = $users[$i]["color"];
      $taskCount      = $users[$i]["taskCount"];
    ?>

      <div class="item-holder col-lg-3 col-md-4 col-sm-6">
        <div class="user-item">
          <!-- User Thumbnail -->
          <?php
          echo "<div class='user-thumbnail' style='color: rgb($color); background-color: rgba($color, 0.3)' >";

              if ($profile_img) {
                echo "<img class='img-responsive img-circle' src=$profile_img />";
              }
              else {
                echo $users[$i]["first_name"][0] . $users[$i]["last_name"][0];
              }
            ?>
          </div>
          <!-- User's Name Info -->
          <div class="user-name">
            <h4 class="name"><?php echo $full_name; ?></h5>
            <h6 class="username">@<?php echo $username; ?></h6>
          </div>
          <!-- Number of Tasks -->
          <div class="tasksHolder">
            <h1 class="taskCount"><?php echo $taskCount; ?></h1>
            <p class="description">Open Tasks</p>
          </div>
        </div>
      </div>

    <?php } ?>
  </div>
</div>
