@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4" style="color: #033D44; font-weight: 700;">FORM UPDATE DATA BUDAYA</h2>
    <form action="{{ route($route.'update', $budaya->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Silahkan Masukkan Nama" required autocomplete="off" value="{{ $budaya->nama }}">
        </div>
        <div class="form-group">
            <label for="photo">Foto <span style="color: red">(Kosongkan jika tidak ingin mengubah foto)</span></label>
            <input type="file" class="form-control-file" id="photo" name="foto">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Silahkan Masukkan Deskripsi" required autocomplete="off">{{$budaya->deskripsi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
