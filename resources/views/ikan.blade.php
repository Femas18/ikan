<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Ikan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <style>
    /* Menambahkan warna kuning pada navigasi header */
    .navbar-light.bg-blue {
      background-color: yellow !important;
    }
    
    /* Menambahkan warna merah pada sel header tabel */
    #ikanTable thead th {
      background-color: red;
      color: white;
    }
  </style>
</head>
<body>
@extends('layouts.app')

  <!-- Navigasi Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-blue">
    <a class="navbar-brand" href="#">
      <img src="images/th.jpeg" alt="Logo" height="30" class="d-inline-block align-top">
    </a>
    <a class="navbar-brand" href="#">penjualan ikan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.html">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>
  @section('content')
  <!-- Content -->
  <div class="container mt-4">
    <h2>Data ikan</h2>
    <table id="ikanTable" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama ikan</th>
          <th>Stok ikan</th>
          <th>Jenis ikan</th>
          <th>Tanggal Buat</th>
          <th>Tanggal Update</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($lihat as $li)
          <tr>
            <td>{{ $li->id }}</td>
            <td>{{ $li->nama_ikan }}</td>
            <td>{{ $li->stok_ikan }}</td>
            <td>{{ $li->jenis_ikan }}</td>
            <td>{{ $li->created_at }}</td>
            <td>{{ $li->updated_at}}</td>
            <td>
              <a href="hapus_ikan/{{ $li->id }}" class="btn btn-outline-danger">Delete</a>
              <a href="update_ikan/{{ $li->id }}" class="btn btn-outline-primary">Update</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https
