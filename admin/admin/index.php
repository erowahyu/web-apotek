<?php 
include 'includes/session.php';
include 'includes/header.php'; 
?>
<?php

include "koneksi.php";
?>
<head>

<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="product/css/bootstrap.css">
    <link rel="stylesheet" href="product/css/style.css">
    <link rel="stylesheet" href="product/font-awesome/css/font-awesome.min.css">

    <meta charset="utf-8">
    
  <!-- Library CSS -->
  <?php
    include "bundle_css.php";
  ?>
  </head>
	<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      

    <section class="content-header">
          <h1>
            User
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li><i class="fa fa-book"></i> User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
        
          <table id="data" class="table table-bordered table-striped table-scalable">
           <div id="wrapper">

      <nav class="navbar navbar-light bg-faded">
     
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Data Produk<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=add">Add Data</a>
        </li>
      </ul>
      </nav>

      <div class="container box">
       <?php include "product/pages.php";?>
      </div>

    </div>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    
    <!-- Modal Popup Dosen -->
    
    <!-- Modal Popup Dosen Edit -->
    <div id="ModalEditDosen" class="modal fade" tabindex="-1" role="dialog"></div>
    
    <!-- Modal Popup untuk delete--> 
    <div class="modal fade" id="modal_delete">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
          </div>    
          <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
     
  </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/products_modal.php'; ?>
    <?php include 'includes/products_modal2.php'; ?>

</div>
<!-- ./wrapper -->

<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'home.php?year='+$(this).val();
  });
});

<script src="product/js/jquery.min.js"></script>
    <script src="product/js/bootstrap.js"></script>
    <script src="product/ckeditor/ckeditor.js"></script>
    <script type="product/text/javascript">
      CKEDITOR.replace( 'alamat',{height: 300} );
</script>


</body>
</html>