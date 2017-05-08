<!-- Register Form -->
<form class="login-register-form" action="/members" method="POST">

  {{ csrf_field() }}

  <!-- Names -->
  <div class="row">
    <!-- First name -->
    <div class="col-xs-6 small-input-holder">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="First name" name="first_name">
      </div>
    </div>
    <!-- Last name -->
    <div class="col-xs-6 small-input-holder">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Last name" name="last_name">
      </div>
    </div>
  </div>
  <!-- Username -->
  <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input type="text" class="form-control" placeholder="Username" autocorrect="off" autocapitalize="none" name="username">
  </div>
  <!-- Password -->
  <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-key"></i></span>
    <input type="password" class="form-control" placeholder="password" name="password">
  </div>
  <!-- Submit button -->
  <div class="submit-button-holder">
    <input type="submit" class="submit-btn pull-right" value="SIGNUP">
  </div>
</form>
