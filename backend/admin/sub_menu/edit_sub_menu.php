<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Sub Main Menu</h4>
                </div>
                <div class="links">
                    <a href="view_sub_menu.php" class="btn btn-info">View Sub Menu</a>
                </div>
                <div class="form-section">
                   
                   <?php 
                   if(isset($_GET['id']))
                   {
                        $id = $_GET['id'];


                        if(isset($_POST['save']))
                        {
                            $sl = $_POST['sl']?$_POST['sl']:'';
                            $main_menu = $_POST['main_menu']?$_POST['main_menu']:'';
                            $link_name = $_POST['link_name']?$_POST['link_name']:'';
                            $route_name = $_POST['route_name']?$_POST['route_name']:'';

                            $sql = $db->link->query("UPDATE `sub_menu` SET `sl`='$sl',`main_menu`='$main_menu',`link_name`='$link_name',`route_name`='$route_name' WHERE `id`='$id'");

                            if($sql)
                            {
                                echo "<div class='alert alert-success'>Data Updated!</div>";
                            }
                            else
                            {
                                echo "<div class='alert alert-danger'>Data Can not Update</div>";
                            }
                        }

                        $sql_get = $db->link->query("SELECT * FROM `sub_menu` WHERE `id`='$id.
                            '");

                        if($sql_get)
                        {
                            $showdata = $sql_get->fetch_assoc();
                        }
                   }
                   ?>
                    
                    <form method="post">
                        <div class="input-single-box">
                            <label>Serial No</label>
                            <input type="number" name="sl" class="form-control" value="<?php echo $showdata['sl']; ?>" readonly>
                        </div>
                        <div class="input-single-box">
                            <label>Main Menu</label>
                            <select class="form-control" name="main_menu">
                                <option>Select One</option>
                                <?php 
                                $main_menu = $db->link->query("SELECT * FROM `main_menu`");
                                if($main_menu)
                                {
                                    while($showmain_menu = $main_menu->fetch_array())
                                    {
                                        if($showmain_menu['0'] == $showdata['main_menu'])
                                        {
                                            $selected = 'selected';
                                        }
                                        else
                                        {
                                            $selected='';
                                        }
                                    ?>
                                    <option <?php echo $selected; ?> value="<?php echo $showmain_menu['0']; ?>"><?php echo $showmain_menu['2']; ?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-single-box">
                            <label>Link Name</label>
                            <input type="text" name="link_name" class="form-control" value="<?php echo $showdata['link_name']; ?>" required>
                        </div>
                        <div class="input-single-box">
                            <label>Route Name</label>
                            <input type="text" name="route_name" class="form-control" value="<?php echo $showdata['route_name']; ?>" required>
                        </div>
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>