<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Trang Admin</title>
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url() ?> public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?php echo base_url() ?>public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?php echo base_url() ?>public/admin/css/sb-admin.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
            </button>
            <!-- Navbar Search -->
           
            <!-- Navbar -->
        
        </nav>
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="<?php echo isset($open) && $open =='category' ? 'active' : ''?>">
                    <a class="nav-link" href="<?php echo modules("category")?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Danh muc san pham</span>
                    </a>
                </li>
                   <li class="<?php echo isset($open) && $open =='product' ? 'active' : ''?>">
                    <a class="nav-link" href="<?php echo modules("product")?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>San Pham</span>
                    </a>
                </li>
                     <li class="<?php echo isset($open) && $open =='admin' ? 'active' : ''?>">
                    <a class="nav-link" href="<?php echo modules("admin")?>">
                    <i class="fas fa-user-shield"></i>
                    <span>Admin</span>
                    </a>
                </li>
             
            
            </ul>