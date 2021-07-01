<!DOCTYPE html>
<html lang="en">

<head>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
  <?php
  include "conn.php";
  $id           =   $_POST['id'];
  $email        =   $_POST['email'];
  $username     =   $_POST['username'];
  $password1    =   MD5($_POST['password1']);
  $fname        =   $_POST['fname'];
  $lname        =   $_POST['lname'];
  $sex          =   $_POST['sex'];
  $phone        =   $_POST['phone'];
  $address      =   $_POST['address'];
  $level        =   $_POST['level'];

  $sql = "INSERT INTO tb_user VALUE ('$id','$email','$username','$password1','$fname','$lname','$sex','$phone','$address','member')";
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
                window.location.href = "../index.php";
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
                window.location.href = "../register.php";
            }
          });
        </script>';
  }
  mysqli_close($conn);

  ?>
</body>

</html>