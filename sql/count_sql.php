
<?php
	include '../sql/conn.php';

	$sql_countuser = "SELECT COUNT(id) FROM tb_user";
	$res_countuser = mysqli_query($conn, $sql_countuser);
	$row_countuser = mysqli_fetch_assoc($res_countuser);

    $sql_countadmin = "SELECT COUNT(level) AS level FROM tb_user WHERE level = 'admin'";
	$res_countadmin = mysqli_query($conn, $sql_countadmin);
	$row_countadmin = mysqli_fetch_assoc($res_countadmin);

    $sql_countauthorities = "SELECT COUNT(level) AS level FROM tb_user WHERE level = 'authorities'";
	$res_countauthorities = mysqli_query($conn, $sql_countauthorities);
	$row_countauthorities = mysqli_fetch_assoc($res_countauthorities);

	$sql_countmechanic = "SELECT COUNT(level) AS level FROM tb_user WHERE level = 'mechanic'";
	$res_countmechanic = mysqli_query($conn, $sql_countmechanic);
	$row_countmechanic = mysqli_fetch_assoc($res_countmechanic);

    $sql_countmember = "SELECT COUNT(level) AS level FROM tb_user WHERE level = 'member'";
	$res_countmember = mysqli_query($conn, $sql_countmember);
	$row_countmember = mysqli_fetch_assoc($res_countmember);




	/*$sql1 = "SELECT COUNT(cus_id) FROM customer";
	$res1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_assoc($res1);

	$sql2 = "SELECT COUNT(pro_id) FROM product";
	$res2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($res2);

	$sql3 = "SELECT COUNT(id) FROM user";
	$res3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_assoc($res3);

	$sql6 = "SELECT COUNT(ser_id) FROM services";
	$res6 = mysqli_query($conn, $sql6);
	$row6 = mysqli_fetch_assoc($res6);
	
	$sql7 = "SELECT COUNT(ser_det_id) FROM services_details";
	$res7 = mysqli_query($conn, $sql7);
	$row7 = mysqli_fetch_assoc($res7);
	
	$sql4 = "SELECT COUNT(status) AS status FROM services WHERE status='กำลังดำเนินการ'";
	$res4 = mysqli_query($conn, $sql4);
	$row4 = mysqli_fetch_assoc($res4);

	$sql5 = "SELECT COUNT(status) AS status FROM services WHERE status='เสร็จ'";
	$res5 = mysqli_query($conn, $sql5);
	$row5 = mysqli_fetch_assoc($res5); */
	?>