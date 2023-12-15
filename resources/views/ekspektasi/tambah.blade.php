@extends('layouts.inputdata')



@section('container')

<div class="card">
  <div class="card-header">
    Tambah Data Ekspektasi
  </div>
  <div class="card-body">
    <form method="post" action="{{url('ekspektasi')}}">
      @csrf
      <div class="row">
          <div class="col">
            <label for="txtid" class="col-sm-2 col-form-label">Nomor ID</label>
            <input type="text" class="form-control form-control-sm" id="txtid" name="txtid" placeholder="Nomor Id"  disabled>
          </div>
      </div>
      
        <div class="row">
          <div class="col">
            <label for="txtekspektasi" class="col-sm-2 col-form-label">Ekspektasi</label>
            <input type="text" class="form-control form-control-sm @error('txtekspektasi') is-invalid @enderror" list="datalistOptions" id="txtekspektasi" name="txtekspektasi" placeholder="Ekspektasi" value="{{ old('txtekspektasi') }}">
              @error('txtekspektasi')
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
              <button type="button" class="btn btn-secondary" onclick="window.location='{{ url('ekspektasi') }}'">Kembali</button>
            </div>
            
          </div>
        </div>
    </form>
  </div>
</div>


@endsection

