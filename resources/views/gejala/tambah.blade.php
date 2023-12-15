@extends('layouts.inputdata')



@section('container')

<div class="card">
  <div class="card-header">
    Tambah Data Gejala
  </div>
  <div class="card-body">
    <form method="post" action="{{url('gejala')}}">
      @csrf
      <div class="row">
          <div class="col">
            <label for="txtid" class="col-sm-2 col-form-label">Nomor ID</label>
            <input type="text" class="form-control form-control-sm" id="txtid" name="txtid" placeholder="Nomor Id"  disabled>
          </div>
      </div>
      
        <div class="row">
          <div class="col">
            <label for="txtgejala" class="col-sm-2 col-form-label">Gejala</label>
            <input type="text" class="form-control form-control-sm @error('txtgejala') is-invalid @enderror" list="datalistOptions" id="txtgejala" name="txtgejala" placeholder="Gejala" value="{{ old('txtgejala') }}">
              @error('txtgejala')
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
            <label for="txtsubjek" class="col-sm-2 col-form-label">Jenis Subjektif</label>
            <input type="text" class="form-control form-control-sm @error('txtsubjek') is-invalid @enderror" list="datalistOptions" id="txtsubjek" name="txtsubjek" placeholder="Jenis Subjektif" value="{{ old('txtsubjek') }}">
              @error('txtsubjek')
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
            <label for="txtobjek" class="col-sm-2 col-form-label">Jenis Objektif</label>
            <input type="text" class="form-control form-control-sm @error('txtobjek') is-invalid @enderror" list="datalistOptions" id="txtobjek" name="txtobjek" placeholder="Jenis Objektif" value="{{ old('txtobjek') }}">
            @error('txtobjek')
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
            <label for="txtloinc" class="col-sm-2 col-form-label">Kode loinc</label>
            <input type="text" class="form-control form-control-sm @error('txtloinc') is-invalid @enderror" list="datalistOptions" id="txtloinc" name="txtloinc" placeholder="Kode Ioinc" value="{{ old('txtloinc') }}">
            @error('txtloinc')
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
              <button type="button" class="btn btn-secondary" onclick="window.location='{{ url('gejala') }}'">Kembali</button>
            </div>
            
          </div>
        </div>
    </form>
  </div>
</div>


@endsection

