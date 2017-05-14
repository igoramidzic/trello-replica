<div class="row">
  @foreach ($boards as $board)
    <div class="item-holder col-lg-3 col-md-4 col-sm-6">
      <div class="board-item">
        <!-- User's Name Info -->
        <div class="header">
          <h4 class="title">{{ $board->title }}</h5>
          <h6 class="created-at">Created {{ $board->created_at->toFormattedDateString() }}</h6>
        </div>
        <!-- Tasks stats -->
        <div class="container-fluid tasksHolder">
          <div class="col-xs-6">
            <h1 class="taskCount">{{ rand(0,99) }}</h1>
            <p class="description">Open Tasks</p>
          </div>
          <div class="col-xs-6">
            <h1 class="taskCount">{{ rand(0,99) }}</h1>
            <p class="description">Completed</p>
          </div>
        </div>
        <!-- User Links -->
        <div class="container-fluid linksHolder">
          <a class="action-btn col-xs-6 delete">DELETE</a>
          <a class="action-btn col-xs-6 view" href="/board/{{ $board->title }}">VIEW</a>
        </div>
      </div>
    </div>
  @endforeach

  <!-- Create a new board -->
  <div class="item-holder col-lg-3 col-md-4 col-sm-6">
    <div class="create-new-board-item">
      <h4 class="header">Create new board</h4>
      <div class="create-new-board-action-btn">
        <i class="fa fa-plus"></i>
      </div>
    </div>
  </div>

</div>
