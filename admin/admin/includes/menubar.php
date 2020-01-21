<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        
      </div>
      <div class="pull-left info">
        <p><?php echo '<h3>Hi ' .$_SESSION['fname'] .'</h3>'; ?></p>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="sales.php"><i class="fa fa-money"></i> <span>Sales</span></a></li>
      <li><a href="report/"><i class="fa fa-money"></i> <span>Sales Report</span></a></li>
      <li class="header">DATA</li>
      <li><a href="user/"><i class="fa fa-users"></i> <span>Users</span></a></li>
      <li><a href="product/"><i class="fa fa-barcode"></i> <span>Product</span></a></li>
      <li class="header"> * </li>
      <li><a href="../../"><i class="fa fa-users"></i> <span>Home</span></a></li>
      <li><a href="logout.php"><i class="fa fa-barcode"></i> <span>Logout</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>