<?php 
  $edit=$mysqli->query("select*from users where id='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_mahasiwa" action="index.php?page=update" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="name">Username / Phone</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="product_name" placeholder=" " name="product_name" required value="<?php echo $e['phone'];?>">
  </div>

  <div class="form-group">
    <label for="code">Type</label>
    <input type="text" class="form-control" id="product_code" placeholder="admin/user" name="product_code" required value="<?php echo $e['type'];?>">
  </div>


  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>