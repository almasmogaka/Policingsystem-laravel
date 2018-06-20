<!DOCTYPE html>
<html lang="en">
<head>

  <title>Police administrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      padding-bottom: 5px;
    }
    .navbar-brand {
        padding-left: 80px;
    }
    .nav.navbar-nav {
        padding-top: 10px;
        margin-left: 180px;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 50px;
      background-color: #f1f1f1;
      height: 600px;
    } 
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style> 
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
        <li><a href="#">Crime statistic</a></li>
        <li><a href="#">Most wanted criminals</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Login As <span class="caret"></span></a>
            <ul class="dropdown-menu">              
                <li><a href="{{ route('admin.login') }}">Administrator</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('login') }}">Police officer</a>
              </li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-lg-1 sidenav">

      

    </div>
    <div class="col-sm-7 text-left" style="margin-top: 20px;"> 

      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('slideshow/photocat2.jpg') }}" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('slideshow/photocat3.jpg') }}" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('slideshow/photocat4.jpg') }}" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>    

      <div class="row">
      <div class="col-sm-6" style="margin-top: 40px;">

        <div class="well">
          <h3>Achievements of the police departments</h3>
          <p>Contain information of general nature.</p>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 40px;">
        <div class="well">
          <h3>Achievements of the police departments</h3>
          <p>Contain information of general nature.</p>
        </div>
      
    </div>
  </div>
  <div class="row">
      <div class="col-sm-6" style="margin-top: 10px;">

        <div class="well">
          <h3>Achievements of the police departments</h3>
          <p>Contain information of general nature.</p>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 10px;">
        <div class="well">
          <h3>Achievements of the police departments</h3>
          <p>Contain information of general nature.</p>
        </div>
      
    </div>
  </div>
        

    </div>
    <div class="col-md-4 sidenav">
        
        <div class="well">
          <h4>SUBSECTION</h4>
          <p>Methodology is the underlying principles and rules that govern a system method; on the other 
          hand,  it  is  a  systematic  procedure  for  a  set  of  activities.  Thus,  from  these  definitions  a 
          methodology  encompasses  the  methods  used  within  a  study.  This  section  presents  a  detailed 
          description of the methodology (we used to carry out our research) that was adopted to realize 
          the  research  objectives.  It  is  divided  into  the  following  subtopics:</p>
        </div>
        <div class="well" style="margin-bottom: 20px;">
          <p>Subsection</p>
          <p>Methodology is the underlying principles and rules that govern a system method; on the other 
          hand,  it  is  a  systematic  procedure  for  a  set  of  activities.  Thus,  from  these  definitions  a 
          methodology  encompasses  the  methods  used  within  a  study.  This  section  presents  a  detailed 
          description of the methodology (we used to carry out our research) that was adopted to realize 
          the  research  objectives.  It  is  divided  into  the  following  subtopics:  Methods  of  data  
          collection , and Documentation.</p>
        </div>
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">

  <p>Copyright::All Rights Reserved  @Kenya police service unit</p>

</footer>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>