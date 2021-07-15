<?php include '../Include/admin/header_amin.php';
include '../Include/admin/menu_admin.php';
?>
<?php
include "../sql/conn.php";
$sql = "SELECT * FROM tb_user";
$result = mysqli_query($conn, $sql);
include "../sql/count_sql.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="div-all">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-2 text-danger" style="font-size: 30px"><i
                                class="nav-icon fas fa-tachometer-alt"></i> DASHBOARD OVERVIEW</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Back_end/dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h2><?php echo $row_countuser['COUNT(id)'] ?></h2>
                                <p>ผู้ใช้งาน</p>
                            </div>
                            <div class="icon">
                                <i class="fas-icon fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h2>53</h2>

                                <p>เจ้าหน้าที่</p>
                            </div>
                            <div class="icon">
                                <i class="fas-icon fas fa-user-astronaut"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h2>44</h2>

                                <p>รายการ เบิกอุปกรณ์</p>
                            </div>
                            <div class="icon">
                                <i class="fas-icon fas fa-toolbox"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h2>65</h2>

                                <p>รายการ แจ้งซ่อม</p>
                            </div>
                            <div class="icon">
                                <i class="fas-icon fas fa-tools"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col col-md-7">
                        <div class="card-g1 card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-title text-danger">กราฟรายงาน การซ่อม</h2>
                                    <a href="">View</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- /.d-flex -->
                                <br>
                                <div class="position-relative mb-4">
                                    <div id="myfirstchart3" style="height: 250px;" ;></div>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-success"></i> รับซ่อม
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-square text-warning"></i> กำลังซ่อม
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-danger"></i> ยกเลิกซ่อม
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <!-- Info Boxes Style 2 -->
                        <div class="info-box mb-3 ">
                            <span class="info-box-icon"><i class="fas fa-tools"></i></span>

                            <div class="info-box-content">
                                <h3><span class="info-box-text">รายการที่ซ่อมแล้ว</span></h3>
                                <span class="uit info-box-number">5,200 <a class="text-dark">รายการ</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3">
                            <span class="info-box-icon"><i class="fas fa-wrench"></i></span>

                            <div class="info-box-content">
                                <h3><span class="info-box-text">กำลังดำเนินการซ่อม</span></h3>
                                <span class="uit info-box-number">92,050 <a class="text-dark">รายการ</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3">
                            <span class="info-box-icon"><i class="fas fa-times "></i></span>
                            <div class="info-box-content">
                                <h3><span class="info-box-text">รายการยกเลิกซ่อม</span></h3>
                                <span class="uit info-box-number">163,921 <a class="text-dark">รายการ</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!----------------------------------------------------------------------------------------------------------------------->
                        <div class="info1 info-box mb-3">
                            <div class="info-box-content">
                                <h3><span class="info-box-text text-center">ยอดรวมทั้งหมด</span></h3>
                                <span class="rroe info-box-number text-light">163,921 <span
                                        class="text-dark">รายการ</span></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <!-- Left col -->
                    <!-- /.row (main row) -->
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="card-g1 card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-title text-danger">กราฟรายงาน การซ่อม</h2>
                                    <a href="">View</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- /.d-flex -->
                                <br>
                                <div class="position-relative mb-4">
                                    <div id="myfirstchart2" style="height: 250px;" ;></div>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-success"></i> รับซ่อม
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-square text-warning"></i> กำลังซ่อม
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-danger"></i> ยกเลิกซ่อม
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="card-g1 card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-title text-danger">กราฟรายงาน การซ่อม</h2>
                                    <a href="">View</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- /.d-flex -->
                                <br>
                                <div class="position-relative mb-4">
                                    <div id="myfirstchart" style="height: 250px;" ;></div>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-success"></i> รับซ่อม
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-square text-warning"></i> กำลังซ่อม
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-danger"></i> ยกเลิกซ่อม
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="card-g1 card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-title text-danger">กราฟรายงาน การซ่อม</h2>
                                    <a href="">View</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- /.d-flex -->
                                <br>
                                <div class="position-relative mb-4">
                                    <div id="myfirstchart2" style="height: 250px;" ;></div>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-success"></i> รับซ่อม
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-square text-warning"></i> กำลังซ่อม
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-danger"></i> ยกเลิกซ่อม
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="card-g1 card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-title text-danger">กราฟรายงาน การซ่อม</h2>
                                    <a href="">View</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- /.d-flex -->
                                <br>
                                <div class="position-relative mb-4">
                                    <div id="myfirstchart" style="height: 250px;" ;></div>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-success"></i> รับซ่อม
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-square text-warning"></i> กำลังซ่อม
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-danger"></i> ยกเลิกซ่อม
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<?php include '../Include/admin/footer_admin.php'; ?>
<?php include '../src/chart/chart.php';?>