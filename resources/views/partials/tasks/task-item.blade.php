@foreach ($tasks as $task)
  <div class="item-holder col-lg-3 col-md-4 col-sm-6">
    <div class="task-item board-task-item">
      <!-- User's Name Info -->
      <div class="header">
        <h4 class="title">{{ $task->title }}</h5>
        @if ($task->is_completed)
          <h6 class="created-at">Completed {{ $task->updated_at->toFormattedDateString() }}</h6>
        @else
          <h6 class="created-at">Created {{ $task->created_at->toFormattedDateString() }}</h6>
        @endif
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
        <button class="item-delete-btn task-delete-btn action-btn col-xs-6 delete">DELETE</button>

        <form action="/task-update/{{ $task->id }}" method="post">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}

          @if ($task->is_completed)
          <input type="text" name="is_completed" value="0" hidden>
          <button class="action-btn col-xs-6 view done">
            REVERT
          </button>
          @else
          <input type="text" name="is_completed" value="1" hidden>
          <button class="action-btn col-xs-6 view not-done">
            FINISH
          </button>
          @endif
        </form>
      </div>

      @include ('partials.tasks.delete-task-form')
    </div>
  </div>
@endforeach
