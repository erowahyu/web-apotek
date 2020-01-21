<?php
include 'include/account.php';
include 'include/headeruser.php';
?>
  <body>
<?php 
include 'include/navbaruser.php';
?>
<!-- ISI -->

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p><?php echo '<h3>Hi ' .$_SESSION['fname'] .'</h3>'; ?></p>
        <p><h4>Account Details</h4></p>
        <p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
      </div>
    </div>
    <form method="POST" action="update.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-12">

          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns end">
              <?php
                $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);
                if($result === FALSE){
                  die(mysql_error());
                }
                if($result) {
                  $obj = $result->fetch_object();
                  echo '<input type="text" id="right-label" placeholder="'. $obj->fname. '" name="fname">';
                  echo '</div>';
                   echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="small-3 columns">';
                  echo '<label for="right-label" class="right inline">Last Name</label>';
                  echo '</div>';
                  echo '<div class="small-8 columns end">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->lname. '" name="lname">';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="small-3 columns">';
                  echo '<label for="right-label" class="right inline">Address</label>';
                  echo '</div>';
                  echo '<div class="small-8 columns end">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->address. '" name="address">';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="small-3 columns">';
                  echo '<label for="right-label" class="right inline">City</label>';
                  echo '</div>';
                  echo '<div class="small-8 columns end">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->city. '" name="city">';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="small-3 columns">';
                  echo '<label for="right-label" class="right inline">Zip Code</label>';
                  echo '</div>';
                  echo '<div class="small-8 columns end">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->pin. '" name="pin">';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="small-3 columns">';
                  echo '<label for="right-label" class="right inline">Phone</label>';
                  echo '</div>';
                  echo '<div class="small-8 columns end">';
                  echo '<input type="email" id="right-label" placeholder="'. $obj->phone. '" name="phone">';
                  echo '</div>';
                  echo '</div>';
              }
              echo '<div class="row">';
              echo '<div class="small-3 columns">';
              echo '<label for="right-label" class="right inline">Password</label>';
              echo '</div>';
              echo '<div class="small-8 columns end">';
              echo '<input type="password" id="right-label" name="pwd">';
              echo '</div>';
              echo '</div>';
          ?>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Update" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
</div>
<?php include 'include/footer.php'; ?>