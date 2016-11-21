@extends('main')


@section('content')

<!--clean this html mess later -->

<div class="container-fluid text-center">
  {{ Html::image('images/'. $user->image, 'profile picture', array('class' => 'img-circle img img-responsive', 'style'=>'margin:100px auto; width:300px;')) }}
  
  
</div>

<div class="container text-center" style="">
  
  
  <p class="desc">{{$user -> name}}</p>
</div>
<div><p class="text-center header" style="font-size:33px;">Personal Info</p></div>
<div class="container text-center desc" style="line-height: 2;font-size: 20px;">

Address: {{$user -> address}}<br/>
Contact: {{$user -> phone}}<br/>
Email: {{$user -> email}}<br/>  
About Me: {{$user -> about}}
</div>


@endsection