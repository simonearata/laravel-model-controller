@extends('layout.main')

@section('content')

  <div class="container">
    <div class="card">
      <ul>
        @foreach ($moviestore as $movie)
          <li>{{ $movie['title'] }}</li>
        @endforeach
      </ul>
    </div>
  </div>

@endsection