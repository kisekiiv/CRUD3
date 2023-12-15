@extends('layouts.inputdata')



@section('container')

<div class="card">
  <div class="card-header">
    Tambah Data Diagnosa
  </div>
  <div class="card-body">
    <form method="post" action="{{url('diagnosa')}}">
      @csrf
      <div class="row">
          <div class="col">
            <label for="txtid" class="col-sm-2 col-form-label">Nomor ID</label>
            <input type="text" class="form-control form-control-sm" id="txtid" name="txtid" placeholder="Nomor Id"  disabled>
          </div>
      </div>
      
        <div class="row">
          <div class="col">
            <label for="txtkode" class="col-sm-2 col-form-label">Kode Diagnosa</label>
            <input type="text" class="form-control form-control-sm @error('txtkode') is-invalid @enderror" list="datalistOptions" id="txtkode" name="txtkode" placeholder="Kode Diagnosa" value="{{ old('txtkode') }}">
              @error('txtkode')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            <datalist id="datalistOptions">
              <option value="1.Batang">
              <option value="2.Wonotunggal">
              <option value="3.Kandeman">
              <option value="4.Tulis">
              <option value="5.Gringsing">
            </datalist>
          </div>
        </div>
      
        <div class="row">
          <div class="col">
            <label for="txtnama" class="col-sm-2 col-form-label">Nama Diagnosa</label>
            <input type="text" class="form-control form-control-sm @error('txtnama') is-invalid @enderror" list="datalistOptions" id="txtnama" name="txtnama" placeholder="Nama Diagnosa" value="{{ old('txtnama') }}">
              @error('txtnama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
              @enderror
            <datalist id="datalistOptions">
              <option value="1.Batang">
              <option value="2.Wonotunggal">
              <option value="3.Kandeman">
              <option value="4.Tulis">
              <option value="5.Gringsing">
            </datalist>
          </div>
        </div>
      
        <div class="row">
          <div class="col">
            <label for="txtdefinisi" class="col-sm-2 col-form-label">Definisi</label>
            <input type="text" class="form-control form-control-sm @error('txtdefinisi') is-invalid @enderror" list="datalistOptions" id="txtdefinisi" name="txtdefinisi" placeholder="Definisi" value="{{ old('txtdefinisi') }}">
            @error('txtdefinisi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
              @enderror
            <datalist id="datalistOptions">
              <option value="1.Batang">
              <option value="2.Wonotunggal">
              <option value="3.Kandeman">
              <option value="4.Tulis">
              <option value="5.Gringsing">
            </datalist>
          </div>
        </div>
  
        <div class="row">
          <div class="col">
            <label for="txtuser" class="col-sm-2 col-form-label">User</label>
            <input type="text" class="form-control form-control-sm @error('txtuser') is-invalid @enderror" list="datalistOptions" id="txtuser" name="txtuser" placeholder="User" value="{{ old('txtuser') }}">
            <datalist id="datalistOptions">
              <option value="1.Batang">
              <option value="2.Wonotunggal">
              <option value="3.Kandeman">
              <option value="4.Tulis">
              <option value="5.Gringsing">
            </datalist>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="txtdibuat" class="col-sm-2 col-form-label">Dibuat Pada</label>
            <input type="text" class="form-control" id="txtdibuat" placeholder="Dibuat Pada"  disabled >
          
          </div>
          <div class="col">
            <label for="txtupdate" class="col-sm-2 col-form-label">Update Pada</label>
            <input type="text" class="form-control" id="txtupdate" placeholder="Dibuat Pada"  disabled >
          
          </div>
          
        </div>
        <div class="row">
          <div class="tombolInput">
            <div class="col">
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            <div class="tombolKembali">
              <button type="button" class="btn btn-secondary" onclick="window.location='{{ url('diagnosa') }}'">Kembali</button>
            </div>
            
          </div>
        </div>
    </form>
  </div>
</div>


@endsection

