@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4" style="color: #033D44; font-weight: 700;">FORM INPUT DATA BUDAYA</h2>
    <form action="{{ route($route.'store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Silahkan Masukkan Nama" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="position">Nama</label>
            <select name="position" id="position" class="form-control">
                <option value="">Silahkan Pilih Posisi Letak Gambar !</option>
                <option value="kanan">Kanan</option>
                <option value="kiri">Kiri</option>
            </select>
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
