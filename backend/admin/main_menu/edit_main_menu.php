<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Main Menu</h4>
                </div>
                <div class="links">
                    <a href="view_main_menu.php" class="btn btn-info">View Main Menu</a>
                </div>
                <div class="form-section">
                    
                    <?php
                    $id = $_GET['id'];

                    $sl = isset($_POST['sl'])?$_POST['sl']:'';
                    $link_name = isset($_POST['link_name'])?$_POST['link_name']:'';
                    $icon = isset($_POST['icon'])?$_POST['icon']:'';
                    $status = isset($_POST['status'])?$_POST['status']:'';

                    if(isset($_POST['save']))
                    {
                        $query = "UPDATE `main_menu` SET `main_menu_name`='$link_name',`icon`='$icon',`status`='$status' WHERE `id`='$id'";

                        $sql = $db->link->query($query);

                        if($sql)
                        {
                            echo "<div class='alert alert-success'>Data Update Successfllly</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Update Unsuccessfully</div>";
                        }
                    }

                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];

                        // echo $id;

                        $query = "SELECT * FROM `main_menu` WHERE `id`='$id'";

                        $sql = $db->link->query($query);

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    }

                    ?>                   

                    
                    <form method="post">
                        <div class="input-single-box">
                            <label>Serial No</label>
                            <input type="number" name="sl" class="form-control" placeholder="EX:001" required value="<?php echo $showdata['sl']; ?>" readonly>
                        </div>
                        <div class="input-single-box">
                            <label>Link Name</label>
                            <input type="text" name="link_name" class="form-control" required value="<?php echo $showdata['main_menu_name']; ?>">
                        </div>
                        <div class="input-single-box">
                            <label>Icon Name</label>
                            <input type="text" name="icon" class="form-control" required value="<?php echo $showdata['icon']; ?>">
                        </div>
                        <div class="input-single-box">
                            <label>Status</label>
                            <select class="form-control select2" name="status">
                                <?php 
                                if($showdata['status'] == 1)
                                {
                                ?>
                                <option value="">Select One</option>
                                <option selected value="1">Active</option>
                                <option value="0">Inactive</option>
                                <?php
                                }
                                else
                                {
                                ?>
                                <option value="">Select One</option>
                                <option value="1">Active</option>
                                <option selected value="0">Inactive</option>
                                <?php
                                }
                                ?> 
                                
                            </select>
                        </div>
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save" value="Update">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>