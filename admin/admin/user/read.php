
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Type</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
          <?php 
            $no = 0;
            $mahasiswa=$mysqli->query("SELECT * FROM products");
            while($m=mysqli_fetch_array($mahasiswa)){
            $no++;    
          ?>  

          <?php 
            include"paging.php";
            $p   = new paging_mahasiswa;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $mahasiswa=$mysqli->query("SELECT * FROM users 
            ORDER BY id DESC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($mahasiswa)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['fname']; ?></td>
              <td><?php echo $m['lname']; ?></td>
              <td><?php echo $m['address']; ?></td>
              <td><?php echo $m['phone']; ?></td>
              <td><?php echo $m['type']; ?></td>
              <td>
  
               <a href="index.php?page=delete&id=<?php echo $m['id'];?>"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>

            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM products"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>