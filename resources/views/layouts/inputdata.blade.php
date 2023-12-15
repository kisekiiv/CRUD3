<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <title>Input Data</title>
</head>
<body>
 

  
  <div class="sidebar">
    <h3>Admin Input Data</h3>
    <a class="{{ (request()->segment('1')=='' || request()->segment('1')=='diagnosa') ? 'active' : '' }}" href="{{ url('diagnosa') }}"><i class="bi bi-file-earmark-text"></i> Diagnosa</a>
    <a class="{{ (request()->segment('1')=='gejala') ? 'active' : '' }}" href="/gejala"><i class="bi bi-lungs-fill"></i> Gejala</a>
    <a class="{{ (request()->segment('1')=='penyebab') ? 'active' : '' }}" href="/penyebab"><i class="bi bi-book"></i> Penyebab</a>
    <a class="{{ (request()->segment('1')=='kondisiKlinis') ? 'active' : '' }}" href="/kondisiKlinis"><i class="bi bi-hospital"></i> Kondisi Klinis</a>
    <a class="{{ (request()->segment('1')=='luaran') ? 'active' : '' }}" href="/luaran"><i class="bi bi-journal-bookmark"></i> Luaran</a>
    <a class="{{ (request()->segment('1')=='ekspektasi') ? 'active' : '' }}" href="/ekspektasi"><i class="bi bi-journal-bookmark"></i> Ekspektasi</a>
    <a class="{{ (request()->segment('1')=='kriteriaHasil') ? 'active' : '' }}" href="/kriteriaHasil"><i class="bi bi-journal-bookmark"></i> Kriteria Hasil</a>
    
    <div class="keluarInput">
      <a href="{{ url('dashboard') }}"><i class="bi bi-backspace-fill"></i> Kembali</a>
    </div>
  </div>
  
  <div class="content">
    <div class="judul">
      <h2>{{ $title }}</h2>
    </div>
    <div class="mt-2">
      <div class="container">
        <div class="wadah">
          @yield('container')
        </div>
      </div>
    </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>