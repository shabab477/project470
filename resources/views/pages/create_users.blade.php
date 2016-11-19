@extends('main')

@section('style')

{!! Html::style('css/rpage.css') !!}

@endsection

@section('content')

<div id='content'>

	
	{!! Form::open(['route' => 'user.store',  'class' => 'form-horizontal', 
	'onsubmit' => 'return validateForm(this)']) !!}
	 
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="name">Name:</label>
	    <div class="col-sm-4">

	    {{Form::text('name', null, array('class' => 'form-control has-error', 'required'=> '' , 'onblur' => "validateName(this, this.parentNode)", 'id'=>'name', 'placeholder'=>'Enter Your Full Name'))}}

	    </div>
	    <label class="control-label col-sm-1" for="email">Email:</label>
	    <div class="col-sm-4">
    	
    	{{Form::email('email', null, array('class' => 'form-control', 'required' => '', 'onblur' => "validateEmail(this, this.parentNode)", 'id'=>'email', 'placeholder'=>'Enter Your Email'))}}
	      
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="password">Password:</label>
	    <div class="col-sm-4">
    	  	

	      {{Form::password('password', array('class' => 'form-control', 'required' => '', 'onblur' => "validatePass(this, this.parentNode)", 'id'=>'phone', 'placeholder'=>'Give an alpha-numeric password'))}}
	    	

	    </div>
	    <label class="control-label col-sm-1" for="conf" >Phone:</label>
	    <div class="col-sm-4">
	      
	      {{Form::text('phone', null, array('class' => 'form-control', 'required' => '', 'onblur' => "validatePhone(this, this.parentNode)", 'id'=>'phone', 'placeholder'=>'Give your mobile number'))}}
	    
	      
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="you">About Yourself(255 characters max):</label>
	    <div class="col-sm-9">

	      {{Form::textArea('about', null, array('class' => 'form-control',  
	      'id'=>'you', 'placeholder'=>'Tell us about yourself, what you like and what you are looking for in 255 characters', 'maxlength'=>"255"))}}

	    </div>
	    
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="addr">Address: </label>
	    <div class="col-sm-9">

  	      {{Form::text('address', null, array('class' => 'form-control', 'required' => '', 'id'=>'addr', 'placeholder'=>'Give your address'))}}

	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-9">

	    	{{Form::submit('Create Account',  array('class' => 'btn btn-block btn-success', 'required' => '', 'id'=>'submit' ))}}
	      
	    </div>
	  </div>
	{!! Form::close(); !!}


</div>

@endsection


@section('script')

{!! Html::script('js/validation.js') !!}
{!! Html::script('js/bootbox.min.js') !!}

@endsection