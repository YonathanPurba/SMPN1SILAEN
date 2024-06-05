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

      <form id="loginForm" method="post" onsubmit="return validateForm()">
        @csrf
        <div class="input-group mb-3">
          <input id="email" name="email" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div id="emailError" class="invalid-feedback" style="display: none;"></div>
        </div>
        <div class="input-group mb-3">
          <input id="password" name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div id="passwordError" class="invalid-feedback" style="display: none;"></div>
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

<script>
  function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");

    // Reset error messages and styles
    emailError.style.display = "none";
    passwordError.style.display = "none";
    document.getElementById("email").classList.remove("is-invalid");
    document.getElementById("password").classList.remove("is-invalid");

    var isValid = true;

    // Email validation
    if (email === "") {
      emailError.textContent = "Email tidak boleh kosong.";
      emailError.style.display = "block";
      document.getElementById("email").classList.add("is-invalid");
      isValid = false;
    } else if (!validateEmail(email)) {
      emailError.textContent = "Email yang Anda masukkan tidak sesuai.";
      emailError.style.display = "block";
      document.getElementById("email").classList.add("is-invalid");
      isValid = false;
    }

    // Password validation
    if (password === "") {
      passwordError.textContent = "Password tidak boleh kosong.";
      passwordError.style.display = "block";
      document.getElementById("password").classList.add("is-invalid");
      isValid = false;
    } else if (!validatePassword(password)) {
      passwordError.textContent = "Password tidak sesuai.";
      passwordError.style.display = "block";
      document.getElementById("password").classList.add("is-invalid");
      isValid = false;
    }

    return isValid;
  }

  function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

</script>

</body>
</html>
