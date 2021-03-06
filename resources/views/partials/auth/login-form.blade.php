<!-- Login Form -->
<form class="login-register-form" method="POST" action="/login" novalidate>
  {{ csrf_field() }}

  <!-- Username -->
  <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="email" class="form-control" placeholder="Email" autocorrect="off" autocapitalize="none" name="email" value="{{ old('email') }}" {{ count($errors) && !old('email') ? 'autofocus' : '' }} novalidate>
  </div>
  <!-- Password -->
  <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-key"></i></span>
    <input type="password" class="form-control" placeholder="password" name="password" {{ old('email') ? 'autofocus' : '' }}>
  </div>
  @include ('partials.errors.form-errors')
  <!-- Submit button -->
  <div class="row submit-button-holder">
    <div class="col-xs-6">
      <a class="forgot-password" href="/password/reset">Forgot password ?</a>
    </div>
    <div class="col-xs-6">
      <input type="submit" class="submit-btn pull-right" value="LOGIN">
    </div>
  </div>
</form>
