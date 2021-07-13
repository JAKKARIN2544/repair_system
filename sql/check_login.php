<?php session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<title>Repair | System</title>

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>

  <style>
    .swal2-popup {
      font-family: 'Mitr', sans-serif !important;
    }
  </style>
</head>

<body>
  <?php if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $password = MD5($_POST['password']);

      $sql =
          "SELECT * FROM tb_user WHERE  username = '" .
          $username .
          "' AND  password = '" .
          $password .
          "' ";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);

          $_SESSION['id'] = $row['id'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['name'] = $row['fname'] . ' ' . $row['lname'];
          $_SESSION['level'] = $row['level'];
          $_SESSION['phone'] = $row['phone'];
          $_SESSION['gender'] = $row['gender'];
          $_SESSION['email'] = $row['email'];
          //------------------------------------------------ ADMIN -----------------------------------------------------------------------
          if (isset($_SESSION['level']) == 'admin') {
              echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "สำเร็จ",
                    text: "กำลังเข้าสู่ระบบ กรุณารอสักครู่.....",
                    footer: "",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../Back_end/dashboard.php";
            }
          });
        </script>';
          }
          //------------------------------------------------ MEMBER -----------------------------------------------------------------------
          if ($_SESSION['level'] == 'member') {
              echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "สำเร็จ",
                    text: "กำลังเข้าสู่ระบบ กรุณารอสักครู่.....",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../index.php";
            }
          });
        </script>';
          }
          //------------------------------------------------ authorities -----------------------------------------------------------------------
          if ($_SESSION['level'] == 'authorities') {
              echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "สำเร็จ",
                    text: "กำลังเข้าสู่ระบบ กรุณารอสักครู่.....",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../Back_end/dashboard.php";
            }
          });
        </script>';
          }
          //------------------------------------------------ ERROR LOGIN -----------------------------------------------------------------------
      } else {
          echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "error",
                    title: "เข้าสู่ระบบไม่สำเร็จ !!!!",
                    text: "เข้าสู่ระบบไม่สำเร็จ กรุณาตรวจสอบ username และ password อีกครั้ง !!!",
                    showConfirmButton: false,
                    footer: "",
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../Login/login.php";
            }
          });
        </script>';
      }
      //------------------------------------------------ ERROR LOGIN -----------------------------------------------------------------------
  } else {
      echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "error",
                    title: "เข้าสู่ระบบไม่สำเร็จ !!!!",
                    text: "เข้าสู่ระบบไม่สำเร็จ กรุณาตรวจสอบ username และ password อีกครั้ง !!!",
                    footer: "",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../Login/login.php";
            }
          });
        </script>';
  } ?>
</body>

</html>