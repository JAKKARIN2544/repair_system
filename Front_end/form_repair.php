<?php include "../Include/member/header_member.php";
include "../Include/member/menu_member.php";
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        รายการแจ้งซ่อมทั้งหมดของ
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
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h3 class="text-center"><i class="icon fas fa-exclamation-triangle"></i>คำเตือน!</h3>
                        <p class="text-center">กรุณากรอกข้อมูล ในฟอร์มให้ถูกต้อง และตรวจสอบความถูกต้อง ก่อนกดยืนยัน !!!.</ย>
                    </div>
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
            </div>
        </div>
    </section>
</div>
<?php include "../Include/member/footer_member.php"; ?>