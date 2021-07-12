<?php include "../Include/admin/header_amin.php";
include "../Include/admin/menu_admin.php"
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
                                <h2>150</h2>

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
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card-g1 card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-title text-danger">กราฟรายงาน การซ่อม</h2>
                                    <a href="">View</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text1 text-bold text-lg">18,230.00 <a
                                                class="text1">รายการ</a></span>
                                        <span>ยอดการซ่อมทั้งหมด</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                            <i></i> 33.1%
                                        </span>
                                        <span class="text-muted">คิดเป็นเปอร์เซ็นต์</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
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
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">

                        <div class="">
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
                            <div class="info-box mb-3 ">
                                <span class="info-box-icon"><i class="fas fa-wrench"></i></span>

                                <div class="info-box-content">
                                    <h3><span class="info-box-text">กำลังดำเนินการซ่อม</span></h3>
                                    <span class="uit info-box-number">92,050 <a class="text-dark">รายการ</a></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box mb-3 ">
                                <span class="info-box-icon"><i class="fas fa-times "></i></span>

                                <div class="info-box-content">
                                    <h3><span class="info-box-text">รายการยกเลิกซ่อม</span></h3>
                                    <span class="uit info-box-number">163,921 <a class="text-dark">รายการ</a></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <!-- PRODUCT LIST -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">รายการ แจ้งซ่อม</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <ul class="products-list product-list-in-card pl-2 pr-2">
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../src/dist/img/default-150x150.png" alt="Product Image"
                                                    class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="" class="product-title">Samsung TV
                                                    <span class="badge badge-danger float-right">ยกเลิกซ่อม</span></a>
                                                <span class="product-description">
                                                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../src/dist/img/default-150x150.png" alt="Product Image"
                                                    class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="" class="product-title">Bicycle
                                                    <span class="badge badge-danger float-right">ยกเลิกซ่อม</span></a>
                                                <span class="product-description">
                                                    26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../src/dist/img/default-150x150.png" alt="Product Image"
                                                    class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="" class="product-title">
                                                    Xbox One <span
                                                        class="badge badge-danger float-right">ยกเลิกซ่อม</span></a>
                                                <span class="product-description">
                                                    Xbox One Console Bundle with Halo Master Chief Collection.
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../src/dist/img/default-150x150.png" alt="Product Image"
                                                    class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="" class="product-title">PlayStation 4
                                                    <span class="badge badge-success float-right">รับซ่อม</span></a>
                                                <span class="product-description">
                                                    PlayStation 4 500GB Console (PS4)
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    <a href="" class="uppercase">View All Products</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<?php include "../Include/admin/footer_admin.php"; ?>