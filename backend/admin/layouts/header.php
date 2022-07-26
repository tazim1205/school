<?php 
include('../../../database/connection.php');
$db=new database();
session_name("admin");
session_start();
if(!isset($_SESSION['email']))
{
    echo "<script>location = '../login/'</script>";
}
// $sql_info = $db->link->query("SELECT * FROM `website_info` WHERE `id`=1");
// if($sql_info)
// {
//   $show_info = $sql_info->fetch_assoc();
// }
?>
<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Admin Dashboard</title>


<!-- CSS Libraries -->
<link rel="stylesheet" href="../../assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="../../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

<link rel="stylesheet" href="../../assets/modules/select2/dist/css/select2.min.css">


<!-- General CSS Files -->
<link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="../../assets/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="../../assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="../../assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../../assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="../../assets/css/style.min.css">
<link rel="stylesheet" href="../../assets/css/components.min.css">
<!-- fontawsome css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/brands.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/solid.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<link rel="stylesheet" href="../../assets/modules/izitoast/css/iziToast.min.css">

</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="../../asset/img/admin_image/<?php echo $_SESSION['image']; ?>" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_SESSION['username']; ?></div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="../logout.php" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

       
            

        


