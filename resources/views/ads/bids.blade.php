@extends('main')


@section('style')
	
	<style type="text/css">
		div.result
		{
		    margin: 40px;
		    margin-top: 100px;
		    box-shadow: -15px -4px 10px 0 rgba(0, 0, 0, 0.2), 10px 6px 20px 0 rgba(0, 0, 0, 0.19);
		    padding: 15px;
		    font-size: 150%;
		    font-family: "Kite One";
		    text-align: center;
		}

		a{
			margin-top: 10px;
		}
	</style>
	
@endsection

@section('content')

<div class="container-fluid">

<div class="row">
	@foreach($user -> bids as $ad)
		<div class="result">
      
    
      <div class="row">

        <div class="col-sm-4 col-sm-offset-2">
            <p>Price: {{ $ad -> price }} Only</p>
        </div>

        <div class="col-sm-4">
            <p>Address: {{ $ad -> address }}</p>
        </div>
        
      </div>


      <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
            <p> Description: {{ $ad -> description }}</p>
        </div>

        
      </div>

      <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
            <a href="{{ route('ad.detail', $ad -> id) }}" class='btn btn-success btn-block'>Get Details</a>
        </div>

        
      </div>

      <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
            <a href="#" class='btn btn-danger btn-block'>Delete This Bid</a>
        </div>

        
      </div>


    </div>
	@endforeach
</div>
		
</div>

@endsection