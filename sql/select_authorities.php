<?php
include "../sql/conn.php";

$id = $_POST['id'];
$detail = '';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$sql = "SELECT * FROM tb_user WHERE id = '{$id}'";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $detail.='<p>รหัสผู้ใช้งาน : <span class="text-danger">'.$row['id'].'</span> </p>';
        $detail.='<p>E-mail : <span class="text-danger">'.$row['email'].'</span> </p>';
        $detail.='<p>ชื่อ : <span class="text-danger">'.$row['fname'].'</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; นาสกุล : <span class="text-danger">'.$row['lname'].'</span></p>';
        $detail.='<p>เพศ : <span class="text-danger">'.$row['gender'].'</span> </p>';
        $detail.='<p>เบอร์โทรศัพท์ : <span class="text-danger">'.$row['phone'].'</span> </p>';
    }
    echo $detail;
?>