<?php 
include 'includes/session.php';
include 'includes/header.php'; 
?>
<?php

include "koneksi.php";
?>
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
            Order
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li><i class="fa fa-book"></i> Order</li>
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
            <?php
              include "dt_order.php";
            ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    
    <!-- Modal Popup Dosen -->
    <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Product</h4>
          </div>
          <div class="modal-body">
            <form action="artikel_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label>Product Code</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-book"></i>
                    </div>
                    <input name="product_code" type="text" class="form-control" placeholder="Product Code"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Product Name</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-book"></i>
                    </div>
                    <input name="product_name" type="text" class="form-control" placeholder="Product Name"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Qty</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-book"></i>
                    </div>
                    <input name="qty" type="text" class="form-control" placeholder="Qty"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Price</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-book"></i>
                    </div>
                    <input name="price" type="text" class="form-control" placeholder="Price"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Photo</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-camera"></i>
                    </div>
                    <input name="fupload" type="file" accept=".jpg , .png"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Product Desc</label>
                  <div class="input-group">
                    <textarea name="product_desc" rows="10" cols="90" class="form-control" placeholder="Producy Desc"></textarea>
                  </div>
              </div>
              
              <div class="modal-footer">
                <button class="btn btn-success" type="submit">
                  Add
                </button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                  Cancel
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
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
</script>


</body>
</html>
