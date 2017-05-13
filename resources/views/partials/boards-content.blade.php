<div class="items-content">
  <div class="row">
    @foreach ($boards as $board)
      <div class="item-holder col-lg-3 col-md-4 col-sm-6">
        <div class="user-item">
          {{ $board->name }}
        </div>
      </div>
    @endforeach
  </div>
</div>
