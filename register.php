<?php 
include 'include/sessionuser.php';
include 'include/headeruser.php'; 
?>
  <body>

<?php 
include 'include/navbaruser.php';
?>

    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="First Name" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Last Name" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Address" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="City" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Zip Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="555921" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Phone</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="08xxxxxxxxxx" name="phone">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" placeholder="Your password" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>

 <?php include 'include/footer.php'; ?>
</body>