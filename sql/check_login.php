<?php session_start(); 
        include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
  <?php
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $sql = "SELECT * FROM tb_user WHERE  username = '" . $username . "' AND  password = '" . $password . "' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);

      $_SESSION["id"] = $row["id"];
      $_SESSION["username"] = $row["username"];
      $_SESSION["name"] = $row["fname"] . " " . $row["lname"];
      $_SESSION["level"] = $row["level"];
      //------------------------------------------------ ADMIN -----------------------------------------------------------------------
      if (isset($_SESSION["level"]) == "admin") {
        echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "สำเร็จ",
                    text: "กำลังเข้าสู่ระบบ",
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
      if ($_SESSION["level"] == "member") {
        echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "สำเร็จ",
                    text: "กำลังเข้าสู่ระบบ",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../index.php";
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
                    title: "ผิดพลาด",
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
                    title: "ผิดพลาด",
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
  }
  ?>
</body>

</html>