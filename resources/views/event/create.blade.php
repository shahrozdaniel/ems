@extends('../layout.layout')

@section('content')
  <div class="container mt-5">
    <h2 class="mb-4">Create Event</h2>
    <div class="card shadow-sm">
      <div class="card-body">

        <form method="POST" id="taskForm" action="{{ route('events.store') }}">
          @csrf
          <div id="taskContainer">
            <div class="task-group">

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" placeholder="Provide a description of the task" class="form-control" rows="4"></textarea>
              </div>

              <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="type" class="form-label">Event Type</label>
                <select name="type" class="form-control" required>
                  <option value="">-- Select an event type --</option>
                  <option value="Conference">Conference</option>
                  <option value="Workshop">Workshop</option>
                  <option value="Meetup">Meetup</option>
                </select>
              </div>

            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit Event</button>
        </form>
      </div>
    </div>
  </div>
@endsection
