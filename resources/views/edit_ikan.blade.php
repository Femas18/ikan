<!-- resources/views/edit_ikan.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="card bg-yellow">
    <div class="card-header">
      <h2 class="text-red">Update Ikan</h2>
    </div>
    <div class="card-body">
      <form action="{{ url('update_ikan/'.$ikan->id) }}" method="post">
        @csrf

        <div class="form-group">
          <label for="nama_ikan">Nama Ikan:</label>
          <input type="text" class="form-control" name="nama_ikan" value="{{ $ikan->nama_ikan }}" required>
        </div>

        <div class="form-group">
          <label for="jenis_ikan">Jenis Ikan:</label>
          <input type="text" class="form-control" name="jenis_ikan" value="{{ $ikan->jenis_ikan }}" required>
        </div>

        <!-- Tambahkan field lain yang ingin di-update -->

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
