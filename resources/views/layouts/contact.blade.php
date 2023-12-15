@extends('layouts.main')

@section('content')

<div class="kontak">
    <h2>Contact</h2>
    <p><i>Tulis Disini!</i></p>
    <div class="row align-items-start">
        <div class="col">
            <div class="info">
                <i class="fa fa-map-marker" style="width:30px"></i> Batang, Indonesia<br>
                <i class="fa fa-phone" style="width:30px"></i> Phone: 082327114116<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Email: nonix.portal@gmail.com<br> 
            </div>
        </div>
        <div class="col-auto">
            <div class="inputan">
                <div class="row align-items-start">
                    <div class="col-auto mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="col-auto">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email@example.com">
                    </div>
                </div>
                <div class="col-auto">
                    <textarea type="email" class="form-control" id="isiPesan" placeholder="Pesan"></textarea>
                </div>
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <h3>Alamat</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7960001743563!2d109.7139591793869!3d-6.914977075253614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7025cb8ffc22a1%3A0x9bec6b758f18f81c!2sRSUD%20Batang%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1701576441738!5m2!1sid!2sid" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
</div>

@endsection