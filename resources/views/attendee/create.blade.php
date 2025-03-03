@extends('../layout.layout')

@section('content')
  <div class="container mt-5">
    <h2 class="mb-4">Add Attendee</h2>
    <div class="card shadow-sm">
      <div class="card-body">
        <!-- Display success or error messages -->

        <form method="POST" id="taskForm" action="{{ route('attendees.store') }}">
          @csrf
          <div id="taskContainer">
            <div class="task-group">

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" placeholder="Provide a email" class="form-control"></input>
              </div>

              <div class="mb-3">
                <label for="date" class="form-label">Phone Number</label>
                <input type="number" name="phone" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="event" class="form-label">Event</label>
                <select name="event" class="form-control" required>
                  <option value="">-- Select an event --</option>
                  @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                  @endforeach
                </select>
              </div>

            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit Tasks</button>
        </form>
      </div>
    </div>
  </div>
@endsection
