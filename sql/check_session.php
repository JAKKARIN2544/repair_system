<!DOCTYPE html>
<html lang="en">

<head>
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
<?php session_start(); ?>
<?php
if (!$_SESSION["id"]) {  //check session
      echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "warning",
                    title: "กรุณา login ก่อนเข้าใช้งาน !!!",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../index.php";
            }
          });
        </script>';
} else if (!$_SESSION["username"]) {
      echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "warning",
                    title: "กรุณา login ก่อนเข้าใช้งาน !!!",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../index.php";
            }
          });
        </script>';
} else if (!$_SESSION["level"]) {
      echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "warning",
                    title: "กรุณา login ก่อนเข้าใช้งาน !!!",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../index.php";
            }
          });
        </script>';
}

?>
</body>
</html>