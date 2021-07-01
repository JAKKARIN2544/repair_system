<?php include '../sql/conn.php';
include '../sql/check_session.php';
include '../sql/session.php';
?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="" class="navbar-logo navbar-brand">
                    <img src="../src/dist/img/repair_systemLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">REPAIR SYSTEM</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../Front_end/index_member.php" class="nav-link">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a href="../Front_end/form_repair.php" class="nav-link">แจ้งซ่อม</a>
                        </li>
                        <li class="nav-item">
                            <a href="../Front_end/list_repair_member.php" class="nav-link">รายการซ่อม</a>
                        </li>
                        <li class="nav-item">
                            <a href="../Front_end/follow_up_repair.php" class="nav-link">ติดตามการซ่อม</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <div class="hi-user text-dark"> <i class="text-warning">Hello,</i> <?php echo  $_SESSION['username']; ?> <i class="fas fa-angle-down"></i></div>
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
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->