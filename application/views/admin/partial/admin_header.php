<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard - Pamdes</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/');?>images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/modal.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="index.html">
            <img class="mb-1 pb-1 app-logo" src="<?= base_url('assets/'); ?>images/Logo.png" alt="">
        </a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li><a class="app-search" style="color: var(--point)" href="#" data-toggle="dropdown"
                    aria-label="Open Profile Menu">
                    <center>
                        <i class="fa-solid fa-calendar-week"></i>
                    </center>
                    <b>
                        <?php
						date_default_timezone_set('Asia/Makassar');
						echo date('l, d - m - y | h:i A')
						?>
                    </b>
                </a>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>