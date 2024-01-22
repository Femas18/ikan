<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form input Barang</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@extends('layouts.app')



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Form Input Barang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
@section('content')
<div class="container mt-5">
  <form method="post" action="/tambahformikan">
    @csrf
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nama ikan</th>
          <th scope="col">Jenis ikan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" id="namaikan" name="nama_ikan" placeholder="Masukkan nama ikan">
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" class="form-control" id="jenisikan" name="jenis_ikan" placeholder="Masukkan jenis ikan">
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
