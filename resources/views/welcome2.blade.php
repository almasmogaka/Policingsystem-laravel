<!DOCTYPE html>
<html lang="en">
<head>

 @include('pages._head')
     
</head>
<body> 
<div class="wrapper_main"> 
 <div class="container-fluid text-left"> 

    @include('pages._jumbotron')

    @include('pages._nav')

      <div class="row">
        <div class="col-md-2 hidden-xm hidden-sm">      

        </div>    
        <div class="col-sm-12 col-md-9 spacing-top"> 
          
          @yield('content')

         <div class="row">
          <div class="col-sm-6" style="margin-top: 40px;">

            <div class="well">
              <h3>Contact Us</h3><hr>
              <p></p><h4>We are at service 24/7.</h4>
               <a href="{{ route('contact.create') }}" class="btn btn-primary">Contact us</a>
            </div>
           </div>
          <div class="col-sm-6" style="margin-top: 40px;">
            <div class="well">
              <h3>Social Network</h3><hr>
              <p>FACEBOOK</p>
              <p>Twitter</p>
              <p>Instagram</p>
            </div>
      
      </div>
      <p text-left><a class="nav-link" href="{{ route('homepage') }}">Home</a></p>
    </div><hr>
  </div>
  <div class="hidden-sm hidden-xm col-md-1 spacing-top">   
      <!--empty sidebar-->
  </div>
</div>
</div>

@include('partial._footer')

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</body>
</html>