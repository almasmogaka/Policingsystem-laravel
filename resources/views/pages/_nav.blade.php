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
    <a href="#" type="button" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">
      Police Login
    </a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Police Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                          @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-md-6 offset-md-4">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                          </button>

                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      </div>
                  </div>
                </form>
              </div>                  
        </div>
      </div>
    </div> 
    </li> 

    <li>
      <!-- Button trigger modal -->
<a href="#" type="button" class="nav-link" data-toggle="modal" data-target="#exampleModal">
  Admin Login
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!--<a class="btn btn-link" href="">
                                    Forgot Your Password?
                                </a>-->
                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>
    </li>
  </ul>
</div>
  
</nav> 