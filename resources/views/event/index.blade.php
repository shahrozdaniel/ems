@extends('layout.layout')

@section('content')

  <div class="container mt-5">
    <div class="table-responsive">
      <table class="table table-striped table-hover datatable-User" id="myTable">
        <a href="{{ route('events.create') }}" class="btn btn-sm btn-success float-right mb-1 text-light">
					New event
				</a>

        <thead>
          <tr>
            <th><i class='bx bx-select-multiple' style="font-size: 1.3rem;" title="Select"></i></th>
            <th>S.No</th>
            <th>Event Name</th>
            {{-- <th>Description</th> --}}
            <th>Date</th>
            <th>Type</th>
            <th>Total Attendees</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>
          @foreach ($events as $event)
            <tr data-entry-id="{{ $event->id }}">
              <td></td>
              <td>{{ $count }}</td>
              <td>
                @if (isset($event->name))
                  {{ $event->name }}
                @endif
              </td>
							
              {{-- <td>
                @if (isset($event->description))
                  {{ $event->description }}
                @endif
              </td> --}}

              <td>
                @if (isset($event->date))
                  {{ $event->date }}
                @endif
              </td>

              <td>
                @if (isset($event->type))
                  {{ $event->type }}
                @endif
              </td>

              <td>
                @if (isset($event->attendees))
                  {{ count($event->attendees) }}
                @endif
              </td>

              <td>
                <a class="btn btn-sm p-25" title="Edit" href="{{ route('events.edit', $event->id) }}">
                  Edit
                </a>

                <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                  onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-sm p-25" title="Delete">Delete</button>
                </form>
              </td>
            </tr>
            <?php $count++; ?>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
