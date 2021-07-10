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
      if (!$_SESSION["id"]) {
        echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "warning",
                    title: "กรุณา ล็อกอินก่อนใช้งาน",
                    text: "",
                    footer: "",
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
