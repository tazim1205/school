<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Sub Menu</h4>
                </div>
                <div class="links">
                    <a href="add_sub_menu.php" class="btn btn-info">Add Sub Menu</a>
                </div>
                <div class="form-section">
                    <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Main Menu</th>
                                <th>Link Name</th>
                                <th>Route Name</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 

                            $sql = $db->link->query("SELECT sub_menu.*,main_menu.main_menu_name FROM `sub_menu`INNER JOIN `main_menu` ON sub_menu.main_menu=main_menu.id");

                            if($sql)
                            {
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['sl']; ?></td>
                                    <td><?php echo $showdata['main_menu_name']; ?></td>
                                    <td><?php echo $showdata['link_name']; ?></td>
                                    <td><?php echo $showdata['route_name']; ?></td>
                                    <td>
                                       <a href="edit_sub_menu.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_sub_menu.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
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
        <script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>
<?php include('../layouts/footer.php'); ?>