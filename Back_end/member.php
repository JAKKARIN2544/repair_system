<?php include "../Include/admin/header_amin.php";
include "../Include/admin/menu_admin.php";
include "../sql/count_sql.php";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "db_repair_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql_provinces = "SELECT * FROM provinces";
$query = mysqli_query($conn, $sql_provinces);

$sql = "SELECT * FROM tb_user";
$result = mysqli_query($conn, $sql);
?>

<div class="content-wrapper">
    <!--  Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        ผู้ใช้งานทั้งหมด <a class="date text-dark" id="Date"></a> <span class="co-sm right badge badge-info"><?php echo $row_countuser['COUNT(id)'] ?> คน </span>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ผู้ใช้งาน</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users-cog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">จำนวน แอดมิน</span>
                        <span class="info-box-number">
                            <?php echo $row_countadmin['level'] ?>
                            <small>คน</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">จำนวน เจ้าหน้าที่</span>
                        <span class="info-box-number">
                        <?php echo $row_countauthorities['level'] ?>
                            <small>คน</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">จำนวน ผู้ใช้งาน</span>
                        <span class="info-box-number">
                        <?php echo $row_countmember['level'] ?>
                            <small>คน</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="container-fluid">
            <!-- ./row -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card card-dark card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true"><i class="fas fa-users"></i> ผู้ใช้งาน</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false"><i class="fas fa-edit"></i> เพิ่มผู้ใช้งาน</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap" id="MyTable">
                                            <thead class="">
                                                <tr>
                                                    <th class="text-center" scope="col">รหัสผู้ใช้งาน</th>
                                                    <th class="text-center" scope="col">E-mail</th>
                                                    <th class="text-center" scope="col">ชื่อ - นามสกุล</th>
                                                    <th class="text-center" scope="col">เบอร์โทรศัพท์</th>
                                                    <th class="text-center" scope="col">สถานะผู้ใช้งาน</th>
                                                    <th class="text-center" scope="col">จัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($result) > 1) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $row['id'] ?></td>
                                                            <td><?php echo $row['email'] ?></td>
                                                            <td><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
                                                            <td><?php echo $row['phone'] ?></td>
                                                                <?php 
                                                                    if ($row['level'] == "admin") {
                                                                    echo '<td class="text-center text-danger"><i class="fas fa-user-shield"></i><span> admin</span></td>';       
                                                                    }
                                                                    else if($row['level'] == "authorities"){
                                                                    echo '<td class="text-center text-info"><i class="fas fa-user-tie"></i><span> authorities</span></td>';
                                                                    }
                                                                    else{
                                                                        echo '<td class="text-center"><i class="fas fa-users"></i><span> user</span></td>';
                                                                    }
                                                                ?>
                                                            <td class="text-center">
                                                                <a class="btn1 btn btn-info" href="#" target=""><i class="fas fa-info"></i> เพิ่มเติม</a>
                                                                <a class="btn1 btn btn-warning" href="#" target=""><i class="fas fa-pencil-alt"></i> แก้ไข</a>
                                                                <a class="btn1 btn btn-danger" href="#" target=""><i class="fas fa-times"></i> ลบ</a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                    <form action="" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputemail">E-mail<a class="text-danger">*</a></label>
                                                <input type="email" class="form-control" id="email" placeholder="E-mail">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputusername">username<a class="text-danger">*</a></label>
                                                        <input type="text" class="form-control" id="username" placeholder="username">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputpassword1">password<a class="text-danger">*</a></label>
                                                        <input type="password1" class="form-control" id="password1" placeholder="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputfristname">Fristname<a class="text-danger">*</a></label>
                                                        <input type="text" class="form-control" id="fristname" placeholder="Fristname">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputlastname">Lastname<a class="text-danger">*</a></label>
                                                        <input type="text" class="form-control" id="lastname" placeholder="Lastname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputphone">เบอร์โทรศัพท์<a class="text-danger">*</a></label>
                                                <input type="text" class="form-control" id="phone" placeholder="เบอร์โทรศัพท์">
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">บ้านเลขที่<a class="text-danger">*</a></label>
                                                        <input type="text" class="form-control" placeholder="บ้านเลขที่">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">หมู่<a class="text-danger">*</a></label>
                                                        <input type="text" class="form-control" placeholder="บ้านเลขที่">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">จังหวัด<a class="text-danger">*</a></label>
                                                        <select class="custom-select" name="Ref_prov_id" id="provinces">
                                                            <option value="" disabled selected hidden>กรุณาเลือกจังหวัด</option>
                                                            <?php foreach ($query as $value) { ?>
                                                                <option value="<?= $value['id'] ?>"><?= $value['name_th'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">อำเภอ<a class="text-danger">*</a></label>
                                                        <select class="custom-select" name="Ref_dist_id" id="amphures">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">ตำบล<a class="text-danger">*</a></label>
                                                        <select class="custom-select" name="Ref_subdist_id" id="districts">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputzip_code">รหัสไปรษณีย์<a class="text-danger">*</a></label>
                                                        <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="รหัสไปรษณีย์">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputzip_code">สถานะ<a class="text-danger">*</a></label>
                                                        <select class="custom-select" name="sex" id="sex">
                                                            <option value="" disabled selected hidden>เลือกสถานะผู้ใช้งาน</option>
                                                            <option class="text-danger">admin</option>
                                                            <option class="text-info">authorities</option>
                                                            <option class="text-dark">member</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">เพิ่มผู้ใช้งาน</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include "../Include/admin/footer_admin.php"; ?>
<?php include "../src/script/script.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#MyTable').DataTable({
            responsive: true,
            language: {
                "decimal": "",
                "emptyTable": "ไม่มีข้อมูลในตาราง",
                "info": "แสดงแถวที่ _START_ ถึง _END_ ของ _TOTAL_ แถว",
                "infoEmpty": "แสดงแถวที่ 0 ถึง 0 ของ 0 แถว",
                "infoFiltered": "(จากทั้งหมด _MAX_  แถว)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "แสดง _MENU_ แถว ต่อหน้า",
                "loadingRecords": "กรุณารอสักครู่....",
                "processing": "กำลังประมวลผล...",
                "search": "ค้าหารายการ ซ่อม :",
                "zeroRecords": "ไม่พอข้อมูลการ แจ้งซ่อม",
                "paginate": {
                    "first": "หน้าแรก",
                    "last": "หน้าสุดท้าย",
                    "next": "ถัดไป",
                    "previous": "ก่อนหน้า"
                },
                "aria": {
                    "sortAscending": ": เปิดใช้งานเพื่อจัดเรียงคอลัมน์จากน้อยไปมาก",
                    "sortDescending": ": เปิดใช้งานเพื่อจัดเรียงคอลัมน์จากมากไปน้อย"
                }
            }
        });
    });
</script>