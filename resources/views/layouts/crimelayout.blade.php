<!DOCTYPE html>
<html lang="en">
<head>

  @include('partial._head')
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="
        images/KenyaPolice.jpg" class="img-responsive img-circle" height="30px" width="50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Register Crime</a></li>
        <li><a href="#">Retrieve Crime</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">              
                <li><a href="#">List of crimes</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

      <p><a href="#">Most wanted criminals</a></p>
      <p><a href="#">Stastics</a></p>
      <p><a href="#">Any other link</a></p>

    </div>
    <div class="col-sm-10 text-left"> 

    @yield('content')       

    </div>
  </div>
</div>

<footer class="container-fluid text-center">

  <p>Copyright::All Rights Reserved  @Kenya police service unit</p>

</footer>
</body>
</html>