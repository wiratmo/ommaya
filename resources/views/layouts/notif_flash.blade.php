<div class="nav-notif">
	@if(Session::has('success'))
		<div class="alert alert-success alert-dismissible" role="alert">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  			<strong>Success!</strong>  {{Session::get('success')}}
		</div>
	@elseif(Session::has('warning'))
		<div class="alert alert-warning alert-dismissible" role="alert">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  			<strong>Warning!</strong>  {{Session::get('warning')}}
		</div>
	@elseif(Session::has('denger'))
		<div class="alert alert-denger alert-dismissible" role="alert">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  			<strong>Denger!</strong>  {{Session::get('denger')}}
		</div>
	@elseif(Session::has('info'))
		<div class="alert alert-info alert-dismissible" role="alert">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  			<strong>Info!</strong>  {{Session::get('info')}}
		</div>
	@endif	
</div>
