<?php
//กำหนดเวลาที่สามารถอยู่ในระบบ
$sessionlifetime = 20; //กำหนดเป็นนาที
 
if(isset($_SESSION["timeLasetdActive"])){
	$seclogin = (time()-$_SESSION["timeLasetdActive"])/60;
	//หากไม่ได้ Active ในเวลาที่กำหนด
	if($seclogin>$sessionlifetime){
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['name']);
        unset($_SESSION['level']);
        unset($_SESSION['tel']);
        unset($_SESSION['gender']);
        unset($_SESSION['email']);
        session_destroy();
		//goto logout page
		echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "warning",
                    title: "หมดเวลาการเชื่อมต่อ..",
                    text: "",
                    showConfirmButton: false,
                    timer: 3000
                }).then((result) => {
            if (result.isDismissed) {
                window.location.href = "../index.php";
            }
          });
        </script>';
		exit;
	}else{
		$_SESSION["timeLasetdActive"] = time();
	}
}else{
	$_SESSION["timeLasetdActive"] = time();
}
//
?>
</body>

</html>