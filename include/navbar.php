   <nav class="top-barr" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
   <!--       <h1><a href="index.php"><img src="images/logo1.png" width='300px' height='180px'/></a></h1> -->
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-barr">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li> 
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="cart.php">Cart</a></li>';
            echo '<li><a href="orders.php">Orders</a></li>';
            echo '<li><a href="account.php">Account</a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
          }
          else{
            echo '<li><a href="login.php">Login</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>