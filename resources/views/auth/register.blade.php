

@extends('admin-layouts.app')

@section('admin_content')


  <div class="register-box mt-5" style="margin-left: 560px;">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="{{route('admin.dashboard')}}" class="h1"><b>Admin</b>PATO</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>
  
        <form action="{{ route('register') }}" method="POST">
          @csrf
  
        <!-- Name -->
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="Full name" :value="old('name')" required autofocus autocomplete="name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <p class="text-danger mt-1" :messages="$errors->get('name')"></p>
          </div>
              <!-- Email Address -->
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" :value="old('email')" required autocomplete="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <p class="text-danger mt-1" :messages="$errors->get('email')"></p>
  
          </div>
              <!-- Password Address -->
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" :value="__('Password')" required autocomplete="new-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <p class="text-danger mt-1" :messages="$errors->get('password')"></p>
          </div>
              <!-- Confirm Password Address -->
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Retype password" :value="__('Confirm Password')" required autocomplete="new-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <p class="text-danger mt-1" :messages="$errors->get('password_confirmation')"></p>
  
          </div>
          
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <!-- /.col -->
          </div>
          <div class="d-grid mt-3">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </form>
  
        {{-- <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div> --}}
        <div class="mt-2">
          <a href="{{route('login')}}" class="text-center mt-2">I already have a membership</a>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  
 

@endsection
