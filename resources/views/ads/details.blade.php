@extends('main')


@section('style')

	<style type="text/css">
		
		div.main
		{
			margin: 0 auto;
			margin-top: 100px;
			font-family: 'Kite One';
			font-size: 130%;
			text-align: center;
		}

		form
		{
			margin-top: 10px;
		}

		h1
		{
			font-family: 'Pacifico';
			margin-top: 10px;

		}

		div.row
		{
			margin-top: 10px;
		}
	</style>

@endsection


@section('content')

<div class="container-fluid main">

	<h1 class="text-center">Details</h1>

	<div class="row">

		<div class="col-sm-3 col-sm-offset-3">

			<p>Ad Given By: {{ $info -> user -> name }}</p>
			
		</div>
		
		<div class="col-sm-3 col-sm-offset-1">

			<p>Contact info: {{ $info -> user -> phone }}</p>
			
		</div>
		
	</div>

	<div class="row">

		<div class="col-sm-3 col-sm-offset-3">

			<p>Price: {{ $info -> price }}</p>
			
		</div>
		
		<div class="col-sm-3 col-sm-offset-1">

			<p>Address: {{ $info -> user  -> address }}</p>
			
		</div>
		
	</div>

	<div class="row">

		<div class="col-sm-7 col-sm-offset-3">
			<p>Description: {{ $info -> description }}</p>
		</div>
		
		
	</div>

	<div id='map' style="width:100%;height:500px">
		
	</div>

	<div class="row">
		{!! Form::open(['route' => 'bid.post',  'class' => 'form-horizontal']) !!}


    		{{Form::hidden('bid_to', $info -> id, array('id'=>'bid_to'))}}

			<div class="col-sm-7 col-sm-offset-3">
				{{Form::submit('Bid On This Ad',  array('class' => 'btn btn-block btn-success', 'required' => 'true', 'id'=>'submit' ))}}
			</div>

		{!! Form::close(); !!}
		
		
	</div>
	
</div>


@endsection


@section('script')
<script type="text/javascript">
	
	function myMap()
	{
	  var mapCanvas = document.getElementById("map");
	  var myCenter = new google.maps.LatLng(23.78, 90.41); 
	  var mapOptions = {
	    center: myCenter,
	    zoom:15,
	    mapTypeId:google.maps.MapTypeId.HYBRID
	  };

	  var map = new google.maps.Map(mapCanvas,mapOptions);
  	  map.setTilt(0);
  	  var marker = new google.maps.Marker({
		  position:myCenter,
		  animation:google.maps.Animation.BOUNCE
	  });

	  marker.setMap(map);
	}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAat5QaTPVfii9rFZ9DTSYOOfE6vf9C3yM&callback=myMap"></script>



@endsection


