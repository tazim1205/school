<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Admin</h4>
                </div>
                <div class="links">
                    <a href="create_admin.php" class="btn btn-info">Create Admin</a>
                </div>
                <div class="form-section">
                    <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Adress</th>
                                <th>User Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `create_admin`");
                            if($sql)
                            {
                                $sl = 1;
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $showdata['username']; ?></td>
                                    <td><?php echo $showdata['mail']; ?></td>
                                    <td><?php echo $showdata['phone']; ?></td>
                                    <td><?php echo $showdata['adress']; ?></td>
                                    <td>
                                        <?php 
                                        if($showdata['type'] == 1)
                                        {
                                            echo "<div class='badge badge-success'>Active</div>";
                                        }
                                        else
                                        {
                                            echo "<div class='badge badge-danger'>Not Active</div>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <img src="../../asset/img/admin_image/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
                                    </td>
                                    <td>
                                        
                                            <a href="edit_admin.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                            <a href="delete_admin.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
                                            
                                       
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>