<!-- Validation errors -->
@if (count($errors))
  <div class="form-group">
    <div class="alert alert-danger">
      @if (count($errors) <= 2)
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      @else
        <p>Please enter all fields.</p>
      @endif
    </div>
  </div>
@endif
