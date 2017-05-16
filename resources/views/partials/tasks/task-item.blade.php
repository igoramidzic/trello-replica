@foreach ($tasks as $task)
  <div class="item-holder col-lg-3 col-md-4 col-sm-6">
    <div class="task-item board-task-item">
      <!-- User's Name Info -->
      <div class="header">
        <h4 class="title">{{ $task->title }}</h5>
        <h6 class="created-at">Created {{ $task->created_at }}</h6>
      </div>
      <!-- Tasks stats -->
      <div class="container-fluid tasksHolder">

        @if ($task->is_completed)
        <p class="status complete">
          Completed
        </p>
        @else
        <p class="status incomplete">
          Incomplete
        </p>
        @endif
      </div>
      <!-- User Links -->
      <div class="container-fluid linksHolder">
        <a class="action-btn col-xs-6 delete">DELETE</a>

        @if ($task->is_completed)
        <a class="action-btn col-xs-6 view done">
          REVERT
        </a>
        @else
        <a class="action-btn col-xs-6 view not-done">
          FINISH
        </a>
        @endif
      </div>
    </div>
  </div>
@endforeach
