<!DOCTYPE html>
<html lang="en">

<head>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>

<body>
    <?php
    session_start();
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