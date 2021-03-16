@extends('layout.main')

@section('title', 'Add New Student')

@section('container')

<div class="mt-3 container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Add New Student</h3>
      <form method="post" action="{{ url('/students') }}">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" autofocus value="{{ old('nama') }}">
          @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ old('nrp') }}">
          @error('nrp')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
          @error('jurusan')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add New Student!</button>
      </form>
    </div>
  </div>
</div>

@endsection