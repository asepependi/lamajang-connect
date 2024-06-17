@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4" style="color: #033D44; font-weight: 700;">FORM UPDATE DATA PARIWISATA</h2>
    <form action="{{ route($route.'update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Silahkan Masukkan Nama" required autocomplete="off" value="{{$data->nama}}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Silahkan Masukkan Alamat" required autocomplete="off" value="{{ $data->alamat }}">
        </div>
        <div class="form-group">
            <label for="jam-buka">Jam Buka</label>
            <input type="text" class="form-control" id="jam-buka" name="jam_buka" placeholder="Silahkan Masukkan Jam Buka" required autocomplete="off" value="{{ $data->jam_buka }}">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control money" id="harga" name="harga" placeholder="Rp. 0" required autocomplete="off" value="{{ $data->harga }}">
        </div>
        <div class="form-group">
            <label for="photo">Foto <span style="color: red">(Kosongkan jika tidak ingin mengubah foto)</span></label>
            <input type="file" class="form-control-file" id="photo" name="foto">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Silahkan Masukkan Deskripsi" required autocomplete="off">{{$data->deskripsi}}</textarea>
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

