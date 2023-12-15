@extends('layouts.inputdata')



@section('container')

<div class="card">
  <div class="card-header">
    Tambah Data Kondisi Klinis
  </div>
  <div class="card-body">
    <form method="post" action="{{url('kondisiKlinis')}}">
      @csrf
      <div class="row">
          <div class="col">
            <label for="txtid" class="col-sm-2 col-form-label">Nomor ID</label>
            <input type="text" class="form-control form-control-sm" id="txtid" name="txtid" placeholder="Nomor Id"  disabled>
          </div>
      </div>
      
        <div class="row">
          <div class="col">
            <label for="txtkondisi" class="col-sm-2 col-form-label">Kondisi Klinis</label>
            <input type="text" class="form-control form-control-sm @error('txtkondisi') is-invalid @enderror" list="datalistOptions" id="txtkondisi" name="txtkondisi" placeholder="Kondisi Klinis" value="{{ old('txtkondisi') }}">
              @error('txtkondisi')
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
            <label for="txtkode" class="col-sm-2 col-form-label">Kode icd10</label>
            <input type="text" class="form-control form-control-sm @error('txtkode') is-invalid @enderror" list="datalistOptions" id="txtkode" name="txtkode" placeholder="Kode icd10" value="{{ old('txtkode') }}">
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
              <button type="button" class="btn btn-secondary" onclick="window.location='{{ url('kondisiKlinis') }}'">Kembali</button>
            </div>
            
          </div>
        </div>
    </form>
  </div>
</div>


@endsection

