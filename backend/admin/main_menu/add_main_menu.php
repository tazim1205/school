<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Add Main Menu</h4>
                </div>
                <div class="links">
                    <a href="view_main_menu.php" class="btn btn-info">View Main Menu</a>
                </div>
                <div class="form-section">
                    <?php 
                    $sl = isset($_POST['sl'])?$_POST['sl']:'';
                    $link_name = isset($_POST['link_name'])?$_POST['link_name']:'';
                    $icon = isset($_POST['icon'])?$_POST['icon']:'';
                    $status = isset($_POST['status'])?$_POST['status']:'';

                    // $status = $_POST['status']; 
                    if(isset($_POST['save']))
                    {
                        if(!empty($sl) && !empty($link_name) && !empty($icon))
                        {
                            

                            
                                $sql = $db->link->query("INSERT INTO `main_menu`(`sl`, `main_menu_name`, `icon`, `status`) VALUES ('$sl','$link_name','$icon','$status')");
                                if($sql)
                                {
                                    // echo "<div class='alert alert-success'>Data Insert Successfully</div>";
                                    echo "<div class='alert alert-success'>Data Insert Successfllly!</div>";
                                }
                                else
                                {
                                    echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly!</div>";
                                }
                            
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Please Fill Out All The Fields!</div>";
                        }
                    }
                    ?>
                    <!-- <div class="card-body text-center">
                                    <div class="mb-2">Success Message</div>
                                    <button class="btn btn-primary" id="toastr-2">Launch</button>
                                </div> -->
                    <form method="post">
                        <div class="input-single-box">
                            <label>Serial No</label>
                            <input type="number" name="sl" class="form-control" placeholder="EX:001" required>
                        </div>
                        <div class="input-single-box">
                            <label>Link Name</label>
                            <input type="text" name="link_name" class="form-control" required>
                        </div>
                        <div class="input-single-box">
                            <label>Icon Name</label>
                            <input type="text" name="icon" class="form-control" required>
                        </div>
                        <div class="input-single-box">
                            <label>Status</label>
                            <select class="form-control select2" name="status"> 
                                <option value="">Select One</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>