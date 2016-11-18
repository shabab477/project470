@if(Session::has('success'))
	
	<div class='alert alert-success'>
		
		<p><strong>Success:</strong> {{Session::get('success')}}</p>

	</div>

@endif


@if(count($errors) > 0)
	
	<div class='alert alert-danger'>
		
		<p><strong>Error:</strong> 
		<ol>
			@foreach($errors->all() as $error)

				<li>{{ $error }}</li>

			@endforeach

		</ol>

	</div>
	
@endif