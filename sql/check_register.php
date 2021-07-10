<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Repair | System</title>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
  <?php
  $housenumber  =   $_POST['housenumber'];
  $moo          =   $_POST['moo'];
  $provinces    =   $_POST['provinces'];
  $amphures     =   $_POST['amphures'];
  $districts    =   $_POST['districts'];
  $zipcode      =   $_POST['zipcode'];
  $id           =   rand(100000, 999999);
  $email        =   $_POST['email'];
  $username     =   $_POST['username'];
  $password1    =   MD5($_POST['password1']);
  $fname        =   $_POST['fname'];
  $lname        =   $_POST['lname'];
  $sex          =   $_POST['sex'];
  $phone        =   $_POST['phone'];
  //$address      =   $_POST['address'];
  $level        =   "member";
  $sql = "INSERT INTO tb_user VALUE ('MB$id','$email','$username','$password1','$fname','$lname','$sex','$phone','$housenumber',
                                      '$moo','$provinces','$amphures','$districts','$zipcode','$level')";
  if (mysqli_query($conn, $sql)) {
    echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "success",                    
                    title: "สำเร็จ",
                    text: "สมัครสมาชิก สำเร็จ",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../Login/login.php";
            }
          });
        </script>';
  } else {
    echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "error",
                    title: "ผิดพลาด",
                    text: "สมัครสมาชิกไม่สำเร็จ กรุณาตรวจสอบข้อมูลใหม่อีกครั้ง !!!",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../Login/register.php";
            }
          });
        </script>';
  }
  mysqli_close($conn);

  ?>
</body>

</html>