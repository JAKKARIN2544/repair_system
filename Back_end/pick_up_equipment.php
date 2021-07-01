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
                        รายการเบิกอุปกรณ์ ในการซ่อม
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">เบิกอุปกรณ์</li>
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
                <div class="col-12 col-sm-12">
                    <div class="card card-dark card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true"><i class="fas fa-edit"></i> เบิกอุปกรณ์</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false"><i class="fas fa-clipboard-list"></i> รายการเบิกอุปกรณ์</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <form action="" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputfristname">ชื่อ<a class="text-danger">*</a></label>
                                                <input type="text" class="form-control" id="fristname" placeholder="ชื่อจริง">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputlastname">นามสกุล<a class="text-danger">*</a></label>
                                                <input type="text" class="form-control" id="lastname" placeholder="สกุล">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputphone">เบอร์โทรศัพท์<a class="text-danger">*</a></label>
                                                <input type="text" class="form-control" id="phone" placeholder="เบอร์โทรศัพท์">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInput">อุปกรณ์และสิ่งของ ที่ส่งซ่อม<a class="text-danger">* <a class="aa1 text-danger">แต่ละรายการด้วยเครื่องหมายจุลภาค ( , )</a></label>
                                                <input type="text" class="form-control" id="" placeholder="อุปกรณ์และสิ่งของ ที่นำมาซ่อม เช่น คอมพิวเตอร์,โทรศัพท์,โน๊ตบุ๊ค เป็นต้น..">
                                            </div>
                                            <div class="form-group">
                                                <label>อาการเสีย ชำรุด<a class="text-danger">* <a class="aa1 text-danger">แต่ละรายการด้วยเครื่องหมายจุลภาค ( , )</a></label>
                                                <textarea class="form-control" rows="3" id="defective" name="defective" placeholder="แจ้งอาการเสียเบื้องต้นของอุปกรณ์ที่นำมาซ่อม เช่น เปิดไม่ติด,สายไฟขาด เป็นต้น.."></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">วันที่ส่งซ่อม</label>
                                                        <input type="text" class="form-control" id="date" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">เวลา</label>
                                                        <input type="text" class="form-control" id="Time" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">บ้านเลขที่<a class="text-danger">*</a></label>
                                                        <input type="text" class="form-control" placeholder="บ้านเลขที่">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">ตำบล<a class="text-danger">*</a></label>
                                                        <select class="custom-select" name="address2" id="address2">
                                                            <option value="" disabled selected hidden>เลือก ตำบล</option>
                                                            <option></option>
                                                            <option></option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">อำเภอ<a class="text-danger">*</a></label>
                                                        <select class="custom-select" name="address3" id="address3">
                                                            <option value="" disabled selected hidden>เลือก ตำบล</option>
                                                            <option></option>
                                                            <option></option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputaddress1">จังหวัด<a class="text-danger">*</a></label>
                                                        <select class="custom-select" name="address4" id="address4">
                                                            <option value="" disabled selected hidden>เลือก ตำบล</option>
                                                            <option></option>
                                                            <option></option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputfile1">รูปภาพ<a class="text-danger">*</a></label>
                                                <input type="file" class="form-control" id="file1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputfile2">รูปภาพ เพิ่มเติม</label>
                                                <input type="file" class="form-control" id="file2">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">ยืนยัน การแจ้งซ่อม</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
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
                                                    <td class="text-center">RP<?php echo(rand(100000,999999)); ?></td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small></td>
                                                    <td class="text-center">
                                                        <a class="btn1 btn btn-warning" href="../Back_end/list_pick_up_equipment.php" target=""><i class="fas fa-info"></i> ดูรายการ</a>
                                                        <a class="btn1 btn btn-success" href="#" target="_blank"><i class="fas fa-check"></i> พิมพ์รายการ</a>
                                                        <a class="btn1 btn btn-danger" href="#" target="_blank"><i class="fas fa-times"></i> ลบรายการ</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">RP<?php echo(rand(100000,999999)); ?></td>
                                                    <td>Jacob</td>
                                                    <td>tdornton</td>
                                                    <td>@fat</td>
                                                    <td class="text-center"> <small class="badge badge-danger">ยกเลิกซ่อม</small></td>
                                                    <td class="text-center">
                                                        <a class="btn1 btn btn-warning" href="../Back_end/list_pick_up_equipment.php" target=""><i class="fas fa-info"></i> ดูรายการ</a>
                                                        <a class="btn1 btn btn-success" href="#" target="_blank"><i class="fas fa-check"></i> พิมพ์รายการ</a>
                                                        <a class="btn1 btn btn-danger" href="#" target="_blank"><i class="fas fa-times"></i> ลบรายการ</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">RP<?php echo(rand(100000,999999)); ?></td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td class="text-center"><small class="badge badge-success">กำลังซ่อม</small></td>
                                                    <td class="text-center">
                                                        <a class="btn1 btn btn-warning" href="../Back_end/list_pick_up_equipment.php" target=""><i class="fas fa-info"></i> ดูรายการ</a>
                                                        <a class="btn1 btn btn-success" href="#" target="_blank"><i class="fas fa-check"></i> พิมพ์รายการ</a>
                                                        <a class="btn1 btn btn-danger" href="#" target="_blank"><i class="fas fa-times"></i> ลบรายการ</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
<script>
    var monthNames = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
        "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];
    var dayNames = ["วันอาทิตย์", "วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัสบดี", "วันศุกร์", "วันเสาร์"]

    var newDate = new Date();
    newDate.setDate(newDate.getDate());
    $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
</script>
<script>
    function clockTick() {
        currentTime = new Date();
        month = currentTime.getMonth() + 1;
        day = currentTime.getDate();
        year = currentTime.getFullYear();
        // alert("hi");
        var showdate = day + "/" + month + "/" + year;
        document.getElementById("date").value = showdate;
    }

    setInterval(function() {
        clockTick();
    }, 1000); //setInterval(clockTick, 1000); will also work

    GetTime();

    function GetTime() {
        var CurrentTime = new Date()
        var hour = CurrentTime.getHours()
        var minute = CurrentTime.getMinutes()
        var second = CurrentTime.getSeconds()

        if (minute < 10) {
            minute = "0" + minute
        }

        if (second < 10) {
            second = "0" + second
        }

        var GetCurrentTime = hour + ":" + minute;

        document.getElementById("Time").value = GetCurrentTime;
        setTimeout(GetTime, 1000)
    }
</script>
<script>
    // Function which returns a minimum of two digits in case the value is less than 10
    const getTwoDigits = (value) => value < 10 ? `0${value}` : value;

    const formatDate = (date) => {
        const year = date.getFullYear();
        const month = getTwoDigits(date.getMonth() + 1); // add 1 since getMonth returns 0-11 for the months
        const day = getTwoDigits(date.getDate());


        return `${day}-${month}-${year}`;
    }

    const formatTime = (date) => {
        const hours = getTwoDigits(date.getHours());
        const mins = getTwoDigits(date.getMinutes());

        return `${hours}:${mins}`;
    }
</script>