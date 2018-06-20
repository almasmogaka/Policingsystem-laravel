<!DOCTYPE html>
<html lang="en">
<head>

  @include('pages._head')
  
</head>
<body>
<div class="wrapper_main">
  <div class="container-fluid text-left">

    @include('pages._jumbotron')

      <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- Brand -->
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#homepagecontent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="homepagecontent">
        <ul class="navbar-nav nav1">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? "active" : ""}}" href="/home">Home</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ Request::is('crimes/create') ? "active" : ""}}" href="{{ route('crimes.create') }}">Register Crime</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link " href="#">Retrieve Crime</a>
          </li> 

          <!-- Dropdown -->
          <li class="nav-item dropdown nav-item-right">
            <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" id="navbardrop" data-toggle="dropdown">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('crimes.index') }}">List of crimes</a><hr>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">{{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                      </form>
              
            </div>
          </li> 
          </ul>
          </div>


    
    <!--  <a class="navbar-brand" href="/home">Police Information System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('home') ? "active" : ""}}"><a href="/home">Home</a></li>        
        <li class="{{ Request::is('crimes/create') ? "active" : ""}}"><a href="{{ route('crimes.create') }}">Register Crime</a></li>
        <li class="{{ Request::is('crimes') ? "active" : ""}}"><a href="{{ route('crimes.index') }}">Retrieve Crime</a></li>        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">              
                <li><a href="{{ route('crimes.index') }}">List of crimes</a></li>
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
  </div>-->
  </nav>
     
    <div class="row content">
      <div class="col-sm-1">
        

      </div>
      <div class="col-sm-10 text-left"> 
        @include('partial._messages')

      @yield('content')       

      </div>
      <div class="col-sm-1">        
        
      </div>
    </div>
  </div><hr>

  <footer class="container-fluid text-center">

   <p>Copyright:: Police information system&copyAll Rights Reserved </p>

  </footer>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</body>
</html>