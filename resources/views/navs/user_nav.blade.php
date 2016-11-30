<nav class="navbar  navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><h3>Roo<span>Me</span></h3></a>
    </div>

    <!--span class="glyphicon glyphicon-log-in"></span> -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('search.index')}}"><span class="nav-text">Search Houses</span></a></li>

        <li><a href="{{route('ad.show')}}"><span class="nav-text">Create Ads</span></a></li>

{{-- 
        TODO::Give a named route for Showing the bids that I have done --}}

        <li><a href="#"><span class="nav-text">My Ads</span></a></li>
        <li>
             <a href="#"  data-toggle="dropdown"></b><span class="nav-text">My Bids</span></a>

         </li>
         <li><a href="{{route('login.getOut', array('id'=>Session::get('id')))}}"><span class="nav-text">Logout as {{ Session::get('name') }} </span> </a></li>
      </ul>
    </div>
  </div>
</nav>


<style type="text/css">
  
  .nav-text
  {
    font-size: 120%;
    font-family: 'Kite One';
  }

</style>