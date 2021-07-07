<?php include "../Include/login/header_login.php"; ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <br>
      <a href="../Login/login.php" class="h3 text-dark text-center"><img class="img" src="../src/dist/img/repair_systemLogo.png" alt="AdminLTELogo" height="50" width="50"> <b class="rainbow rainbow_text_animated">REPAIR</b> SYSTEM</a>
      <div class="card-body">
        <div class="login-box-msg text-dark"><span class="icon fas fa-exclamation-triangle"></span> กรุณา LOGIN ก่อนเข้าใช้งาน</div>
        <form name="LoginForm" action="../sql/check_login.php" onsubmit="return FORMLOGIN()" method="POST">
          <div class="error text-danger" id="error-username"></div>
          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-border border-width-2" placeholder="Username" name="username" id="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="error text-danger" id="error-password"></div>
          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-border border-width-2" placeholder="Password" name="password" id="password">
            <div class="input-group-append">
              <div class="input-group-text ">
                <span id="toggle_pwd" class="fas fa-eye"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  จดจำผู้ใช้งาน
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-success btn-block">เข้าสู่ระบบ</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <div class="social-auth-links text-center mt-2 mb-3">

        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="forgot-password.html">ลืมรหัสผ่าน ?</a>
        </p>
        <p class="mb-0">
          <a href="../Login/register.php" class="text-center">สมัครสมาชิก</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <?php include "../Include/login/footer_login.php"; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#toggle_pwd").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
        $("[id*=password]").attr("type", type);
      });
    });
  </script>
  <script>
    function FORMLOGIN() {
      var username = document.forms["LoginForm"]["username"];
      var password = document.forms["LoginForm"]["password"];

      if (username.value == "") {
        document.getElementById("error-username").innerHTML = "<span>กรุณากรอก Username</span>";
        username.className = 'form-control form-control-border border-width-2 is-invalid';
        username.focus();
        return false;
      } else {
        document.getElementById("error-username").innerHTML = "<span></span>";
        username.className = 'form-control form-control-border border-width-2 is-valid';
      }

      if (password.value == "") {
        document.getElementById("error-password").innerHTML = "<span>กรุณากรอก Password</span>";
        password.className = 'form-control form-control-border border-width-2 is-invalid';
        password.focus();
        return false;
      } else {
        document.getElementById("error-password").innerHTML = "<span></span>";
        password.className = 'form-control form-control-border border-width-2 is-valid';
      }
      return true;
    }
  </script>