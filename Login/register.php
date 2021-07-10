<?php include "../Include/login/header_register.php"; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "db_repair_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql_provinces = "SELECT * FROM provinces";
$query = mysqli_query($conn, $sql_provinces);
?>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <a href="./Login/register.php" class="h3 text-dark text-center"><img class="img" src="../src/dist/img/repair_systemLogo.png" alt="AdminLTELogo" height="50" width="50"> <b class="rainbow rainbow_text_animated">REPAIR</b> SYSTEM</a>
      <div class="card-body">
      <div class="login-box-msg text-dark"><span class="icon fas fa-exclamation-triangle"></span> กรุณา สมัครสมาชิก ก่อนเข้าใช้งาน <a class="text-danger">!!!!!</a></div>
        <div class="container">
          <form name="RegisterForm" action="../sql/check_register.php" onsubmit="return FORMREGISTER()" method="POST">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label for=""></label>
                  <span class="error" id="error-email"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="Email" name="email" id="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label for=""></label>
                  <span class="error" id="error-username"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="ชื่อผู้ใช้งาน (ภาษาอังกฤษเท่านั้น a-z,A-Z,1-0)" name="username" id="username">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label for=""></label>
                  <span class="error" id="error-password1"></span>
                  <input type="password" class="form-control form-control-border border-width-2" placeholder="รหัสผ่าน" name="password1" id="password1">
                  <div class="text-right"><span id="toggle_pwd1" class="fas fa-eye"><a class="span1">  show Passowrd</a></span></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label for=""></label>
                  <span class="error" id="error-password2"></span>
                  <input type="password" class="form-control form-control-border border-width-2" placeholder="ยืนยัน รหัสผ่าน" name="password2" id="password2">
                  <div class="text-right"><span id="toggle_pwd2" class="fas fa-eye"><a class="span1">  show Passowrd</a></span></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label for=""></label>
                  <span class="error" id="error-fname"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="ชื่อจริง (TH)" name="fname" id="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label for=""></label>
                  <span class="error" id="error-lname"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="นามสกุล (TH)" name="lname" id="lname">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="error" id="error-sex"></span>
                  <label for=""></label>
                  <select class="custom-select form-control-border border-width-2" name="sex" id="sex">
                    <option value="" disabled selected hidden>เพศ</option>
                    <option>ชาย</option>
                    <option>หญิง</option>
                    <option>ไม่ระบุ</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label for=""></label>
                  <span class="error" id="error-phone"></span>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="เบอร์โทรศัพท์" name="phone" id="phone">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-3">
                <div class="form-group">
                <label for=""></label>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="บ้านเลขที่" name="housenumber" id="housenumber">
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                <label for=""></label>
                  <input type="text" class="form-control form-control-border border-width-2" placeholder="หมู่" name="moo" id="moo">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                <label for=""></label>
                  <select class="custom-select form-control-border border-width-2" name="provinces" id="provinces">
                    <option value="" disabled selected hidden>เลือก จังหวัด</option>
                    <?php foreach ($query as $value) { ?>
                      <option value="<?= $value['id'] ?>"><?= $value['name_th'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                <label for=""></label>
                  <select class="custom-select form-control-border border-width-2" name="amphures" id="amphures">
                  <option value="" disabled selected hidden>เลือก อำเภอ</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                <label for=""></label>
                  <select class="custom-select form-control-border border-width-2" name="districts" id="districts">
                  <option value="" disabled selected hidden>เลือก ตำบล</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                <div class="form-group">
                <label for=""></label>
                  <input type="text" class="form-control form-control-border border-width-2" name="zipcode" id="zip_code" placeholder="รหัสไปรษณีย์">
                </div>
              </div>
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
  <?php include "../Include/login/footer_register.php"; ?>
  <?php include "../src/script/script.php"; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#toggle_pwd1").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
        $("[id*=password1]").attr("type", type);
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#toggle_pwd2").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
        $("[id*=password2]").attr("type", type);
      });
    });
  </script>
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