@extends('layout.main')

@section('title', 'Student Details')

@section('container')

<div class="mt-3 container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Student Details</h3>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $student->nama }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
          <p class="card-text">{{ $student->email }}</p>
          <p class="card-text">{{ $student->jurusan }}</p>

          <button type="submit" class="btn btn-primary">Edit</button>
          <form action="{{ url('/students/' . $student->id) }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="{{ url('/students') }}" class="btn btn-success ml-auto">Back to List</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection