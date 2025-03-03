@extends('layout.layout')

@section('content')
  <div class="container mt-5">
    <h2>Dashboard</h2>
    <div class="list-group">
      <a href="{{ route('events.index') }}" class="list-group-item list-group-item-action">Events</a>
      <a href="{{ route('attendees.index') }}" class="list-group-item list-group-item-action">Attendees</a>
      <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>
    </div>
  </div>
@endsection
