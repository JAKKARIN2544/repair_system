<?php include "../Include/login/header_register.php"; ?>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <a href="index.php" class="h3 text-dark text-center"><img class="img" src="../src/dist/img/repair_systemLogo.png" alt="AdminLTELogo" height="50" width="50"> <b class="rainbow rainbow_text_animated">REPAIR</b> SYSTEM</a>
      <div class="card-body">
        <div class="login-box-msg text-dark"><span class="icon fas fa-exclamation-triangle"></span> กรุณา LOGIN ก่อนเข้าใช้งาน</div>
        <div class="container">
          <form name="RegisterForm" action="../sql/check_register.php" onsubmit="return FORMREGISTER()" method="POST">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputemail">E-mail</label>
                  <span class="error" id="error-email"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="Email" name="email" id="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputusername">ชื่อผู้ใช้งาน</label>
                  <span class="error" id="error-username"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="Username" name="username" id="username">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputpassword1">รหัสผ่าน</label>
                  <span class="error" id="error-password1"></span>
                  <input type="password" class="form-control form-control-border border-width-2" placeholder="Password" name="password1" id="password1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputpassword2">ยืนยัน รหัสผ่าน</label>
                  <span class="error" id="error-password2"></span>
                  <input type="password" class="form-control form-control-border border-width-2" placeholder="Confrim Password" name="password2" id="password2">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputfristname">ชื่อจริง</label>
                  <span class="error" id="error-fname"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="Frist Name" name="fname" id="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputlastname">นามสกุล</label>
                  <span class="error" id="error-lname"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="Last Name" name="lname" id="lname">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="error" id="error-sex"></span>
                  <label for="exampleInputlastname">เพศ</label>
                  <select class="custom-select form-control-border border-width-2" name="sex" id="sex">
                    <option value="" disabled selected hidden>Sex...</option>
                    <option>ชาย</option>
                    <option>หญิง</option>
                    <option>ไม่ระบุ</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputphone">เบอร์โทรศัพท์</label>
                  <span class="error" id="error-phone"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="Phone Number" name="phone" id="phone">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputaddress">ที่อยู่</label>
              <textarea class="form-control form-control-border border-width-2" rows="2" placeholder="Address" name="address" id="address"></textarea>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                   ฉันยอมรับ <a href="#">เงื่อนไข</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <a href="../Login/login.php" class="m1">มีบัญชีผู้ใช้แล้ว ?</a>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  <script>
    function FORMREGISTER() {
      var email = document.forms["RegisterForm"]["email"];
      var username = document.forms["RegisterForm"]["username"];
      var password1 = document.forms["RegisterForm"]["password1"];
      var password2 = document.forms["RegisterForm"]["password2"];
      var fname = document.forms["RegisterForm"]["fname"];
      var lname = document.forms["RegisterForm"]["lname"];
      var sex = document.forms["RegisterForm"]["sex"];
      var phone = document.forms["RegisterForm"]["phone"];
      var address = document.forms["RegisterForm"]["address"];
      var terms = document.forms["RegisterForm"]["terms"];
      //--------------------------------------------------------------------------------------------------------------------
      if (email.value == "") {
        document.getElementById("error-email").innerHTML = "<span style='color:red'>กรุณากรอก Email !!!</span>";
        email.className = 'form-control form-control-border border-width-2 is-invalid';
        email.focus();
        return false;
      } else {
        document.getElementById("error-email").innerHTML = "<span></span>";
        email.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (username.value == "") {
        document.getElementById("error-username").innerHTML = "<span style='color:red'>กรุณากรอก Username !!!</span>";
        username.className = 'form-control form-control-border border-width-2 is-invalid';
        username.focus();
        return false;
      } else {
        document.getElementById("error-username").innerHTML = "<span></span>";
        username.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (password1.value == "") {
        document.getElementById("error-password1").innerHTML = "<span style='color:red'>กรุณากรอก Password !!!</span>";
        password1.className = 'form-control form-control-border border-width-2 is-invalid';
        password1.focus();
        return false;
      } else {
        document.getElementById("error-password1").innerHTML = "<span></span>";
        password1.className = 'form-control form-control-border border-width-2 is-valid';
      }
      if (password1.value.length < 8) {
        document.getElementById("error-password1").innerHTML = "<span style='color:#FFAD00'>Password มากกว่า 8 ตัวอักษร !!!</span>";
        password1.className = 'form-control form-control-border border-width-2 is-warning';
        password1.focus();
        return false;
      } else {
        document.getElementById("error-password1").innerHTML = "<span></span>";
        password1.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (password2.value == "") {
        document.getElementById("error-password2").innerHTML = "<span style='color:red>กรุณากรอก Password อีกครั้ง !!!</span>";
        password2.className = 'form-control form-control-border border-width-2 is-invalid';
        password2.focus();
        return false;
      } else {
        document.getElementById("error-password2").innerHTML = "<span></span>";
        password2.className = 'form-control form-control-border border-width-2 is-valid';
      }
      if (password2.value.length < 8) {
        document.getElementById("error-password2").innerHTML = "<span style='color:#FFAD00'>Password มากกว่า 8 ตัวอักษร !!!</span>";
        password2.className = 'form-control form-control-border border-width-2 is-warning';
        password2.focus();
        return false;
      } else {
        document.getElementById("error-password2").innerHTML = "<span></span>";
        password2.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (password1.value != password2.value) {
        document.getElementById("error-password1").innerHTML = "<span style='color:#FFAD00'>Password ไม่ตรงกัน !!!</span>";
        document.getElementById("error-password2").innerHTML = "<span style='color:#FFAD00'>Password ไม่ตรงกัน !!!</span>";
        document.getElementById("password1").value = "";
        document.getElementById("password2").value = "";
        password1.className = 'form-control form-control-border border-width-2 is-warning';
        password2.className = 'form-control form-control-border border-width-2 is-warning';
        password1.focus();
        return false;
      } else {
        document.getElementById("error-password2").innerHTML = "<span></span>";
        password1.className = 'form-control form-control-border border-width-2 is-valid';
        password2.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (fname.value == "") {
        document.getElementById("error-fname").innerHTML = "<span style='color:red>กรุณากรอก Frist Name !!!</span>";
        fname.className = 'form-control form-control-border border-width-2 is-invalid';
        fname.focus();
        return false;
      } else {
        document.getElementById("error-fname").innerHTML = "<span></span>";
        fname.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (lname.value == "") {
        document.getElementById("error-lname").innerHTML = "<span style='color:red>กรุณากรอก Last Name !!!</span>";
        lname.className = 'form-control form-control-border border-width-2 is-invalid';
        lname.focus();
        return false;
      } else {
        document.getElementById("error-lname").innerHTML = "<span></span>";
        lname.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (sex.value == "") {
        document.getElementById("error-sex").innerHTML = "<span style='color:red>กรุณาเลือก เพศ !!!</span>";
        sex.className = 'custom-select form-control-border border-width-2 is-invalid';
        sex.focus();
        return false;
      } else {
        document.getElementById("error-sex").innerHTML = "<span></span>";
        sex.className = 'custom-select form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (phone.value == "") {
        document.getElementById("error-phone").innerHTML = "<span style='color:red>กรุณากรอก เบอร์โทรศัพท์ !!!</span>";
        phone.className = 'form-control form-control-border border-width-2 is-invalid';
        phone.focus();
        return false;
      } else {
        document.getElementById("error-phone").innerHTML = "<span></span>";
        phone.className = 'form-control form-control-border border-width-2 is-valid';
      }
      if (phone.value.length < 9) {
        document.getElementById("error-phone").innerHTML = "<span style='color:#FFAD00'>กรุณากรอกเบอร์โทรศัพท์ที่ถูกต้อง !!!</span>";
        phone.className = 'form-control form-control-border border-width-2 is-warning';
        phone.focus();
        return false;
      } else {
        document.getElementById("error-phone").innerHTML = "<span></span>";
        phone.className = 'form-control form-control-border border-width-2 is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (address.value == "") {
        document.getElementById("error-address").innerHTML = "<span style='color:red>กรุณากรอก ที่อยู่ปัจจุบัน !!!</span>";
        address.className = 'form-control is-invalid';
        address.focus();
        return false;
      } else {
        document.getElementById("error-address").innerHTML = "<span></span>";
        address.className = 'form-control is-valid';
      }
      //--------------------------------------------------------------------------------------------------------------------
      if (terms.value == "") {
        document.getElementById("error-terms").innerHTML = "<span style='color:red>กรุณายอมรับข้อตกลง !!!</span>";
        terms.className = 'form-control form-control-border border-width-2 is-invalid';
        terms.focus();
        return false;
      } else {
        document.getElementById("error-terms").innerHTML = "<span></span>";
        terms.className = 'form-control form-control-border border-width-2 is-valid';
      }
    }
  </script>
  <?php include "../Include/login/footer_register.php"; ?>