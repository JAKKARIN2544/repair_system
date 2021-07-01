<?php include '../sql/conn.php';
include '../sql/check_session.php';
include '../sql/session.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar1 main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../Front_end/index_member.php" class="nav-link">หน้าหลัก</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">ติดต่อ</a>
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
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <div class="hi-user text-dark">
                            <i class="text-warning">Hello,</i> <?php echo  $_SESSION['username']; ?> <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"> จัดการข้อมูลส่วนตัว</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
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
        <aside class="sidebar1 main-sidebar sidebar-dark-dark elevation-4">
            <!-- Brand Logo -->
            <a href="../Front_end/index_member.php" class="brand-link">
                <img src="../src/dist/img/repair_systemLogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">REPAIR SYSTEM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header text-warning"></li>
                        <li class="nav-header text-warning"></li>
                        <li class="nav-item">
                            <a href="../Front_end/index_member.php" class="nav-link">
                                <i class="f1 nav-icon fas fa-home"></i>
                                <p>
                                    หน้าหลัก
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Front_end/form_repair.php" class="nav-link">
                                <i class="f1 nav-icon fas fa-edit"></i>
                                <p>
                                    แจ้งซ่อม
                                </p>
                            </a>
                            </>
                        
                        <li class="nav-item">
                            <a href="../Front_end/list_repair_member.php" class="nav-link">
                                <i class="f2 nav-icon fas fa-clipboard-list"></i>
                                <p>
                                   รายการซ่อม
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Front_end/follow_up_repair.php" class="nav-link">
                                <i class="f2 nav-icon fas fa-search"></i>
                                <p>
                                    ติดตามการซ่อม
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