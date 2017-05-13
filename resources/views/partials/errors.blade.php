<!-- Validation errors -->
@if (count($errors))
  <div class="form-group">
    <div class="alert alert-danger">
      @if (count($errors) > 2)
        You must complete each field
      @else
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      @endif
    </div>
  </div>
@endif
