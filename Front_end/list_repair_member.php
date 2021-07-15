<?php session_start();
include "../Include/member/header_member2.php";
include "../Include/member/menu_member2.php";
?>
<?php
 if(isset($_SESSION["username"])){ //ถ้ายังไม่ได้ Login จะโชว์สองลิงค์ด้านล่าง
    ?>
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <br>
                        <div class="text-center h1">รายการที่ส่งซ่อม</div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info elevation-1"><i
                                                class="fas fa-users"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">จำนวนผู้ใช้งาน</span>
                                            <span class="info-box-number">
                                                10
                                                <small>คน</small>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1"><i
                                                class="fas fa-user-secret"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">จำนวนเจ้าหน้าที่</span>
                                            <span class="info-box-number">
                                                10
                                                <small>คน</small>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- fix for small devices only -->
                                <div class="clearfix hidden-md-up"></div>

                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1"><i
                                                class="fas fa-users-cog"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">จำนวนแอดมิน</span>
                                            <span class="info-box-number">
                                                10
                                                <small>คน</small>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" id="MyTable">
                                    <thead class="">
                                        <tr>
                                            <th class="text-center" scope="col">รหัสแจ้งซ่อม</th>
                                            <th class="text-center" scope="col">ชื่อ - นามสกุล</th>
                                            <th class="text-center" scope="col">วันที่แจ้งซ่อม</th>
                                            <th class="text-center" scope="col">อาการเสีย ชำรุด</th>
                                            <th class="text-center" scope="col">สถานะ</th>
                                            <th class="text-center" scope="col">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td class="text-center"> <small
                                                    class="badge badge-success">กำลังซ่อม</small></td>
                                            <td class="text-center">
                                                <a class="btn1 btn btn-warning" href="#" target="_blank"><i
                                                        class="fas fa-info"></i> รายละเอียด</a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <?php
    }else{
        echo '       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
    
                    </div><!-- /.col -->
                    <div class="col-sm-6">
    
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <br>
                            <div class="text-center h1">รายการที่ส่งซ่อม</div>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1"><i
                                                    class="fas fa-users"></i></span>
    
                                            <div class="info-box-content">
                                                <span class="info-box-text">จำนวนผู้ใช้งาน</span>
                                                <span class="info-box-number">
                                                <span class="text-danger">not data</span>
                                                    <small>คน</small>
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-danger elevation-1"><i
                                                    class="fas fa-user-secret"></i></span>
    
                                            <div class="info-box-content">
                                                <span class="info-box-text">จำนวนเจ้าหน้าที่</span>
                                                <span class="info-box-number">
                                                    <span class="text-danger">not data</span>
                                                    <small>คน</small>
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- fix for small devices only -->
                                    <div class="clearfix hidden-md-up"></div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i
                                                    class="fas fa-users-cog"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">จำนวนแอดมิน</span>
                                                <span class="info-box-number">
                                                <span class="text-danger">not data</span>
                                                    <small>คน</small>
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                            <br>
                            <div class="container">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap" id="MyTable">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center" scope="col">รหัสแจ้งซ่อม</th>
                                                <th class="text-center" scope="col">ชื่อ - นามสกุล</th>
                                                <th class="text-center" scope="col">วันที่แจ้งซ่อม</th>
                                                <th class="text-center" scope="col">อาการเสีย ชำรุด</th>
                                                <th class="text-center" scope="col">สถานะ</th>
                                                <th class="text-center" scope="col">จัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                        </tr>
                                        <tr>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                        </tr>
                                        <tr>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                        </tr>
                                        <tr>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                            <td class="text-danger">not data !!!</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>';
        echo '
        <script type="text/javascript">
                Swal.fire({
                    icon: "warning",
                    title: "กรุณา ล็อกอิน ก่อนใช้งาน !!!",
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
    <?php include "../Include/member/footer_member2.php"; ?>
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