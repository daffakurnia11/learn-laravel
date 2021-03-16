@extends('layout.main')

@section('title', 'Student Lists')

@section('container')

<div class="mt-3 container">
  <div class="row">
    <div class="col-sm-6">
      <h1>Student Lists</h1>
      <ul class="list-group">
        @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama }}
          <a href="{{ url('/mahasiswa') }}/{{ $student->id }}" class="badge badge-primary badge-pill">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection