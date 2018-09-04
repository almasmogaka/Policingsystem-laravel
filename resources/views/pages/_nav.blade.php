<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <!-- Brand -->
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#homepagecontent">
        <span class="navbar-toggler-icon"></span>
    </button>

  <!-- Links -->
  <div class="collapse navbar-collapse" id="homepagecontent">
    <ul class="navbar-nav nav1">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('homepage') }}">Home</a>
        </li>      

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" id="navbardrop" data-toggle="dropdown">
             About Us
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('background') }}">Background</a>
                <a class="dropdown-item" href="{{ route('planning') }}">planning</a>        
            </div>
        </li>    
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mission') }}">Mission</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.create') }}">Contact Us</a>
        </li>
        <li>      
         <!-- Button trigger modal -->
            <a href="{{ route('login') }}" class="nav-link" >
            Police Login
            </a>            
        </li>
        <li>
            <!-- Button trigger modal -->
            <a href="{{ route('admin.login.submit') }}" class="nav-link">
             Admin Login
            </a>        
        </li>
    </ul>
   </div>  
</nav> 