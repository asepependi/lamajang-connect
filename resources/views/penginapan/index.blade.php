@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4" style="color: #033D44; font-weight: 700;">DAFTAR PENGINAPAN</h2>
    <div class="mb-3">
        <a href="{{ route($route.'create') }}" class="btn btn-success">Tambah</a>
    </div>
    <table class="table table-striped data-table">
        <thead style="background-color: #033D44;">
            <tr style="color: white !important;">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jam Masuk dan Keluar</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody style="color: #033D44;">
        </tbody>
    </table>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route($route.'index') }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            { data: 'nama', name: 'nama' ,orderable: false, searchable: false},
            { data: 'foto', name: 'foto' ,orderable: false, searchable: false},
            { data: 'deskripsi', name: 'deskripsi', orderable: false, searchable: false},
            { data: 'alamat', name: 'alamat', orderable: false, searchable: false},
            { data: 'jam_masuk_keluar', name: 'jam_masuk_keluar', orderable: false, searchable: false},
            { data: 'harga', name: 'harga', orderable: false, searchable: false},
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ],
    });
    $('body').on('click', '.delete', function () {
        var id = $(this).data("id");
        var url = "{{ route($route.'delete', 'id')}}"
        url = url.replace('id', id)
        var form = new FormData()
        form.append('_token', $('meta[name="csrf-token"]').attr('content'));
        form.append('id', id)
        swal({
            title: 'Apakah Anda Yakin ?',
            text: 'Ingin menghapus data ini',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fa7f3',
            cancelButtonColor: '#d57171',
            confirmButtonText: 'Ya, Hapus !',
            allowOutsideClick: false
        }).then(function(result){
            if (result.value) {
                $.ajax({
                    url: url,
                    type: 'post',
                    data: form,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status) {
                            table.draw()
                            swal({
                                title: 'Berhasil !',
                                text: res.data.message,
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#4fa7f3',
                                cancelButtonColor: '#d57171',
                                confirmButtonText: 'OK',
                                allowOutsideClick: false
                            });
                        }
                    }
                })
            }
        });
    });
</script>
@endsection
