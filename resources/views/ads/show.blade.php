@extends('main')





@section('content')

<div id='content'>

	
	{!! Form::open(['route' => 'ad.create',  'class' => 'form-horizontal']) !!}
	 
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="name">House Price:</label>
	    <div class="col-sm-4">

	    {{Form::number('price', null, array('class' => 'form-control', 'required'=> 'true', 'id'=>'name', 'placeholder'=>'Enter Your House Price'))}}

	    </div>
	    <label class="control-label col-sm-1" for="address">Address:</label>
	    <div class="col-sm-4">
    	
    	{{Form::text('address', null, array('class' => 'form-control', 'required' => '',  'placeholder'=>'Enter Your Address'))}}


    	{{Form::hidden('latitude', null, array('id'=>'latitude'))}}

    	{{Form::hidden('longitude', null, array('id'=>'longitude'))}}
	      
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="description">Description:</label>
	    <div class="col-sm-4">
    	  	

	      {{Form::textarea('description', null, array('class' => 'form-control', 'required' => '',  'id'=>'description', 'placeholder'=>'Give the description of the house'))}}
	    	

	    </div>

	    <label class="control-label col-sm-1" for="description">Area:</label>
	    <div class="col-sm-4">
    	  	

	      {{Form::select('location', array('Mohakhali' => 'Mohakhali', 'Banani' => 'Banani', 'Old Dhaka' => 'Old Dhaka', 'Mirpur' => 'Mirpur'), null, array('class' => 'form-control'))}}
	    	

	    </div>
	    
	  </div>
	  
	  
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-9">

	    	{{Form::submit('Create Ad',  array('class' => 'btn btn-block btn-success', 'required' => '', 'id'=>'submit' ))}}
	      
	    </div>
	  </div>
	{!! Form::close(); !!}


</div>

@endsection


@section('script')

<script type="text/javascript">
	
$(function(){
	navigator.geolocation.getCurrentPosition(function(position)
	{
		$("#latitude").val(position.coords.latitude);
		$("#longitude").val(position.coords.longitude);
		
	});
});

</script>

@endsection