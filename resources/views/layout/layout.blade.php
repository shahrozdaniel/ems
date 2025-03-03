<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
</head>

<style>
  .task-group {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">EMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- Admin Links -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('events.index') }}">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('attendees.index') }}">Attendees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @if (session()->has('error'))
    <div class="container mt-3">
      <div class="alert alert-danger" role="alert">
        {{ session('error') }}
      </div>
    </div>
  @elseif (session()->has('success'))
    <div class="container mt-3">
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    </div>
  @endif

  @yield('content')

  {{-- script --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').dataTable();
    });
  </script>
</body>

</html>
