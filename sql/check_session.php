<?php 
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

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
} 
?>