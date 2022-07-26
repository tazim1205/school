<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="row">
                <?php 
                $sql_admin = $db->link->query("SELECT * FROM `create_admin`");
                $number = mysqli_num_rows($sql_admin);
                ?>
                <div class="col-md-4">
                    <a href="../create_admin/view_admin.php" style="text-decoration: none;">
                    <div class="card card-hero">
                        <div class="card-header">
                        <div class="card-icon">
                            <i class="far fa-user"></i>
                        </div>
                        <h4><?php echo $number; ?></h4>
                        <div class="card-description">Admin Created</div>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- active user -->
                <?php 
                $sql_active_admin = $db->link->query("SELECT * FROM `create_admin` WHERE `type`=1");
                $number = mysqli_num_rows($sql_active_admin);
                ?>
                <div class="col-md-4">
                    <a href="../create_admin/view_admin.php" style="text-decoration: none;">
                    <div class="card card-hero">
                        <div class="card-header">
                        <div class="card-icon">
                            <i class="far fa-user"></i>
                        </div>
                        <h4><?php echo $number; ?></h4>
                        <div class="card-description">Acitve User</div>
                        </div>
                    </div>
                    </a>
                </div>

                <!-- inactive user -->
                <?php 
                $sql_inactive_admin = $db->link->query("SELECT * FROM `create_admin` WHERE `type`=0");
                $number = mysqli_num_rows($sql_inactive_admin);
                ?>
                <div class="col-md-4">
                    <a href="../create_admin/view_admin.php" style="text-decoration: none;">
                    <div class="card card-hero">
                        <div class="card-header">
                        <div class="card-icon">
                            <i class="far fa-user"></i>
                        </div>
                        <h4><?php echo $number; ?></h4>
                        <div class="card-description">Inacitve User</div>
                        </div>
                    </div>
                    </a>
                </div>
                </div>
            </section>
        </div>
<?php include('footer.php'); ?>