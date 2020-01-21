<form name="form_mahasiwa" action="index.php?page=create" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="name">First Name</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="fname" placeholder="Admin" name="fname" required value="<?php echo $e['fname'];?>">
  </div>

  <div class="form-group">
    <label for="code">Last Name</label>
    <input type="text" class="form-control" id="lname" placeholder="Admin" name="lname" required value="<?php echo $e['lname'];?>">
  </div>

  <div class="form-group">
    <label for="qty">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Jl. Bandeng 3 No 3" name="address" required value="<?php echo $e['address'];?>">
  </div>

  <div class="form-group">
    <label for="price">Phone</label>
    <input type="text" class="form-control" id="phone" placeholder="08" name="phone" required value="<?php echo $e['phone'];?>">
  </div>

  <div class="form-group">
    <label for="price">Type</label>
    <input type="text" class="form-control" id="type" placeholder="admin/user" name="type" required value="<?php echo $e['type'];?>">
  </div>

  <div class="form-group">
    <label for="price">Password</label>
    <input type="password" class="form-control" id="type" placeholder="********" name="password" required value="<?php echo $e['password'];?>">
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>