<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <!-- Brand -->  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#homepagecontent">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="homepagecontent">
  <ul class="navbar-nav nav1">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('admin') ? "active" : ""}}" href="{{ route('admin.dashboard') }}">Home</a>
    </li> 
    <li class="nav-item">
      <a class="nav-link {{ Request::is('admin/tests') ? "active" : ""}}" href="{{ route('tests.index') }}">Reported Crimes</a>
    </li> 
    <li class="nav-item">
      <a class="nav-link {{ Request::is('admin/index') ? "active" : ""}}" href="{{ route('admin.index') }}">Police Details</a>
    </li> 
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" id="navbardrop" data-toggle="dropdown">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item {{ Request::is('admin') ? "active" : ""}}" href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a class="dropdown-item {{ Request::is('admin/tests') ? "active" : ""}}" href="{{ route('crimetypes.create') }}">Add Crime type</a><hr>
        <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>       
      </div>
    </li> 
  </ul>
  </div>

<!--<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Police Information System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('admin') ? "active" : ""}}"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="{{ Request::is('admin/tests') ? "active" : ""}}"><a href="{{ route('tests.index') }}">Reported Crimes</a></li>
        <li class="{{ Request::is('admin/index') ? "active" : ""}}"><a href="{{ route('admin.index') }}">Police Details</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            myaccount <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('admin') ? "active" : ""}}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="{{ Request::is('crimetypes/create') ? "active" : ""}}"><a href="{{ route('crimetypes.create') }}">Add Crime type</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('admin.logout') }}">Logout</a>
              </li>
            </ul>
        </li>
      </ul>
    </div>
  </div>-->
</nav>