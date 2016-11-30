@extends('main')


@section('style')

{!! Html::style('css/boot_card.css') !!}
<style type="text/css">
	div.result
	{
    margin: 40px;
    box-shadow: -15px -4px 10px 0 rgba(0, 0, 0, 0.2), 10px 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 15px;
    font-size: 150%;
    font-family: "Kite One";
    text-align: center;
	}



</style>

@endsection

@section('content')


<!--body part-->

<div class="container desc" style="font-size:16px; margin-top:63px;max-width:660px;">
<div><h1><p class="text-center header" style="font-size:38px;margin-bottom:15px;">Search</p></h1></div>

<!--row starts-->
{!! Form::open(['route' => 'search.query',  'class' => 'form-horizontal', 'method' => 'GET']) !!}

<div class="row" style="margin-bottom:15px;">
 <div class="col-md-5 col-md-offset-1">
 Search location : 
 </div>
 <div class="col-md-6">

 {!!
 	Form::select('location', array('Mohakhali' => 'Mohakhali', 'Bonani' => 'Bonani', 'Uttara' => 'Uttara', 'Gulistan' => 'Gulistan'), 'Bonani', array('id' => 'location'));
 !!}
 </div>
</div>
<!--row ends-->
<!--row starts-->
<div class="row" style="margin-bottom:15px;">
 <div class="col-md-10 col-md-offset-1">
 Min price (BDT) :
 {{Form::number('min', 0, array('class' => 'form-control', 'required' => '', 'id' => 'min'))}}

 Max Price (BDT) :
 {{Form::number('max', 100000000, array('class' => 'form-control', 'required' => '', 'id' => 'max'))}}
 </div>
 
</div>
<!--row ends-->
<div class="form-group">

  <div class="col-sm-offset-2 col-sm-9">

        {{Form::submit('Show Ads',  array('class' => 'btn btn-block btn-success', 'required' => '', 'id'=>'submit' ))}}
        
  </div>
	    
</div>

{!! Form::close(); !!}


</div>

<!--body part ends-->

<div class="container-fluid" id='res_container'>
	
  @if(!empty($ads))
    @foreach($ads as $ad)
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

    </div>
    @endforeach
    <div class="row">

      <div class="text-center">
      {{ $ads->appends(Request::query())->render() }}
      </div>
    </div>
  @endif

</div>
	

@endsection



