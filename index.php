<?php  session_start();
include "Include/member/header_member.php";
include "Include/member/menu_member.php";
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
                        <div class="card-body">
                            <br>
                            <?php
					            if(!isset($_SESSION["username"])){ //ถ้ายังไม่ได้ Login จะโชว์สองลิงค์ด้านล่าง
                            ?>
                            <h1 class="text-center">กรุณา <a class="text-danger" href="Login/login.php">ล็อกอิน</a> ก่อนเข้าใช้งาน !!!</a></h1>
                            <?php
                            }else{
                            echo '<h1 class="text-center">ยินดีต้อนรับ คุณ. <a class="text-warning" href="">' . $_SESSION['name'] . '</a></h1> ';
                            }
                            ?> 
                            <br>
                            <p class="card-text">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="src/dist/img/banner_one.png" alt="" width="1100" height="300">

                                    </div>
                                    <div class="carousel-item">
                                        <img src="src/dist/img/banner_two.png" alt="" width="1100" height="300">

                                    </div>
                                    <div class="carousel-item">
                                        <img src="src/dist/img/banner_three.png" alt="" width="1100" height="300">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                            </p>
                            <br>
                            <div class="container">
                                <div class="">
                                    <div class="text-center h3">ค้นหารายการ</div>
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="search" class="form-control form-control-lg" placeholder="ค้นหา">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-lg btn-default">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </div>
                                <br>
                                <div class="row text-center">
                                    <div class="col-sm-6">
                                        <a href="index.php">
                                            <img src="src/dist/img/home.png" alt="" width="150" height="145">
                                            <div>
                                                <h1>หน้าหลัก</h1>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="Front_end/form_repair.php">
                                            <img src="src/dist/img/form.png" alt="" width="140" height="147">
                                            <div>
                                                <h1>แจ้งซ่อม</h1>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <div class="row text-center">
                                    <div class="col-sm-6">
                                        <a href="Front_end/list_repair_member.php">
                                            <img src="src/dist/img/list.png" alt="" width="140" height="147">
                                            <div>
                                                <h1>รายการซ่อม</h1>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="Front_end/follow_up_repair.php">
                                        <img src="src/dist/img/follow.png" alt="" width="140" height="147">
                                        <div>
                                            <h1>ติดตามการซ่อม</h1>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include "Include/member/footer_member.php"; ?>