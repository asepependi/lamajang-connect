{{-- {!! Form::model($model, ['url' => $form_url, 'class' => 'form-horizontal']) !!} --}}
<a href="{{$edit_url}}" class="btn btn-primary btn-sm mb-2">Ubah</a>
<a href="javascript:void(0)" class="btn btn-danger btn-sm delete" data-id="{{$model->id}}">Hapus</a>
{{-- <button class="btn btn-danger btn-sm delete" type="submit">Hapus</button>
{!! Form::close() !!} --}}
