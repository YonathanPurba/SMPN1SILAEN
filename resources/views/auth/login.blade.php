<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMPN 1 Silaen | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box mb-5">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h4"><b>SMPN 1 Silaen<br></a>
    </div>
    <div class="card-body">

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input value="{{ @old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input value="{{ @old('password') }}" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-2">

        <a href="/">Home</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.min.js"></script>
</body>
</html> 