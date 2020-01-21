    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
       <a href="index.php"><img src="images/logo.png" width='50px' align="center" class="navbar" /></a>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li> 
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="cart.php">View Cart</a></li>';
            echo '<li><a href="orders.php">My Orders</a></li>';
            echo '<li><a href="account.php">My Account</a></li>';
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