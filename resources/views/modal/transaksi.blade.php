@extends('modal.button.button')
	@section('macontent')
        @if(Auth::user()->role_id === 1)
		 	<form class="form-horizontal" role="form" method="POST" action="{{ url('/pegawai/transaksi') }}">
        @elseif(Auth::user()->role_id === 3)
		 	<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/transaksi') }}">
        @endif

	 	{{ csrf_field() }}
		<div class="form-group">
			<label for="kode" class="control-label">KATEGORI AKUN:</label>
			<select class="form-control" name="transaksi_id">
			  @foreach($kode as $k)
			  <option value="{{$k->id}}">{{$k->kode}}-{{$k->nu}}  | {{$k->keterangan}}</option>
			  @endforeach
			</select>
		</div>

		<div class="form-group">
		<label for="kode" class="control-label">DEBET:</label>
			<div class="input-group">
			    <span class="input-group-addon">Rp </span>
			    <input type="number" class="form-control" id="debet" name="debet" placeholder="3000000">
			</div>
		</div>
		
		<div class="form-group">
		<label for="kode" class="control-label">KREDIT:</label>
			<div class="input-group">
			    <span class="input-group-addon">Rp </span>
			    <input type="number" class="form-control" id="kredit" name="kredit" placeholder="3000000">
			</div>
		</div>

		<div class="form-group">
			<label for="keterangan" class="control-label">KETERANGAN TRANSAKSI:</label>
			<input type="text" class="form-control" id="keterangan" name="keterangan">
		</div>
	@endsection

	@section('mecontent')
		@if(Auth::user()->role_id === 1)
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/pegawai/transaksi/update') }}">
        @elseif(Auth::user()->role_id === 3)
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/transaksi/update') }}">
        @endif
	 	{{ csrf_field() }}
	 	<div class="form-group">
	 		<input type="hidden" name="tid" id="tid">
	 	</div>
		<div class="form-group">
			<label for="kode" class="control-label">KATEGORI AKUN:</label>
			<select class="form-control" name="transaksi_id" id="transaksi_id">
			  @foreach($kode as $k)
			  <option value="{{$k->id}}">{{$k->kode}}-{{$k->nu}}  | {{$k->keterangan}}</option>
			  @endforeach
			</select>
		</div>

		<div class="form-group">
		<label for="kode" class="control-label">DEBET:</label>
			<div class="input-group">
			    <span class="input-group-addon">Rp </span>
			    <input type="number" class="form-control" id="debet" name="debet" placeholder="3000000">
			</div>
		</div>
		
		<div class="form-group">
		<label for="kode" class="control-label">KREDIT:</label>
			<div class="input-group">
			    <span class="input-group-addon">Rp </span>
			    <input type="number" class="form-control" id="kredit" name="kredit" placeholder="3000000">
			</div>
		</div>

		<div class="form-group">
			<label for="keterangan" class="control-label">KETERANGAN TRANSAKSI:</label>
			<input type="text" class="form-control" id="keterangan" name="keterangan">
		</div>
	@endsection
