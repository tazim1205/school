<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Add Sub Main Menu</h4>
                </div>
                <div class="links">
                    <a href="view_sub_menu.php" class="btn btn-info">View Sub Menu</a>
                </div>
                <div class="form-section">
                    <?php 
                    if(isset($_POST['save']))
                    {
                        $sl = $_POST['sl']?$_POST['sl']:'';
                        $main_menu = $_POST['main_menu']?$_POST['main_menu']:'';
                        $link_name = $_POST['link_name']?$_POST['link_name']:'';
                        $route_name = $_POST['route_name']?$_POST['route_name']:'';

                        $sql_check = $db->link->query("SELECT * FROM `sub_menu` WHERE `sl`='$sl'");

                        if(mysqli_num_rows($sql_check) > 0)
                        {
                             echo "<div class='alert alert-info'>This Serial Number is Already Taken</div>";
                        }
                        else
                        {
                            $sql = $db->link->query("INSERT INTO `sub_menu`(`sl`,`main_menu`, `link_name`,`route_name`,`status`) VALUES ('$sl','$main_menu','$link_name','$route_name','1')");
                            if($sql)
                            {
                                echo "<div class='alert alert-success'>Data Insert Successfully</div>";
                            }
                            else
                            {
                                echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly</div>";
                            }
                        }
                    }
                    ?>
                    <form method="post">
                        <div class="input-single-box">
                            <label>Serial No</label>
                            <input type="number" name="sl" class="form-control" placeholder="EX:001" required>
                        </div>
                        <div class="input-single-box">
                            <label>Main Menu</label>
                            <select class="form-control" name="main_menu">
                                <option>Select One</option>
                                <?php 
                                $main_menu = $db->link->query("SELECT * FROM `main_menu` WHERE `status`='1' ");
                                if($main_menu)
                                {
                                    while($showmain_menu = $main_menu->fetch_assoc())
                                    {
                                    ?>
                                    <option value="<?php echo $showmain_menu['id']; ?>"><?php echo $showmain_menu['main_menu_name']; ?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-single-box">
                            <label>Link Name</label>
                            <input type="text" name="link_name" class="form-control" required>
                        </div>
                        <div class="input-single-box">
                            <label>Route Name</label>
                            <input type="text" name="route_name" class="form-control" required>
                        </div>
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>