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
          <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" autofocus>
        </div>
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" class="form-control" id="nrp" placeholder="Masukkan NRP" name="nrp">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Add New Student!</button>
      </form>
    </div>
  </div>
</div>

@endsection