@extends('layouts.head')
@section('content')
	@include('layouts.notif_flash')
	@include('modal.kategori',['type'=>'add', 'tbmodel'=>'success', 'sbmodel'=>'md', 'ibmodel'=>'plus','nbmodel'=>'Tambah Kategori','tmodel'=>'Tambah Kategori Baru','idmodel'=>'addkategori'])
	@include('modal.kategori',['type'=>'edit','tmodel'=>'Rubah Kategori','idmodel'=>'editkategori'])

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
	@foreach($kategori as $k)
		<div class="col-sm-6 col-lg-3">
		    <div class="card card-inverse card-primary">
		        <div class="card-block pb-0">
		            <div class="btn-group float-xs-right">
		                <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                    <i class="icon-settings"></i>
		                </button>
		                <div class="dropdown-menu dropdown-menu-right">
		                    <a class="ekategori dropdown-item" data-toggle="modal" data-kid="{{$k->id}}" data-kode="{{$k->kode}}" data-ket="{{$k->keterangan}}" href="#editkategori"> <i class="fa fa-edit"></i>Ubah</a>
		                    
		                    <form action="{{ url('admin/kategori/delete') }}" method="POST" >
		                    	{{ method_field('DELETE') }}
                            	{{ csrf_field() }}	
                            	<input type="hidden" name="kidh" id="kidh" value="{{$k->id}}">
                            	<button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Hapus</button>
		                    </form>
		                </div>
		            </div>
		            KODE
		            <h4 class="mb-0">{{$k->kode}}</h4>
		            <p style="font-weight: bold;">{{$k->keterangan}}</p>
		            <p style="text-align: right;">{{$k->name}}<br><small>{{$k->updated_at->diffForHumans()}}</small></p>
		        </div>
		    </div>
		</div>
	@endforeach
	</div>
@endsection
@push('scripts')
<script type="text/javascript">
	$(document).on("click", ".ekategori", function () {
     var kid = $(this).data('kid');
     var kode = $(this).data('kode');
     var keterangan = $(this).data('ket');

     $(".modal-body #kid").val(kid);
     $(".modal-body #kode").val(kode);
     $(".modal-body #keterangan").val(keterangan);
});
</script>
@endpush

