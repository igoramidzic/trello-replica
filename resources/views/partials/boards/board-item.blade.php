  @foreach ($boards as $board)
    <div class="item-holder col-lg-3 col-md-4 col-sm-6">
      <div class="board-item board-task-item">
        <!-- User's Name Info -->
        <div class="header">
          <h4 class="title">{{ $board->title }}</h5>
          <h6 class="created-at">Created {{ $board->created_at->toFormattedDateString() }}</h6>
        </div>
        <!-- Tasks stats -->
        <div class="container-fluid tasksHolder">
          <div class="col-xs-6">
            <h1 class="taskCount">{{ $board->incomplete }}</h1>
            <p class="description">Open Tasks</p>
          </div>
          <div class="col-xs-6">
            <h1 class="taskCount">{{ $board->completed }}</h1>
            <p class="description">Completed</p>
          </div>
        </div>
        <!-- User Links -->
        <div class="container-fluid linksHolder">
          <a class="board-delete-btn action-btn col-xs-6">DELETE</a>
          <a class="action-btn col-xs-6 view" href="/b/{{ $board->id }}/{{ $board->title }}">VIEW</a>
        </div>
        <!-- Delete form -->
        @include ('partials.boards.delete-board-form')
      </div>
    </div>
  @endforeach
