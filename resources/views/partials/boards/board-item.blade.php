<div class="row">
  @foreach ($boards as $board)
    <div class="item-holder col-lg-3 col-md-4 col-sm-6">
      <div class="board-item">
        <!-- User's Name Info -->
        <div class="header">
          <h4 class="title">{{ $board->title }}</h5>
          <h6 class="created-at">Created {{ $board->created_at }}</h6>
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
          <a class="action-btn col-xs-6 delete">DELETE</a>
          <a class="action-btn col-xs-6 view" href="/board/{{ $board->title }}">VIEW</a>
        </div>
      </div>
    </div>
  @endforeach


  <!-- Create a new board -->
  <div class="item-holder col-lg-3 col-md-4 col-sm-6">
    <form class="create-new-board-item" action="/create-board" method="POST">
      {{ csrf_field() }}
      <!-- Header -->
      <h4 class="header">Create new board</h4>
      <input class="create-new-board-title-field" type="text" name="title" placeholder="Title" autocomplete="off">
      <!-- Button info -->
      <h5 class="create-new-board-button-info create-new-board-cancel">Cancel</h5>
      <h5 class="create-new-board-button-info create-new-board-create">Create</h5>
      <!-- Circle -->
      <button type="button" class="create-new-board-action-btn">
        <!-- Plus/checkmark elements -->
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
      </button>
    </form>
  </div>

</div>
