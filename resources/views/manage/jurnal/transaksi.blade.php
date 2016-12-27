@extends('layouts.head')
@push('style')
	<link rel="stylesheet" type="text/css" href="/css/dataTables.css">
@endpush
@section('content')
    @include('layouts.notif_flash')
    @include('modal.transaksi',['type'=>'add', 'tbmodel'=>'primary', 'sbmodel'=>'md', 'ibmodel'=>'plus','nbmodel'=>'Tambah transaksi','tmodel'=>'Tambah transaksi Baru','idmodel'=>'addtransaksi'])
    @include('modal.transaksi',['type'=>'edit','tmodel'=>'Rubah transaksi','idmodel'=>'edittransaksi'])
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Kode Akun</th>
                <th>Keterangan Kode Akun</th>
                <th>Tanggal</th>
                <th>Pembuat</th>
                <th>Debet</th>
                <th>Kredit</th>
                <th>Keterangan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($transaksi as $t)

            <tr>
                <td>{{$t->kode}}-{{$t->nu}}</td>
                <td>{{$t->aket}}</td>
                <td>{{$t->tanggal}}</td>
                <td>{{$t->name}}</td>
                <td>Rp {{number_format($t->debet)}}</td>
                <td>Rp {{number_format($t->kredit)}}</td>
                <td>{{$t->tket}}</td>
                <td>
                    <button class="etransaksi btn btn-primary btn-sm"  data-toggle="modal" data-tid="{{$t->tid}}" data-aid="{{$t->aid}}" data-tket="{{$t->tket}}"" data-debet="{{$t->debet}}" data-kredit="{{$t->kredit}}" href="#edittransaksi">
                        <i class="fa fa-edit"></i>
                        Edit
                    </button>
                    @if(Auth::user()->role_id ===3)

                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@push('scripts')

    <script type="text/javascript">
        $(document).on("click", ".etransaksi", function () {
         var tid = $(this).data('tid');
         var aid = $(this).data('aid');
         var debet = $(this).data('debet');
         var kredit = $(this).data('kredit');
         var tket = $(this).data('tket');
         $(".modal-body #tid").val(tid);
         $(".modal-body #transaksi_id").val(aid);
         $(".modal-body #debet").val(debet);
         $(".modal-body #kredit").val(kredit);
         $(".modal-body #keterangan").val(tket);
    });
    </script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>
	<script type="text/javascript" src="/js/dataTables.js"></script>

@endpush