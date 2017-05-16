<!-- Project meta -->
<form class="delete-item-form" action="/task-delete/{{ $task->id }}" method="POST">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <h4 class="title">{{ $task->title }}</h4>
  <h5 class="question">Are you sure?</h5>
  <div class="btn-holder">
    <button class="cancel-btn btn primary-btn" type="button">CANCEL</button><!--
    --><button class="btn danger-btn" type="submit">DELETE</button>
  </div>
</form>
