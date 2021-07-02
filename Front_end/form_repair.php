<?php include "../Include/member/header_member2.php";
include "../sql/check_session.php";
include "../Include/member/menu_member2.php";
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
                        <div class="container">
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h3 class="text-center"><i class="icon fas fa-exclamation-triangle"></i>คำเตือน!</h3>
                            <p class="text-center">กรุณากรอกข้อมูล ในฟอร์มให้ถูกต้อง และตรวจสอบความถูกต้อง ก่อนกดยืนยัน !!!.</ย>
                        </div>
                        </div>
                        
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputfristname">ชื่อ<a class="text-danger">*</a></label>
                                    <input type="text" class="form-control" id="fristname" placeholder="ชื่อจริง">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputlastname">นามสกุล<a class="text-danger">*</a></label>
                                    <input type="text" class="form-control" id="lastname" placeholder="นามสกุล">
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
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include "../Include/member/footer_member2.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
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