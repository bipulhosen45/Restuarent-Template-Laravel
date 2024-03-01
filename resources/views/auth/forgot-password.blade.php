@extends('admin-layouts.app')

@section('admin_content')
<body class="hold-transition login-page">
    <div class="login-box mt-5" style="margin-left: 560px;">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="{{route('admin.dashboard')}}" class="h1"><b>Admin</b>PATO</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

          <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email" id="email" :value="old('email')" required autofocus>
              
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block float-right">{{ __('Email Password Reset Link') }}</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    </body>
@endsection
