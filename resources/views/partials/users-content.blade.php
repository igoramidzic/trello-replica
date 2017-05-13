<div class="items-content">
  <div class="row">
    @foreach ($users as $user)

      <div class="item-holder col-lg-3 col-md-4 col-sm-6">
        <div class="user-item">
          <!-- User Thumbnail -->
          <div class='user-thumbnail' style='color: rgb({{ $user->color }}); background-color: rgba({{ $user->color }}, 0.3)' >
            <!-- If user has a profile image, use that instead of initials -->
            @if (false)
                <!-- <img class='img-responsive img-circle' src={{ $user->img }} /> -->
            @else
                {{ $user->first_name[0] . $user->last_name[0] }}
            @endif
          </div>
          <!-- User's Name Info -->
          <div class="user-name">
            <h4 class="name">{{ $user->first_name . " " . $user->last_name }}</h5>
            <h6 class="username">{{ "@" . $user->username }}</h6>
            <!-- If current iteration is the logged in user -->
          </div>
          <!-- Number of Tasks -->
          <div class="tasksHolder">
            <h1 class="taskCount">{{ rand(0,99) }}</h1>
            <p class="description">Open Tasks</p>
          </div>
          <!-- User Links -->
          <div class="container-fluid linksHolder">
            <a class="col-xs-6" href="/members/{{ $user->id }}/tasks"><i class="icon fa fa-check-square-o"></i> TASKS</a>
            <a class="col-xs-6" href="/{{ $user->username }}"><i class="icon fa fa-user-o"></i> PROFILE</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
