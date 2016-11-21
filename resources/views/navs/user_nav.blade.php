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
        <li><a href="{{route('search.index')}}"><span class="glyphicon glyphicon-search"></span></a></li>
        <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></b><span class="glyphicon glyphicon-bullhorn"></span></a>

         </li>
         <li><a href="{{route('user.show', array('id'=>Session::get('id')))}}"><span class="glyphicon glyphicon-th-large"></span> </a></li>
      </ul>
    </div>
  </div>
</nav>