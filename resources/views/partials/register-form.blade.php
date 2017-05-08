<!-- Register Form -->
<form class="login-register-form" method="POST" action="/signup">

  {{ csrf_field() }}

  <!-- Names -->
  <div class="row">
    <!-- First name -->
    <div class="col-xs-6 small-input-holder {{ $errors->has('first_name') ? ' has-error' : '' }}">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('first_name') }}" autofocus>
      </div>
    </div>
    <!-- Last name -->
    <div class="col-xs-6 small-input-holder {{ $errors->has('last_name') ? ' has-error' : '' }}">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name') }}">
      </div>
    </div>
  </div>
  <!-- Username -->
  <div class="input-group {{ $errors->has('username') ? ' has-error' : '' }}">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input type="text" class="form-control" placeholder="Username" autocorrect="off" autocapitalize="none" name="username" value="{{ old('username') }}">
  </div>
  <!-- Email -->
  <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="text" class="form-control" placeholder="Email" autocorrect="off" autocapitalize="none" name="email" value="{{ old('email') }}">
  </div>
  <!-- Password -->
  <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
    <span class="input-group-addon"><i class="fa fa-key"></i></span>
    <input type="password" class="form-control" placeholder="password" name="password">
  </div>
  @include ('partials.errors')
  <!-- Submit button -->
  <div class="submit-button-holder">
    <input type="submit" class="submit-btn pull-right" value="SIGNUP">
  </div>
</form>
