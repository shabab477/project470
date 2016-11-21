@extends('main')


@section('style')

{!! Html::style('css/boot_card.css') !!}
<style type="text/css">
	#res_container
	{
		text-align: center;
		font-size: 110%;
		font-weight: bold;
	}
</style>

@endsection

@section('content')


<!--body part-->

<div class="container desc" style="font-size:16px; margin-top:63px;max-width:660px;">
<div><h1><p class="text-center header" style="font-size:38px;margin-bottom:15px;">Search</p></h1></div>

<!--row starts-->
{!! Form::open([null,  'class' => 'form-horizontal']) !!}

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
	    
</div>

{!! Form::close(); !!}

<div class="col-sm-offset-1 col-sm-9">

    <button class='btn btn-block btn-success' onclick='goAjax()' id='	submit'>Go Query</button>
	    	
	      
</div>

</div>

<!--body part ends-->

<div id='result'>

<div class="container-fluid" id='res_container'>
	

		
	
	
</div>
	

</div>

@endsection

@section('script')

{!! Html::script('js/adder.js') !!}

<script type="text/javascript">
function goAjax()
{

  var max = document.getElementById('max').value;
  var min = document.getElementById('min').value;
  var location = document.getElementById('location').value;
  console.log('here');

  $.ajax({
  url: "/query/?max=" + max + "&min=" + min + "&location=" + location,
  type: "get", //send it through get method
  success: function(response) {
  	console.log(response);
    var json = $.parseJSON(response);
    var container = document.getElementById('res_container');

	$(json).each(function(i,val){
	   domCreator(container, val['price'], val['location'], val['address'], val['contact'], val['desc']);
	});
  },
  error: function(mess)
  {
  	console.log(mess);
  }

  });
}

</script>
@endsection
