<?php include_once("./header.php") ?>
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once("./navbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once("./sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
    $pageTitle = "Dashboard";
    $currentPageLink = "./";
    $currentPage = "Dashboard";
    $previousPage = "Home";
    include_once("./bradcams.php");
     ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row" id="jsContent">

        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php include_once("./rightSidebar.php") ?>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include_once("./footer.php") ?>
