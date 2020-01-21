
<?php
$product_name = $_POST['product_name'];
$product_code = $_POST['product_code'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$product_img_name = $_FILES['product_img_name']['name'];
$mysqli->query("INSERT INTO products(product_name,product_code,qty,price,product_img_name) VALUES('$product_name','$product_code','$qty','$price','$product_img_name')");
move_uploaded_file($_FILES['product_img_name']['tmp_name'],'../images/'.$product_img_name);
echo "<script>alert('Data berhasil di tambah!');history.go(-2);</script>";
?>