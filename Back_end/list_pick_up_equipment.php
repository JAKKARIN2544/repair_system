<?php include "../Include/admin/header_amin.php";
include "../Include/admin/menu_admin.php"
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>รายการเบิกอุปกรณ์</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">รายการเบิกอุปกรณ์</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                <img src="../src/dist/img/repair_systemLogo.png" alt="AdminLTELogo" height="50" width="50"> REPAIR SYSTEM.
                                    <small class="float-right">รหัสรายการเบิก #PUE007612</small>
                                </h4>
                                <div class="float-right"><b>Date:</b> 2/10/2014</div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <address>
                                    <b>ชื่อ - นามสกุล:</b> SUPER ADMIN<br>
                                    <b>ที่อยู่:</b> banbung chonburi thailand 20170<br>
                                    <b>เบอร์โทรศัพท์:</b> 0917422993<br>
                                    <b>E-mail:</b> jakkarin.jaidiao2544@gmail.com
                                </address>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>รหัสรายการเบิก</th>
                                            <th>รายการอุปกณ์</th>
                                            <th>จำนวน</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Call of Duty</td>
                                            <td class="text-center">455-981-221</td>
                                            <td class="text-center">$64.50</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Need for Speed IV</td>
                                            <td class="text-center">247-925-726</td>
                                            <td class="text-center">$50.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Monsters DVD</td>
                                            <td class="text-center">735-845-642</td>
                                            <td class="text-center">$10.70</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Grown Ups Blue Ray</td>
                                            <td class="text-center">422-568-642</td>
                                            <td class="text-center">$25.99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Amount Due 2/22/2014</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping:</th>
                                            <td>$5.80</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>$265.24</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="#" rel="noopener" target="_blank" class="btn btn-warning"><i class="fas fa-backward"></i> ย้อนกลับ</a>
                                <button type="button" class="btn btn-success float-right"><i class="fas fa-check"></i> ยืนยันการเบิกอุปกรณ์
                                </button>
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-sync"></i> คำนวณใหม่
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include "../Include/admin/footer_admin.php"; ?>