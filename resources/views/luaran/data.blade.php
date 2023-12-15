@extends('layouts.inputdata')

@section('container')

<div class="card" >
  <div class="card-header">
    Daftar Data Luaran
  </div>
  <div class="card-header">
    <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('luaran/tambah') }}'">Add Data</button>
  </div>
  <div class="card-body">
    @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil!</strong> {{ session('msg') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <form action="" method="get">
    <div class="row mb-3">
      <label for="txtsearch" class="col-sm-2 col-form-label">Cari Data luaran</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-sm" value="{{ $search }}" placeholder="Masukkan Data" name="search" autofocus>
      </div>
      <div class="col">
        <button type="submit" title="Cari Data" class="btn btn-primary btn-sm">
          Cari
        </button>
      </div>
    </div>

  </form>
  <table class="table table-sm table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Luaran</th>
            <th>Definisi</th>
            <th>Eskpektasi ID</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      {{-- @php
        $nomor = 1+(($students->currentPage()-1)* $students->perPage());
      @endphp --}}
        @foreach ($luaran as $row)
            <tr>
                {{-- <th>{{ $loop->iteration }}</th> --}}
                {{-- <th>{{ $nomor++ }}</th> --}}
                <td>{{ $row->id }}</td>
                <td>{{ $row->luaran }}</td>
                <td>{{ $row->definisi }}</td>
                <td>{{ $row->ekspektasi_id }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>
                  <button onclick="window.location='{{ url('luaran/'.$row->id) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">Edit</button>
                  <form onsubmit="return hapus('{{ $row->luaran }}')" style="display: inline" method="post" action="{{ url('luaran/'.$row->id) }}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" title="Hapus Data" class="btn btn-sm btn-danger ">
                    Delete
                  </button>
                  </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  {!! $luaran->appends(Request::except('page'))->render() !!}
  <script>
    function hapus(name) {
      pesan = confirm('yakin Anda ingin menghapus data "' +(name)+'" ini?');
      if(pesan) return true;
      else return false;
    }
    
  </script>
</div>

@endsection