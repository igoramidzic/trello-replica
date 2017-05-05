<div class="items-content">

  <div class="row">
    <?php

    // Hard code users to test template
    $users = [
      ["first_name" => "Igor", "last_name" => "Amidzic", "username" => "igoramidzic", "profile_img_url" => "img/profile-img.png"],
      ["first_name" => "John", "last_name" => "Heimer", "username" => "johnheimer", "profile_img_url" => false],
      ["first_name" => "Kahlie", "last_name" => "Solomid", "username" => "kahliesolomid", "profile_img_url" => false],
      ["first_name" => "Antonio", "last_name" => "Steele", "username" => "antoniosteele", "profile_img_url" => false],
      ["first_name" => "Frank", "last_name" => "Enstein", "username" => "frankenstein", "profile_img_url" => false],
      ["first_name" => "Jasmine", "last_name" => "Holler", "username" => "jasmineholler", "profile_img_url" => false],
      ["first_name" => "Archi", "last_name" => "Zephrahill", "username" => "archizephrahill", "profile_img_url" => false]

    ];

    // Loop through each person
    for ($i = 0; $i < count($users); $i++) {
      // User Info Variables
      $full_name = $users[$i]["first_name"] . " " . $users[$i]["last_name"];
      $username = $users[$i]["username"];
      $profile_img = $users[$i]["profile_img_url"];
    ?>

      <div class="item-holder col-lg-3 col-md-4 col-sm-6">
        <div class="user-item">
          <!-- User Thumbnail -->
          <div class="user-thumbnail">
            <?php
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
        </div>
      </div>

    <?php } ?>
  </div>
</div>
