@extends('layout.layout')

@section('content')
  <div class="container mt-5">
    <div class="table-responsive">
      <table class="table table-striped table-hover datatable-User" id="myTable">
        <a href="{{ route('attendees.create') }}" class="btn btn-sm btn-success float-right mb-1 text-light">
					Add Attendee
				</a>

        <thead>
          <tr>
            <th><i class='bx bx-select-multiple' style="font-size: 1.3rem;" title="Select"></i></th>
            <th>S.No</th>
            <th>Attendee</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Event</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>
          @foreach ($attendees as $attendee)
            <tr data-entry-id="{{ $attendee->id }}">
              <td></td>
              <td>{{ $count }}</td>
              <td>
                @if (isset($attendee->name))
                  {{ $attendee->name }}
                @endif
              </td>
              <td>
                @if (isset($attendee->email))
                  {{ $attendee->email }}
                @endif
              </td>

              <td>
                @if (isset($attendee->phone))
                  {{ $attendee->phone }}
                @endif
              </td>

              <td>
                @if (isset($attendee->event))
                  {{ $attendee->event->name }}
                @endif
              </td>

              {{-- <td>
                <a class="btn btn-sm p-25" title="Edit" href="{{ route('attendees.edit', $attendee->id) }}">
                  Edit
                </a>

                <form action="{{ route('attendees.destroy', $attendee->id) }}" method="POST"
                  onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-sm p-25" title="Delete">Delete</button>
                </form>
              </td> --}}
            </tr>
            <?php $count++; ?>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
