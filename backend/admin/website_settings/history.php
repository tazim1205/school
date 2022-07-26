<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>History</h4>
                </div>
                <div class="form-section">
                    <?php 

                    if(isset($_POST['save']))
                    {
                        $description = $_POST['description'];

                        $sql_update = $db->link->query("UPDATE `history` SET `description`='$description' WHERE `id`=1");
                        if($sql_update)
                        {
                            echo "<div class='alert alert-success'>Data Insert Successfllly</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly</div>";
                        }
                    }

                    $sql_select = $db->link->query("SELECT * FROM `history` WHERE `id`=1");
                    if($sql_select)
                    {
                        $showdata = $sql_select->fetch_assoc();
                    }
                    ?>
                    <form method="POST">
                        <div class="input-single-box">
                            <label>History</label> 
                            <textarea name="description" id="" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
                        </div>
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>