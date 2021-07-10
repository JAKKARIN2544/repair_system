<!DOCTYPE html>
<html lang="en">

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
    <?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['name']);
    unset($_SESSION['level']);
    unset($_SESSION['tel']);
    unset($_SESSION['gender']);
    unset($_SESSION['email']);
    session_destroy();
    echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "ออกจากระบบ สำเร็จ",
                    text: "",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../index.php";
            }
          });
        </script>';
    ?>
</body>
</html> 