@extends('modal.button.button')
	@section('macontent')
	 	<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/akun') }}">
	 	{{ csrf_field() }}
		<div class="form-group">
			<label for="kode" class="control-label">KATEGORI AKUN:</label>
			<select class="form-control" name="kategori_id">
			  @foreach($kategori as $k)
			  <option value="{{$k->id}}">{{$k->kode}}</option>
			  @endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="keterangan" class="control-label">KETERANGAN AKUN:</label>
			<input type="text" class="form-control" id="keterangan" name="keterangan">
		</div>
	@endsection

	@section('mecontent')
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/akun/update') }}">
	 	{{ csrf_field() }}
	 	<div class="form-group">
			<input type="hidden" name="aid" id="aid">
		</div>
		<div class="form-group">
			<label for="kode" class="control-label">KATEGORI AKUN:</label>
			<select class="form-control" name="kategori_id" id="kategori_id">
			  @foreach($kategori as $k)
			  	<option value="{{$k->id}}">{{$k->kode}}</option>
			  @endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="keterangan" class="control-label">KETERANGAN AKUN:</label>
			<input type="text" class="form-control" id="keterangan" name="keterangan">
		</div>
	@endsection
