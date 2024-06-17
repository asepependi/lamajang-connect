@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4" style="color: #033D44; font-weight: 700;">FORM INPUT DATA PENGINAPAN</h2>
    <form action="{{ route($route.'store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Silahkan Masukkan Nama" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Silahkan Masukkan Alamat" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="jam-masuk-keluar">Jam Buka</label>
            <input type="text" class="form-control" id="jam-masuk-keluar" name="jam_masuk_keluar" placeholder="Silahkan Masukkan Jam Masuk Keluar" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control money" id="harga" name="harga" placeholder="Rp. 0" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" class="form-control-file" id="photo" name="foto">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Silahkan Masukkan Deskripsi" required autocomplete="off"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(".money").maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
</script>
@endsection
