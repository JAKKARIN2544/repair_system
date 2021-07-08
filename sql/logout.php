<!DOCTYPE html>
<html lang="en">

<head>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
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