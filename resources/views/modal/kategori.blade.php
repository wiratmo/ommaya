@extends('modal.button.button')
	@section('macontent')
	 	<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/kategori') }}">
	 	{{ csrf_field() }}
		<div class="form-group">
			<label for="kode" class="control-label">KODE KATEGORI:</label>
			<input type="text" class="form-control" id="kode" name="kode">
		</div>
		<div class="form-group">
			<label for="keterangan" class="control-label">KETERANGAN KODE:</label>
			<input type="text" class="form-control" id="keterangan" name="keterangan">
		</div>
	@endsection

	@section('mecontent')
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/kategori/update') }}">
	 	{{ csrf_field() }}
	 	<div class="form-group">
			<input type="hidden" name="kid" id="kid">
		</div>
		<div class="form-group">
			<label for="kode" class="control-label">KODE KATEGORI:</label>
			<input type="text" class="form-control" id="kode" name="kode">
		</div>
		<div class="form-group">
			<label for="keterangan" class="control-label">KETERANGAN KODE:</label>
			<input type="text" class="form-control" id="keterangan" name="keterangan">
		</div>
	@endsection
