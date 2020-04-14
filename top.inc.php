<?php
require('connection.inc.php');
$msg='';
if(isset($_SESSION['ADMIN_LOGIN']) && ($_SESSION['ADMIN_USERNAME']!='')){

    }
    else{
        header('location:categories.php');
        die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>PHP e-Commerce</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>

</head>

<body>
<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
    <!--logo end-->
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<!--header end-->
<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered">Sam</h5>
            <li class="mt">
                <a class="active" href="dashboard.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="categories.php">
                    <i class="fa fa-th"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="products.php">
                    <i class="fa fa-tasks"></i>
                    <span>Products</span>
                </a>

            </li>
            <li class="sub-menu">
                <a href="order.php">
                    <i class="fa fa-book"></i>
                    <span>Order</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="user.php">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="contactus.php">
                    <i class="fa fa-envelope"></i>
                    <span>Contact Us</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
