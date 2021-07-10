<?php
include "../Include/admin/header_amin.php";
include "../Include/admin/menu_admin.php"
?>
<div class="content-wrapper">
        <br>
        <section class="content">
                <!-- Default box -->
                <div class="card">
                        <div class="card-body row">
                                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                                        <div class="">
                                                <?php
                                                if (($_SESSION["level"]) == "admin") { //ถ้ายังไม่ได้ Login จะโชว์สองลิงค์ด้านล่าง
                                                        echo '<div class="img1">';
                                                        echo '<img src="../src/dist/img/profile/profile1.png" class="img5" alt="">';
                                                        echo '</div>';
                                                ?>
                                                <?php
                                                } else if (($_SESSION["level"]) == "authorities") {
                                                        echo '<div class="img1">';
                                                        echo '<img src="../src/dist/img/profile/profile5.png" class="img5" alt="">';
                                                        echo '</div>';
                                                }
                                                ?>
                                                <h2><?php echo  $_SESSION['name']; ?></h2>
                                                <p class="lead mb-5"><?php echo  $_SESSION['email']; ?>
                                                        <br>
                                                        <?php echo  $_SESSION['level']; ?>
                                                        <br>
                                                        เบอร์โทรศัพท์ : <?php echo  $_SESSION['tel']; ?>
                                                </p>
                                        </div>
                                </div>
                                <div class="col-7">
                                        <div class="form-group">
                                                <label for="inputName">Name</label>
                                                <input type="text" id="inputName" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                                <label for="inputEmail">E-Mail</label>
                                                <input type="email" id="inputEmail" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                                <label for="inputSubject">Subject</label>
                                                <input type="text" id="inputSubject" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                                <label for="inputMessage">Message</label>
                                                <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="อัพเดต ข้อมูล">
                                        </div>
                                </div>
                        </div>
                </div>

        </section>
</div>

<?php include "../Include/admin/footer_admin.php"; ?>