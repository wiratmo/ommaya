<!-- Button trigger modal -->
@if($type === 'add')
<div class="row cposition">
  <button type="button" class="btn btn-{{ $tbmodel }} btn-{{$sbmodel}} bspace" data-toggle="modal" data-target="#{{$idmodel}}"> <i class="icon-{{$ibmodel}} icons font-2xl" style="z-index: 10000;"></i> {{$nbmodel}}
  </button>
</div>
@endif

<!-- Modal -->
<div class="modal fade" id="{{$idmodel}}" tabindex="-1" role="dialog" aria-labelledby="{{$idmodel}}Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" style="text-align: center;" id="{{$idmodel}}Label">{{$tmodel}}</h5>
      </div>
      <div class="modal-body">
        @if($type === 'add')
          @yield('macontent')
        @elseif($type == 'edit')
          @yield('mecontent')
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>