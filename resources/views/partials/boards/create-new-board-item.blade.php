<!-- Create a new board -->
<div class="item-holder col-lg-3 col-md-4 col-sm-6">
  <form class="create-new-item" action="/create-board" method="POST">
    {{ csrf_field() }}
    <!-- Header -->
    <h4 class="header">Create new board</h4>
    <input class="create-new-item-input-field" type="text" name="title" placeholder="Title" autocomplete="off">
    <!-- Button info -->
    <h5 class="create-new-item-button-info create-new-item-cancel">Cancel</h5>
    <h5 class="create-new-item-button-info create-new-item-create">Create</h5>
    <!-- Circle -->
    <button type="button" class="create-new-item-action-btn">
      <!-- Plus/checkmark elements -->
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
    </button>
  </form>
</div>
