@extends('layouts.inputdata')



@section('container')

<div class="card">
  <div class="card-header">
    Tambah Data Luaran
  </div>
  <div class="card-body">
    <form method="post" action="{{url('luaran')}}">
      @csrf
      <div class="row">
          <div class="col">
            <label for="txtid" class="col-sm-2 col-form-label">Nomor ID</label>
            <input type="text" class="form-control form-control-sm" id="txtid" name="txtid" placeholder="Nomor Id"  disabled>
          </div>
      </div>
      
        <div class="row">
          <div class="col">
            <label for="txtluaran" class="col-sm-2 col-form-label">Luaran</label>
            <input type="text" class="form-control form-control-sm @error('txtluaran') is-invalid @enderror" list="datalistOptions" id="txtluaran" name="txtluaran" placeholder="Luaran" value="{{ old('txtluaran') }}">
              @error('txtluaran')
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
            <label for="txtekspekID" class="col-sm-2 col-form-label">Ekspektasi ID</label>
            <input type="text" class="form-control form-control-sm @error('txtekspekID') is-invalid @enderror" list="datalistOptions" id="txtekspekID" name="txtekspekID" placeholder="Ekspektasi ID" value="{{ old('txtekspekID') }}">
              @error('txtekspekID')
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
              <button type="button" class="btn btn-secondary" onclick="window.location='{{ url('luaran') }}'">Kembali</button>
            </div>
            
          </div>
        </div>
    </form>
  </div>
</div>


@endsection

