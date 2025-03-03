@extends('layout.layout')

@section('content')
  <div class="container mt-5">
    <h2 class="mb-4">Edit Event</h2>
    <div class="card shadow-sm">
      <div class="card-body">

        <form method="POST" id="taskForm" action="{{ route('events.update', $event->id) }}">
					@csrf
					@method('PUT')
          <div id="taskContainer">
            <div class="task-group">

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" placeholder="Provide a description of the task" class="form-control" rows="4">{{ $event->description }}</textarea>
              </div>

              <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $event->date }}" required>
              </div>

              <div class="mb-3">
                <label for="type" class="form-label">Event Type</label>
                <select name="type" class="form-control" required>
                  <option value="Conference" @if ($event->type == 'Conference') selected @endif>Conference</option>
                  <option value="Workshop" @if ($event->type == 'Workshop') selected @endif>Workshop</option>
                  <option value="Meetup" @if ($event->type == 'Meetup') selected @endif>Meetup</option>
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
