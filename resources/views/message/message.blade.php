@if (Session::has('save'))

<div class="container">
	<div class="alert alert-success" role='alert'>
		<strong>{{Session::get('save')}}</strong>	
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>		
	</div>
</div>

@endif

@if (Session::has('delete'))

<div class="container">
	<div class="alert alert-danger" role='alert'>
		<strong>{{Session::get('delete')}}</strong>	
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>	
	</div>
</div>

@endif

@if (Session::has('update'))

<div class="container">
	<div class="alert alert-warning" role='alert'>
		<strong>{{Session::get('update')}}</strong>	
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>	
	</div>
</div>

@endif