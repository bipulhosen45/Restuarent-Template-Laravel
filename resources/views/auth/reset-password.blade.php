
@extends('admin-layouts.app')

@section('admin_content')
<body class="hold-transition login-page">
    <div class="login-box mt-5" style="margin-left: 560px">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="{{route('admin.dashboard')}}" class="h1"><b>Admin</b>PATO</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

          <form action="{{ route('password.store') }}" method="POST">
            @csrf
                <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                  <!-- email -->
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" id="email" :value="old('email', $request->email)" placeholder="Email" required autofocus autocomplete="username">
              <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
              </div>
              <p class="text-danger mt-1" :messages="$errors->get('email')"></p>
            </div>
                  <!-- Password -->
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" :value="__('Password')" required autocomplete="new-password">
              <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
              </div>
              <p class="text-danger mt-1" :messages="$errors->get('password')"></p>
            </div>
                  <!-- confirm Password -->
            <div class="input-group mb-3">
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" :value="__('Confirm Password')" required autocomplete="new-password">
              <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
              </div>
              <p class="text-danger mt-1" :messages="$errors->get('password_confirmation')"></p>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Reset password</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <p class="mt-3 mb-1">
            <a href="{{route('login')}}">Login</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    
  
    </body> 
@endsection