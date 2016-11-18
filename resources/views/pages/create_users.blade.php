@extends('main')

@section('style')

{!! Html::style('css/rpage.css') !!}

@endsection

@section('content')

<div id='content'>

	
	 <form class="form-horizontal">
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="name">Name:</label>
	    <div class="col-sm-4">
	      <input type="text" class="form-control has-error" onblur='validateName(this, this.parentNode)' id="name" placeholder="Enter Your Full Name" required="true">
	    </div>
	    <label class="control-label col-sm-1" for="email">Email:</label>
	    <div class="col-sm-4">
	      <input type="email" class="form-control" id="email" onblur='validateEmail(this, this.parentNode)' placeholder="Enter Your email" required="true">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="password">Password:</label>
	    <div class="col-sm-4">
	      <input type="password" class="form-control" onblur='validatePass(this, this.parentNode)' id="password" placeholder="minimum of 7 characters and alpha-numeric" required="true">
	    </div>
	    <label class="control-label col-sm-1" for="conf" >Confirm:</label>
	    <div class="col-sm-4">
	      <input type="password" class="form-control" id="conf" placeholder="Give the same password" onblur="validateConf(this.form['password'],this,  this.parentNode)" required="true">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="you">You are:</label>
	    <div class="col-sm-4">
	      <input type="text" class="form-control" id="you" placeholder="Enter your address">
	    </div>
	    <label class="control-label col-sm-1" for="phone">Phone:</label>
	    <div class="col-sm-4">
	      <input type="text" class="form-control" onblur='validatePhone(this, this.parentNode)' id="phone" placeholder="Give your mobile number" required="true">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-1 col-sm-offset-1" for="addr">Address(Not Required): </label>
	    <div class="col-sm-9">
	      <input type="text" class="form-control" id="addr" placeholder="Enter your address">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-9">
	      <button type="submit" class="btn btn-block btn-success">Submit</button>
	    </div>
	  </div>
	</form>


</div>

@endsection


@section('script')

{!! Html::script('js/validation.js') !!}

@endsection