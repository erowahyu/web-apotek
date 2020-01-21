<?php
include 'include/sessionuser.php';
include 'include/headeruser.php';
include 'config.php';
?>
  <body>
<?php 
include 'include/navbaruser.php';
?>
<!-- ISI -->

    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>My COD Orders</h3>
        <hr>
        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '<p><hr></p>';
            }
          }
        ?>
      </div>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">

 <?php include 'include/footer.php'; ?>