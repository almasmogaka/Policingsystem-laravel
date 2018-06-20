<!DOCTYPE html>
<html lang="en">
<head>

  @include('pages._head')
  
</head>
<body>
<div class="wrapper_main"> 
 <div class="container-fluid text-left">

  @include('pages._jumbotron')

   @include('partial._nav')  
   
  <div class="row content">
    <div class="col-sm-3 spacing-top bg-secondary">

      @include('partial._leftsidebar')

    </div>
    <div class="col-sm-9 text-left spacing-top"> 

        @include('partial._messages')

        @yield('content')

    </div>
    <div class="col-sm-0">

      
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