@extends('layouts.inputdata')



@section('container')

<div class="card">
  <div class="card-header">
    Edit Data Penyebab
  </div>
  <div class="card-body">
    <form method="post" action="{{url('penyebab/'.$txtid)}}">
      @csrf
      @method('PUT')
      <div class="row">
          <div class="col">
            <label for="txtid" class="form-label">Nomor ID</label>
            <input type="text" class="form-control form-control-sm" id="txtid" name="txtid" placeholder="Nomor Id" value="{{ $txtid }}" disabled>
          </div>
      </div>
      
        <div class="row">
          <div class="col">
            <label for="txtpenyebab" class="form-label">Penyebab</label>
            <input type="text" class="form-control form-control-sm @error('txtpenyebab') is-invalid @enderror" list="datalistOptions" id="txtpenyebab" name="txtpenyebab" placeholder="Kode Diagnosa" value="{{ $txtpenyebab }}">
              @error('txtpenyebab')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            <datalist id="datalistOptions">
              <option value="{{ $txtpenyebab }}">
              {{-- <option value="2.Wonotunggal">
              <option value="3.Kandeman">
              <option value="4.Tulis">
              <option value="5.Gringsing"> --}}
            </datalist>
          </div>
        </div>
      
        <div class="row">
          <div class="col">
            <label for="txtdibuat" class="form-label">Dibuat Pada</label>
            <input type="text" class="form-control" id="txtdibuat" placeholder="Dibuat Pada" name="txtdibuat" value="{{ $txtdibuat }}" disabled >
          
          </div>
          <div class="col">
            <label for="txtupdate" class="form-label">Update Pada</label>
            <input type="text" class="form-control" id="txtupdate" placeholder="Dibuat Pada" name="txtupdate" value="{{ $txtupdate }}" disabled>
          
          </div>
          
        </div>
        <div class="row">
          <div class="tombolInput">
            <div class="col">
              <button type="submit" class="btn btn-warning">Edit Data</button>
            </div>
            <div class="tombolKembali">
              <button type="button" class="btn btn-secondary" onclick="window.location='{{ url('penyebab') }}'">Kembali</button>
            </div>
          </div>
        </div>
  </form>
  </div>
</div>


@endsection

