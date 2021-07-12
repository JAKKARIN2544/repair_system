<?php include "../Include/admin/header_amin.php";
include "../Include/admin/menu_admin.php"
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        รายการรับซ่อมทั้งหมด<a class="date text-dark" id="Date"></a> <span
                            class="co-sm right badge badge-success">200 รายการ </span>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">รายการรับซ่อม</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- ./row -->
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <!-- ./card-header -->
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
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-warning" href="#" target="_blank"><i
                                                    class="fas fa-info"></i> รายละเอียด</a>
                                            <a class="btn1 btn btn-success" href="#" target="_blank"><i
                                                    class="fas fa-print"></i> พิมพ์</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td>Jacob</td>
                                        <td>tdornton</td>
                                        <td>@fat</td>
                                        <td class="text-center"> <small class="badge badge-danger">ยกเลิกซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-warning" href="#" target="_blank"><i
                                                    class="fas fa-info"></i> รายละเอียด</a>
                                            <a class="btn1 btn btn-success" href="#" target="_blank"><i
                                                    class="fas fa-print"></i> พิมพ์</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td class="text-center"><small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-warning" href="#" target="_blank"><i
                                                    class="fas fa-info"></i> รายละเอียด</a>
                                            <a class="btn1 btn btn-success" href="#" target="_blank"><i
                                                    class="fas fa-print"></i> พิมพ์</a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include "../Include/admin/footer_admin.php"; ?>
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