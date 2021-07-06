<?php include 'sql/conn.php';
?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="" class="navbar-logo navbar-brand">
                    <img src="src/dist/img/repair_systemLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">REPAIR SYSTEM</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="Front_end/index_member.php" class="nav-link">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a href="Front_end/form_repair.php" class="nav-link">แจ้งซ่อม</a>
                        </li>
                        <li class="nav-item">
                            <a href="Front_end/list_repair_member.php" class="nav-link">รายการซ่อม</a>
                        </li>
                        <li class="nav-item">
                            <a href="Front_end/follow_up_repair.php" class="nav-link">ติดตามการซ่อม</a>
                        </li>
                        <li class="nav-item">
                            <a href="Front_end/help.php" class="nav-link">วิธีใช้งาน</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <?php
					if(!isset($_SESSION["username"])){ //ถ้ายังไม่ได้ Login จะโชว์สองลิงค์ด้านล่าง
                ?>
                 <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <div class="hi-user text-dark"> <i class="text-dark">เข้าสู่ระบบ/สมัครสมาชิก</i></i> <i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            
                            <div class="dropdown-divider"></div>
                            <a href="Login/login.php" class="dropdown-item">
                                <i class="fas-icon fas fa-users-cog mr-2"></i>เข้าสู่ระบบ
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="Login/register.php" class="dropdown-item">
                                <i class="fas-icon fas fa-unlock-alt mr-2"></i>สมัครสมาชิก
                            </a>
                        </div>
                    </li>
                </ul>
                <?php
                    }else{
                        echo ' <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">';
                        echo ' <li class="nav-item dropdown">';
                        echo ' <a class="nav-link" data-toggle="dropdown" href="#">';
                        echo ' <div class="hi-user text-dark"> <i class="text-warning">Hello,</i> ' . $_SESSION['username'] . ' <i class="fas fa-angle-down"></i></div>';
                        echo ' </a>';
                        echo ' <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">';
                        echo ' <span class="dropdown-item dropdown-header"> จัดการข้อมูลส่วนตัว</span>';
                        echo ' <div class="dropdown-divider"></div>';
                        echo ' <a href="#" class="dropdown-item">';
                        echo ' <i class="fas-icon fas fa-users-cog mr-2"></i>โปรไฟล์ Profile';
                        echo ' </a>';
                        echo ' <div class="dropdown-divider"></div>';
                        echo ' <a href="#" class="dropdown-item">';
                        echo ' <i class="fas-icon fas fa-unlock-alt mr-2"></i>จัดการรหัสผ่าน';
                        echo ' </a>';
                        echo ' <div class="dropdown-divider"></div>';
                        echo ' <a href="#" class="dropdown-item">';
                        echo ' <i class=" fas-icon fas fa-cogs mr-2"></i> Settings';
                        echo ' </a>';
                        echo ' <div class="dropdown-divider"></div>';
                        echo ' <a href="sql/logout.php" class="dropdown-item dropdown-footer text-danger"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>';
                        echo ' </div>';
                        echo ' </li>';
                        echo ' </ul>';
            }
            ?> 

            </div>
        </nav>
        <!-- /.navbar -->