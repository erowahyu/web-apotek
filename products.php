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
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }
          if($result){
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="admin/admin/images/'.$obj->product_img_name.'" width="25%" height="400px"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
       //       echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';



              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';
              $i++;
            }
          }

          $_SESSION['product_id'] = $product_id;
          echo '</div>';
          echo '</div>';
          ?>
        <div class="row" style="margin-top:10px;">
          <div class="small-12">

 <?php include 'include/footer.php'; ?>