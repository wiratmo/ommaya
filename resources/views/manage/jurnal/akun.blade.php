@extends('layouts.head')
@section('content')
	@include('layouts.notif_flash')
	@include('modal.akun',['type'=>'add', 'tbmodel'=>'primary', 'sbmodel'=>'md', 'ibmodel'=>'plus','nbmodel'=>'Tambah Akun','tmodel'=>'Tambah akun Baru','idmodel'=>'addakun'])
	@include('modal.akun',['type'=>'edit','tmodel'=>'Rubah akun','idmodel'=>'editakun'])

@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible" role="alert">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<!--  -->
	<div class="row">	
	@foreach($akun as $a)
		<div class="col-sm-6 col-lg-3">
		    <div class="card card-inverse card-danger">
		        <div class="card-block pb-0">
		            <div class="btn-group float-xs-right">
		                <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                    <i class="icon-settings"></i>
		                </button>
		                <div class="dropdown-menu dropdown-menu-right">
		                    <a class="eakun dropdown-item" data-toggle="modal" data-aid="{{$a->id}}" data-kid="{{$a->kid}}" data-ket="{{$a->keterangan}}" href="#editakun"> <i class="fa fa-edit"></i>Ubah</a>
		                    
		                    <form action="{{ url('admin/akun/delete') }}" method="POST" >
		                    	{{ method_field('DELETE') }}
                            	{{ csrf_field() }}	
                            	<input type="hidden" name="aid" id="aid" value="{{$a->id}}">
                            	<button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Hapus</button>
		                    </form>
		                </div>
		            </div>
		            KODE AKUN
		            <h4 class="mb-0">{{$a->kode}}{{$a->nu}}</h4>
			            <p style="font-weight: bold;">{{$a->keterangan}}</p>
		            <div class="row">
		            	<div class="col-md-6 jakun debet" >
		            		<p><b>Jumlah Debet</b><br> Rp {{number_format($a->debet)}}</p>	<br>
		            	</div>
		            	<div class="col-md-6 jakun kredit">
		            		<p><b>Jumlah Kredit</b><br> Rp {{number_format($a->kredit)}}</p>	
		            	</div>
		            	<p style="text-align: right;">{{$a->name}}<br><small>{{$a->updated_at->diffForHumans()}}</small></p>
		            </div>
		        </div>
		    </div>
		</div>
	@endforeach
	</div>
@endsection
@push('scripts')
<script type="text/javascript">
	$(document).on("click", ".eakun", function () {
     var aid = $(this).data('aid');
     var kid = $(this).data('kid');
     var keterangan = $(this).data('ket');
     
     $(".modal-body #aid").val(aid);
     $(".modal-body #kategori_id").val(kid);
     $(".modal-body #keterangan").val(keterangan);
});
</script>
@endpush

