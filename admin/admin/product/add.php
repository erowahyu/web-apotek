<form name="form_add" action="index.php?page=create" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="name">Product Name</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="product_name" placeholder="Ex : PC" name="product_name" required value="<?php echo $e['product_name'];?>">
  </div>

  <div class="form-group">
    <label for="code">Product Code</label>
    <input type="text" class="form-control" id="product_code" placeholder="EX : PC1" name="product_code" required value="<?php echo $e['product_code'];?>">
  </div>

  <div class="form-group">
    <label for="qty">Qty</label>
    <input type="text" class="form-control" id="qty" placeholder="Ex : 1" name="qty" required value="<?php echo $e['qty'];?>">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" placeholder="Ex : 20000" name="price" required value="<?php echo $e['price'];?>">
  </div>

  <div class="form-group">
    <label for="product_img_name">Image</label>
    <input type="file" class="form-control" id="product_img_name" name="product_img_name" required>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>