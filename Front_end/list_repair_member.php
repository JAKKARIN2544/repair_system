<?php include "../Include/member/header_member.php";
include "../Include/member/menu_member.php";
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        รายการซ่อม
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">แจ้งซ่อม</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tools"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">แจ้งซ่อมทั้งหมด</span>
                            <span class="info-box-number">
                                10
                                <small>รายการ</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-hammer"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">กำลังซ่อม</span>
                            <span class="info-box-number">
                                10
                                <small>รายการ</small>
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
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">ยกเลิกซ่อม</span>
                            <span class="info-box-number">
                                10
                                <small>รายการ</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap" id="MyTable">
                            <thead class="">
                                <tr>
                                    <th class="text-center" scope="col">รหัสแจ้งซ่อม</th>
                                    <th class="text-center" scope="col">วันที่แจ้งซ่อม</th>
                                    <th class="text-center" scope="col">อาการเสีย ชำรุด</th>
                                    <th class="text-center" scope="col">สถานะ</th>
                                    <th class="text-center" scope="col">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>

                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small></td>
                                    <td class="text-center">
                                        <a class="btn1 btn btn-warning" href="#" target="_blank"><i class="fas fa-info"></i> รายละเอียด</a>
                                        <a class="btn1 btn btn-danger" href="#" target="_blank"><i class="fas fa-times"></i> ยกเลิกซ่อม</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                    <td>Jacob</td>

                                    <td>@fat</td>
                                    <td class="text-center"> <small class="badge badge-danger">ยกเลิกซ่อม</small></td>
                                    <td class="text-center">
                                        <a class="btn1 btn btn-warning" href="#" target="_blank"><i class="fas fa-info"></i> รายละเอียด</a>
                                        <a class="btn1 btn btn-danger" href="#" target="_blank"><i class="fas fa-times"></i> ยกเลิกซ่อม</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                    <td>Larry</td>

                                    <td>@twitter</td>
                                    <td class="text-center"><small class="badge badge-success">กำลังซ่อม</small></td>
                                    <td class="text-center">
                                        <a class="btn1 btn btn-warning" href="#" target="_blank"><i class="fas fa-info"></i> รายละเอียด</a>
                                        <a class="btn1 btn btn-danger" href="#" target="_blank"><i class="fas fa-times"></i> ยกเลิกซ่อม</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "../Include/member/footer_member.php"; ?>
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