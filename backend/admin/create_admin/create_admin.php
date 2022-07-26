<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Create Admin</h4>
                </div>
                <div class="links">
                    <a href="view_admin.php" class="btn btn-info">View Admin</a>
                </div>
                <div class="form-section">
                    <?php


                    $username = isset($_POST['username'])?$_POST['username']:'';
                    $mail = isset($_POST['mail'])?$_POST['mail']:'';
                    $phone = isset($_POST['phone'])?$_POST['phone']:'';
                    $adress = isset($_POST['adress'])?$_POST['adress']:'';
                    $type = isset($_POST['type'])?$_POST['type']:'';
                    $password = isset($_POST['password'])?$_POST['password']:'';
                    $confirm_password = isset($_POST['confirm_password'])?$_POST['confirm_password']:'';
                    $image = isset($_POST['image'])?$_POST['image']:'';


                    if(isset($_POST['save']))
                    {
                        if($password != $confirm_password)
                        {
                            echo "<div class='alert alert-danger'>Password Does Not Match</div>";
                        }
                        else
                        {
                            $username = mysqli_real_escape_string($db->link,$username);
                            $mail = mysqli_real_escape_string($db->link,$mail);
                            $phone = mysqli_real_escape_string($db->link,$phone);
                            $adress = mysqli_real_escape_string($db->link,$adress);
                            $type = mysqli_real_escape_string($db->link,$type);
                            $password = mysqli_real_escape_string($db->link,md5($password));
                            $confirm_password = mysqli_real_escape_string($db->link,md5($confirm_password));

                            $password_recover = isset($_POST['password'])?$_POST['password']:'';

                            $sql = $db->link->query("INSERT INTO `create_admin` (`username`,`mail`,`phone`,`adress`,`type`,`password`,`confirm_password`,`image`,`password_recover`) VALUES ('$username','$mail','$phone','$adress','$type','$password','$confirm_password','$image','$password_recover')");
                            if($sql)
                            {
                                $id = $db->link->insert_id;

                                $path_info = $_FILES['image']['name'];

                                    $extension = pathinfo($path_info, PATHINFO_EXTENSION);

                                    $image_name = $id.'.'.$extension;

                                    $path = 'asset/img/admin_image/'.$image_name;

                                    move_uploaded_file($_FILES['image']['tmp_name'], $path);

                                    $db->link->query("UPDATE `create_admin` SET `image`='$image_name' WHERE `id`='$id'");

                                    echo "<div class='alert alert-success'>Admin Created Successfully</div>";
                                
                            }
                            else
                            {
                                echo "<div class='alert alert-danger'>Admin Created Unsuccessfull</div>";
                            }
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-body-main">
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Username</b></label>
                                <input required type="text" name="username" placeholder="username" class="form-control col-lg-5 col-md-5 col-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Email</b></label>
                                <input required type="mail" name="mail" placeholder="ex:example@gmail.com" class="form-control col-lg-5 col-md-5 col-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Phone</b></label>
                                <input type="number" name="phone" placeholder="ex:01979283905" class="form-control col-lg-5 col-md-5 col-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Adress</b></label>
                                <input type="text" name="adress" placeholder="ex:Savar" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>User Type</b></label>
                                <select required class="form-control col-lg-5 col-md-5 col-12" name="type" required>
                                  <option value="">Select One</option>
                                  <option value="1">Active User</option>
                                  <option value="0">Inactive User</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Password</b></label>
                                <input required type="password" name="password" class="form-control col-lg-5 col-md-5 col-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Confirm Password</b></label>
                                <input required type="password" name="confirm_password" class="form-control col-lg-5 col-md-5 col-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Picture</b></label>
                                <input type="file" class="filestyle" name="image">
                            </div>
                            <div class="form-group" style="text-align: center !important;">
                                <input type="submit" name="save" class="btn btn-success col-4" value="Create">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>