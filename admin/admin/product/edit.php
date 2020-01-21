<?php 
  $edit=$mysqli->query("select*from products where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_mahasiwa" action="index.php?page=update" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="product_name" placeholder="Nomor Indux Mahasiswa" name="product_name" required value="<?php echo $e['product_name'];?>">
  </div>

  <div class="form-group">
    <label for="code">Product Code</label>
    <input type="text" class="form-control" id="product_code" placeholder="Nama" name="product_code" required value="<?php echo $e['product_code'];?>">
  </div>

  <div class="form-group">
    <label for="qty">Qty</label>
    <input type="text" class="form-control" id="qty" placeholder="Nama" name="qty" required value="<?php echo $e['qty'];?>">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" placeholder="Nama" name="price" required value="<?php echo $e['price'];?>">
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>