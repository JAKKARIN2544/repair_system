<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../Back_end/dashboard.php" class="nav-link">หน้าหลัก</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-lg" >คู่มือการใช้งาน</a>
                </li>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <div class="hi-user text-dark"> <i class="text-warning">Hello,</i> <?php echo  $_SESSION['username']; ?> <i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"> จัดการข้อมูลส่วนตัว</span>
                        <div class="dropdown-divider"></div>
                        <a href="../Back_end/profile_admin.php" class="dropdown-item">
                            <i class="fas-icon fas fa-users-cog mr-2"></i>โปรไฟล์ Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas-icon fas fa-unlock-alt mr-2"></i>จัดการรหัสผ่าน
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class=" fas-icon fas fa-cogs mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="../sql/logout.php" class="dropdown-item dropdown-footer text-danger"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../Back_end/dashboard.php" class="brand-link">
                <img src="../src/dist/img/repair_systemLogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">REPAIR SYSTEM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <br>
                <!-- Sidebar user panel (optional) -->
                <div class="img5">
                    <?php
                    if (($_SESSION["level"]) == "admin") { //ถ้ายังไม่ได้ Login จะโชว์สองลิงค์ด้านล่าง
                        echo '<img src="../src/dist/img/profile/profile1.png" class="img5" alt="">';
                    ?>
                    <?php
                    } else if (($_SESSION["level"]) == "authorities") {
                        echo '<img src="../src/dist/img/profile/profile5.png" class="img5" alt="">';
                    }
                    ?>
                    </div>
                    
                    <?php
					if(!isset($_SESSION["username"])){ //ถ้ายังไม่ได้ Login จะโชว์สองลิงค์ด้านล่าง
                ?>
                 <div class="offline"> <i class="fas fa-circle"></i> offline</div>
                <?php
                    }else{
                    echo '<div class="online"> <i class="fas fa-circle"></i> online</div>';
            }
            ?> 
                <div class="username">
                    <i class="hi">Hi.</i> <a class="hi2 text-warning" href="#"> <?php echo  $_SESSION['name']; ?></a>
                </div>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header text-warning">หน้าหลัก</li>
                        <li class="nav-item">
                            <a href="../Back_end/dashboard.php" class="nav-link">
                                <i class="f1 nav-icon fas fa-tachometer-alt "></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Back_end/notify_repair.php" class="nav-link">
                            <i class="fas fa-tools nav-icon"></i>
                                        <p>แจ้งซ่อม</p>
                                        <span class="right badge badge-info">200 รายการ </span>
                            </a>
                        </li>
                        <li class="nav-header text-success">การจัดการ</li>
                        <li class="nav-item">
                            <a href="../Back_end/member.php" class="nav-link">
                                <i class="f2 nav-icon fas fa-users"></i>
                                <p>
                                    จัดการ ผู้ใช้งาน
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Back_end/authorities.php" class="nav-link">
                                <i class="f2 nav-icon fas fa-user-astronaut"></i>
                                <p>
                                    จัดการ เจ้าหน้าที่
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>
                                    จัดการ การซ่อม
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Back_end/list_of_repair.php" class="nav-link">
                                        <i class="fas fa-minus nav-icon"></i>
                                        <p>รับซ่อม</p>
                                        <span class="right badge badge-info">200 รายการ </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Back_end/items_being_repair.php" class="nav-link">
                                        <i class="fas fa-minus nav-icon"></i>
                                        <p>กำลังซ่อม</p>
                                        <span class="right badge badge-warning">200 รายการ </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Back_end/items_being_repair.php" class="nav-link">
                                        <i class="fas fa-minus nav-icon"></i>
                                        <p>ซ่อมสำเร็จ</p>
                                        <span class="right badge badge-success">200 รายการ </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Back_end/repair_cancellation_list.php" class="nav-link">
                                        <i class="fas fa-minus nav-icon"></i>
                                        <p>ยกเลิกซ่อม</p>
                                        <span class="right badge badge-danger">200 รายการ </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header text-primary">Report</>
                        <li class="nav-item">
                            <a href="../Back_end/view_report.php" class="nav-link">
                                <i class="f3 nav-icon fas fa-file-archive"></i>
                                <p>
                                    View Report
                                </p>
                            </a>
                        </li>
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        </div>
                        <div class="logout">
                            <li class="nav-item ">
                                <a href="../sql/logout.php" class="nav-link">
                                    <i class="nav-icon1 fas fa-sign-out-alt"></i>
                                    <p class="text-danger">
                                        ออกจากระบบ
                                    </p>
                                </a>
                            </li>
                        </div>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">คู่มือการใช้งาน</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">ยังไม่พร้อมใช้งานในส่วนนี้</p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>